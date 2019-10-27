<?php

namespace Mckenziearts\Notify;

use Illuminate\Support\ServiceProvider;

class LaravelNotifyServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/mckenziearts/laravel-notify'),
        ], 'notify.assets');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'notify');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/notify.php', 'notify');

        // Register the service the package provides.
        $this->app->singleton('notify', function ($app) {
            return $app->make(LaravelNotify::class);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
