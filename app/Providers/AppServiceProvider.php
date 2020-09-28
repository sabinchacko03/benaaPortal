<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

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
        // $response = Http::post('https://dev-ducon.cs100.force.com/services/apexrest/DuconSiteFactory/categories', [
        //     ''=>''
        // ]);
        // $result = $response->json();
        // View::share('categories', $result['data']);

        $cart = \Cart::content();
        View::share('cart', $cart);
    }
}
