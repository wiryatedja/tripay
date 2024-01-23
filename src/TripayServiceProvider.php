<?php

namespace Wiryatedja\Tripay;

use Illuminate\Support\ServiceProvider;

class TripayServiceProvider extends ServiceProvider
{
    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/tripay.php' => $this->app->configPath('tripay.php'),
            ], 'config');
        }
    }
}