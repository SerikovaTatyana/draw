<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\City;

use Jenssegers\Date\Date;

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        // Получаем список городов 
        view()->composer('auth.register', function($view){

            $view->with('all_cities', City::get());

        });

        // автозагрузка библиотеки jenssegers/date
        Date::setlocale(config('app.locale'));


        Schema::defaultStringLength(191);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
