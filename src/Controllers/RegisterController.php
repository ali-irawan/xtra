<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 10:44 AM
 */

namespace Xtra\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Xtra\Logics\Auth\XtraAuthentication;
use Xtra\Util\ValidatorUtil;

/**
 * Handling register page
 * @package Xtra\Controllers
 */
class RegisterController extends Controller
{
    /**
     * the home page is restricted
     * HomeController constructor.
     */
    public function __construct()
    {

    }

    /**
     * Default route handler
     */
    public function index(){
        return view('xtra-view::templates.register');
    }

    /**
     * Handles the registration process
     * @param Request $request
     */
    public function register(Request $request){

        $validator = $this->createValidator( $request );
        $validator_result = ValidatorUtil::validateInput( $validator, $request );


        if ($validator_result) {
            return redirect(route(_XTRA_ROUTE_REGISTER))
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');

        // Load the login logics
        $register_logic = $this->getRegisterHandler();
        $register_result = $register_logic->register( $name, $email, $password);

        if($register_result != null){
            $request->session()->flash('status', 'Register was successful!');
            return redirect(route(_XTRA_ROUTE_REGISTER));
        }

    }

    /**
     * Create a validator for login process
     * @param Request $request
     */
    private function createValidator( Request $request ){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        return $validator;
    }

    /**
     * Get the registration handler
     * @see \Xtra\Logics\Auth\XtraAuthentication
     */
    protected function getRegisterHandler() {
        return \App::make( _XTRA_LOGIC_REGISTRATION);
    }
}