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

    }
}