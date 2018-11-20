<?php

namespace Lnch\LaravelAdmin;

use Illuminate\Support\Facades\View;
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

        view()->composer("laravel-admin::components.base", function ($view) {
            $bodyId = array_key_exists("body_id", view()->getSections())
                ? view()->getSections()["body_id"]
                : config("laravel-admin.default_body_id", "");

            $bodyClasses = config("laravel-admin.default_body_classes");
            if (array_key_exists("body_class", view()->getSections())) {
                $bodyClasses[] = view()->getSections()["body_class"];
            }

            $view->with("laravelAdminBodyClass", implode(" ", $bodyClasses))
                ->with("laravelAdminBodyID", $bodyId);
        });
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
