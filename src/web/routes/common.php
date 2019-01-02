<?php

/**
 * These routes is for common page such as Login Page, Register Page, Maintenance Page, Guest Page, Home page after Login, etc.
 */

Route::group(['middleware'=> ['web'], 'namespace' => '\Xtra\Controllers'], function(){

    if (config(_XTRA_CONFIG_MODULE_LOGIN)) {
        $url = config(_XTRA_CONFIG_MODULE_LOGIN);

        Route::get($url,'LoginController@index')->name(_XTRA_ROUTE_LOGIN);
        Route::post($url,'LoginController@doLogin')->name(_XTRA_ROUTE_LOGIN);

        Route::get($url,'LoginController@index')->name(_XTRA_ROUTE_DEFAULT_LARAVEL_LOGIN);
    }

    if (config(_XTRA_CONFIG_MODULE_LOGOUT)) {
        $url = config(_XTRA_CONFIG_MODULE_LOGOUT);
        Route::get($url,'LoginController@logout')->name(_XTRA_ROUTE_LOGOUT);
    }

    if (config(_XTRA_CONFIG_MODULE_HOME)) {
        $url = config(_XTRA_CONFIG_MODULE_HOME);

        Route::get($url,'HomeController@index')->name(_XTRA_ROUTE_HOME);
    }

    if (config(_XTRA_CONFIG_MODULE_REGISTER)) {
        $url = config(_XTRA_CONFIG_MODULE_REGISTER);

        Route::get($url,'RegisterController@index')->name(_XTRA_ROUTE_REGISTER);
        Route::post($url,'RegisterController@register')->name(_XTRA_ROUTE_REGISTER);
    }

    // TODO the xtra-tenant route, should can be configured
    // Route::get('/xtra-tenant','TenantController@index')->name('xtra-tenants-page');

    // TODO the xtra-role route, should can be configured
    // Route::get('/xtra-role','RoleController@index')->name('xtra-roles-page');

    // TODO the xtra-user route, should can be configured
    // Route::get('/xtra-user','UserController@index')->name('xtra-users-page');

    // TODO the xtra-user-group route, should can be configured
    // Route::get('/xtra-user-group','UserGroupController@index')->name('xtra-groups-page');

});
