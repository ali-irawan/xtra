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
use Auth;
use Log;

/**
 * Handling login flow
 * @package Xtra\Controllers
 */
class LoginController extends Controller
{

    /**
     * Default route handler
     */
    public function index(){
        return view('xtra-view::templates.login');
    }

    /**
     * Handling login POST
     */
    public function doLogin(Request $request){

        $validator = $this->createValidator( $request );
        $validator_result = ValidatorUtil::validateInput( $validator, $request );

        if ($validator_result) {
            return redirect(route('xtra-login-page'))
                ->withErrors($validator)
                ->withInput();
        }

        $email = $request->get('email');
        $password = $request->get('password');

        // Load the login logics
        $login_logic = $this->getAuthenticationHandler();
        $login_result_user_object = $login_logic->authenticate( $email, $password);

        if($login_result_user_object != null){
            Auth::login( $login_result_user_object);
            return $this->redirectTo();
        }

        // Login fails
        return redirect(route('xtra-login-page'))
            ->withErrors([
                'email' => 'Email and password did not match',
            ])
            ->withInput();
    }

    /**
     * Handling logout
     */
    public function logout(){
        Auth::logout();
        return redirect(route(_XTRA_ROUTE_LOGIN));
    }

    /**
     * Create a validator for login process
     * @param Request $request
     */
    private function createValidator( Request $request ){

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        return $validator;
    }

    /**
     * Redirection to home page configured in config
     * @return \Illuminate\Config\Repository|mixed
     */
    private function redirectTo() {
        return redirect(route('xtra-home-page'));
    }

    /**
     * Get the authentication handler, the class must implements Xtra\Logics\Auth\XtraAuthentication
     * @see \Xtra\Logics\Auth\XtraAuthentication
     */
    protected function getAuthenticationHandler() {
        return \App::make('Xtra\Authentication');
    }
}