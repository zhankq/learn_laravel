<?php

namespace App\Providers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //add fixed sql

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); //add fixed sql [当时安装laravel-admin时自动加上的]
        DB::listen(function ($query) {
           echo  $query->sql;
            $parm = $query->bindings;
            print_r($parm);
           echo  $query->time;
        });
        //
    }
}
