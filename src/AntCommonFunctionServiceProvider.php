<?php

namespace Debuglee\AntCommonFunction;

use Illuminate\Support\ServiceProvider;

class AntCommonFunctionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__.'/config/AntCommonFunction.php' => config_path('AntCommonFunction.php')
        ]);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         // 单例绑定服务
        $this->app->singleton('AntCommonFunction', function ($app) {
            return new AntCommonFunction();
        });

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['AntCommonFunction'];
    }

}
