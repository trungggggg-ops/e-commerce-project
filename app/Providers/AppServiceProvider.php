<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    
        view()->composer('*', function ($view) {
            $view->with('cart', new Cart());

                // if(session()->has('email')) {
                //     $view->with('email', session('email'));
                // }
                // $view->with('api_data', Session::get('api_data', []));
        });
        
    }
}
