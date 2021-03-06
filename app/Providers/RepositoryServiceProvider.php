<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Interfaces\ILeaseRepository',
            'App\Repositories\LeaseRepository'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\IRentableRepository',
            'App\Repositories\RentableRepository'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\IUserRepository',
            'App\Repositories\UserRepository'
        );
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
