<?php

/**
 * These routes is for common page such as Login Page, Register Page, Maintenance Page, Guest Page, Home page after Login, etc.
 */

Route::group(['namespace' => '\Xtra\Controllers'], function(){

    if (config(_XTRA_CONFIG_MODULE_LOGIN)) {
        $url = config(_XTRA_CONFIG_MODULE_LOGIN);
        Route::get($url,'LoginController@index')->name('xtra-login-page');
        Route::post($url,'LoginController@doLogin')->name('xtra-login-page');
    }


    // TODO the xtra-tenant route, should can be configured
    Route::get('/xtra-tenant','TenantController@index')->name('xtra-tenants-page');

    // TODO the xtra-role route, should can be configured
    Route::get('/xtra-role','RoleController@index')->name('xtra-roles-page');

    // TODO the xtra-user route, should can be configured
    Route::get('/xtra-user','UserController@index')->name('xtra-users-page');

    // TODO the xtra-user-group route, should can be configured
    Route::get('/xtra-user-group','UserGroupController@index')->name('xtra-groups-page');

});
