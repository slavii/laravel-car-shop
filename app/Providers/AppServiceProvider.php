<?php

namespace App\Providers;

use App\Repositories\CarMakeRepository;
use App\Services\CarMakeService;
use Illuminate\Support\ServiceProvider;
use App\Models\CarMake;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\CarMakesRepository', function () {
            return new CarMakeRepository(new CarMake());
        });
        $this->app->bind('App\Services\CarMakesService', function () {
            return new CarMakeService(new CarMakeRepository(new CarMake()));
        });


    }
}
