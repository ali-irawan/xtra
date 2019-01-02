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

class XtraFrameworkProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Include helpers.php
        require_once __DIR__.'/../helpers/helpers.php';

        // Include define.php
        require_once __DIR__.'/../web/define.php';

        // This will load common routes
        $this->loadRoutesFrom(__DIR__.'/../web/routes/common.php');

        // This will load views templates
        $this->loadViewsFrom(__DIR__.'/../web/views', 'xtra-view');

        // This will register for vendor:publish for config customization
        $this->publishes([
            __DIR__.'/../config/xtra-framework.php' => config_path('xtra-framework.php'),
        ],'xtra');

        // Publishing assets
        $this->publishes([
            __DIR__.'/../web/assets' => public_path('xtra-assets'),
        ], 'xtra');

        $this->prepareMenuConfig();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/xtra-framework.php', 'xtra-framework'
        );

        $this->registerServiceIntoContainer();
    }

    /**
     * Registering service into servie container
     */
    private function registerServiceIntoContainer() {

        $this->app->singleton('Xtra\Authentication', function ($app) {
            return new DefaultXtraAuthentication();
        });
    }

    private function prepareMenuConfig(){
        // Creating YAML in app_path
        $this->publishes([
            __DIR__.'/../config/menu.yaml' => app_path('xtra/menu.yaml'),
        ],'xtra');
    }

}