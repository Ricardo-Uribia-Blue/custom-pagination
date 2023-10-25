<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/resources/views/components', 'Ricardo-Uribia-Blue/custom-pagination');
        $this->publishes([
            __DIR__.'/resources/views/components' => resource_path('views/vendor/Ricardo-Uribia-Blue/custom-pagination'),
        ], 'Ricardo-Uribia-Blue/custom-pagination');
    }
}
