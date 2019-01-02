<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan (boylevantz@gmail.com)
 * Date: 1/1/19
 * Time: 10:24 AM
 */

namespace Xtra\Core;

use Illuminate\Support\ServiceProvider;
use Xtra\Logics\Auth\DefaultXtraAuthentication;

abstract class XtraFrameworkModuleProvider extends ServiceProvider
{
    public abstract function getViewNamespace();
    public abstract function registerServices();

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require_once __DIR__.'/../define.php';
        require_once __DIR__.'/../helpers.php';

        // This will load common routes
        $this->loadRoutesFrom(__DIR__.'/../routes.php');



        // This will load views templates
        $this->loadViewsFrom(__DIR__.'/../resources/views',$this->getViewNamespace());
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerServices();
    }

}