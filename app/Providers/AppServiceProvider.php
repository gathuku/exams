<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use Auth;
use App\Role;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);


        Blade::if('student', function(){
             if (auth()->user()->role_id == 1) {
               return true;
             }
             return false;
        });

        Blade::if('lecturer', function(){
             if (auth()->user()->role_id == 2) {
               return true;
             }
             return false;
        });

        Blade::if('admin', function(){
             if (auth()->user()->role_id == 3) {
               return true;
             }
             return false;

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
