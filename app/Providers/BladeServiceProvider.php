<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use Sentinel;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('role', function($slug){
            if(Sentinel::check())
            {
                return Sentinel::getUser()->roles()->first()->slug === $slug;
            }
            else{
                return false;
            }
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
