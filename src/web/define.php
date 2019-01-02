<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/2/19
 * Time: 9:06 PM
 */

/**
 * This file will list all defined property
 */
// XTRA CONFIGURATION
define('_XTRA_CONFIG_NAME','xtra-framework');

// CONFIG css
define('_XTRA_CONFIG_CSS','xtra-framework.css');
define('_XTRA_CONFIG_CSS_BOOTSTRAP','bootstrap');

// CONFIG modules
define('_XTRA_CONFIG_MODULE_LOGIN','xtra-framework.modules.login');
define('_XTRA_CONFIG_MODULE_LOGOUT','xtra-framework.modules.logout');
define('_XTRA_CONFIG_MODULE_HOME','xtra-framework.modules.home');
define('_XTRA_CONFIG_MODULE_REGISTER','xtra-framework.modules.register');

// CONFIG home page
define('_XTRA_CONFIG_HOMEPAGE_RESTRICTED','xtra-framework.home_page.restricted');
define('_XTRA_CONFIG_HOMEPAGE_NAVBAR','xtra-framework.home_page.navbar');
define('_XTRA_CONFIG_HOMEPAGE_NAVBAR_TYPE','xtra-framework.home_page.navbar_type');

// ERROR GROUP
define('_XTRA_ERROR_GROUP_LOGIN','login');

// ROUTE
define('_XTRA_ROUTE_DEFAULT_LARAVEL_LOGIN','login');
define('_XTRA_ROUTE_LOGIN','xtra-login-page');
define('_XTRA_ROUTE_LOGOUT','xtra-logout-page');
define('_XTRA_ROUTE_HOME','xtra-home-page');
define('_XTRA_ROUTE_REGISTER','xtra-register-page');

// LOGIC SERVICE NAME
define('_XTRA_LOGIC_AUTH','Xtra\Authentication');
define('_XTRA_LOGIC_REGISTRATION','Xtra\Registration');

