<?php

namespace Wiryatedja\Tripay;

use Illuminate\Support\ServiceProvider;

class TripayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application service.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('tripay.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'tripay');
    }
}