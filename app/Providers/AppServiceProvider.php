<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\View;
use App\Social;
use App\Configuration;
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
        View::composer('layouts.frontend.footer', function ($view) {
            $socials=Social::where('publication_status', 1)->orderBy('created_at', 'desc')->get();
            $config=Configuration::first();
            $view->with('socials',$socials);
            $view->with('config', $config);
        });
        View::composer('layouts.frontend.main_layout', function ($view) {
        $config=Configuration::first();
        $view->with('config', $config);
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
