<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Address;

class RobsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('address', function () {
            return new Address;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
