<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 10:44 AM
 */

namespace Xtra\Controllers;

use Illuminate\Routing\Controller;

/**
 * Handling home page
 * @package Xtra\Controllers
 */
class HomeController extends Controller
{

    /**
     * Default route handler
     */
    public function index(){
        // Currently only top navbar available
        // TODO Need to add some options of navbar, top navbar, bottom navbar, or sidebar
        return view('xtra-view::templates.home.home-top-navbar');
    }
}