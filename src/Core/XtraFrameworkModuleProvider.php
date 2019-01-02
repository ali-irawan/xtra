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

/**
 * Class XtraFrameworkModuleProvider currently is not done yet. Don't use it
 * @package Xtra\Core
 */
abstract class XtraFrameworkModuleProvider extends ServiceProvider
{
    /**
     * Get the view namespace
     */
    public abstract function getViewNamespace();

    /**
     * Implement to register services
     * @return mixed
     */
    public abstract function registerServices();

    /**
     * Return the current directory
     * @return mixed
     */
    public abstract function currentDirectory();

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        require_once $this->currentDirectory().'/../define.php';
        require_once $this->currentDirectory().'/../helpers.php';

        // This will load common routes
        $this->loadRoutesFrom($this->currentDirectory().'/../routes.php');



        // This will load views templates
        $this->loadViewsFrom($this->currentDirectory().'/../resources/views',$this->getViewNamespace());
        */
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