<?php

namespace Lnch\LaravelAdmin;

use Illuminate\Support\ServiceProvider;

class LaravelAdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Views', 'laravel-admin');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Set up the config if not published
        if ($this->app['config']->get('laravel-admin') === null) {
            $this->app['config']->set('laravel-admin', require __DIR__.'/../config/laravel-admin.php');
        }

        // Merge config
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-admin.php',
            'laravel-admin'
        );
    }
}
