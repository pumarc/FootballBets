<?php

namespace App\Providers;

use App\Providers\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
      //Blade::if('isAdmin',function() {
      //  return Auth::check() && Auth::user()->admin === 1;
      //});
    }
}
