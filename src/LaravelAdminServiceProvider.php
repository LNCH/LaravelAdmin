<?php

namespace Lnch\LaravelAdmin;

use Lnch\LaravelAdmin\Commands\AssetLinkCommand;
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

        // Add in base classes and IDs to the body tag, using view composers
        view()->composer("laravel-admin::components.base", function ($view) {
            $defaultBodyId = "p__".str_replace("/", "_", substr(request()->getRequestUri(), 1));
            $bodyId = array_key_exists("body_id", view()->getSections())
                ? view()->getSections()["body_id"]
                : $defaultBodyId;

            $bodyClasses = config("laravel-admin.default_body_classes");
            if (array_key_exists("body_class", view()->getSections())) {
                $bodyClasses[] = view()->getSections()["body_class"];
            }

            $view->with("laravelAdminBodyClass", implode(" ", $bodyClasses))
                ->with("laravelAdminBodyID", $bodyId);
        });

        // Register commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                AssetLinkCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/lnch/laravel-admin'),
        ], 'public');

        $this->publishes([
            __DIR__.'/views' => resource_path('vendor/lnch/laravel-admin'),
        ], 'views');
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
