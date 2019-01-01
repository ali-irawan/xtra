<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 10:24 AM
 */

namespace Xtra\Core;

use Illuminate\Support\ServiceProvider;

class XtraFrameworkProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/common.php');
        $this->loadViewsFrom(__DIR__.'/views', 'xtra-view');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Xtra\Controllers\LoginController');
    }
}