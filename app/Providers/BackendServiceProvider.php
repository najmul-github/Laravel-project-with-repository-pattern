<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\Default\DefaultService',
            'App\Services\Default\DefaultServiceImp',
        );        
        
        $this->app->bind(
            'App\Repositories\Default\DefaultRepository',
            'App\Repositories\Default\DefaultRepositoryImp',
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
