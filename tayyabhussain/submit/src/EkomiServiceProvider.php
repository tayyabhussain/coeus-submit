<?php

namespace TayyabHussain\Submit;

use Illuminate\Support\ServiceProvider;

class EkomiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['submit'] = $this->app->share(function ($app) {
            return new Submit;
        });
    }
}
