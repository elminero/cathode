<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Twitter;

use App\Example;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('happy', function () {
            return new Example();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
