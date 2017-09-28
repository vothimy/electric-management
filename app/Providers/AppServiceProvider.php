<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Thon;
use App\Xa;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('adminUrl',getenv('ADMIN_URL'));
        View::share('publicUrl',getenv('PUBLIC_URL'));
        View::share('arThon',Thon::all());
        View::share('arXa',Xa::all());
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
