<?php

namespace Mckenziearts\Notify;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

final class LaravelNotifyServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerBladeDirective();
        $this->registerPublishables();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'notify');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/notify.php', 'notify');

        $this->app->singleton('notify', function ($app) {
            return $app->make(LaravelNotify::class);
        });
    }

    public function registerBladeDirective(): void
    {
        Blade::directive('notifyCss', function () {
            return '<?php echo notifyCss(); ?>';
        });

        Blade::directive('notifyJs', function () {
            return '<?php echo notifyJs(); ?>';
        });
    }

    public function registerPublishables(): void
    {
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/mckenziearts/laravel-notify'),
        ], 'notify-assets');

        $this->publishes([
            __DIR__.'/../config/notify.php' => config_path('notify.php'),
        ], 'notify-config');
    }
}
