<?php

namespace Grep\Biller;

use Grep\Biller\Adapters\PaystackAdapter;
use Grep\Biller\Contracts\PaymentAdapter;
use Illuminate\Support\ServiceProvider;

class LaravelBillerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__ . '/../config/biller.php' => config_path('biller.php'),
            ]);

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-biller'),
            ], 'views');*/
        }

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/biller.php', 'biller');

        $paymentProvider = config('biller.provider');

        match ($paymentProvider) {
            'paystack' => $this->app->bind(
                PaymentAdapter::class,
                PaystackAdapter::class
            ),
        };

        $this->app->singleton('biller', fn () => new Biller);
    }
}
