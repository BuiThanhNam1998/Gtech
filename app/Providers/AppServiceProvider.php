<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\DanhMucCon;
use Illuminate\Support\Facades\View;
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
        $danhmuccon = DanhMucCon::all();
        View::share('danhmuccon', $danhmuccon);
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
