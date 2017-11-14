<?php

namespace App\Providers;
 
use Illuminate\Support\ServiceProvider;
use App\shoppingCart;

class ShoppingCartProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    view()->composer("*",function($view){

        $shopping_cart_id= \Session::get('shopping_cart_id');

        $shopping_cart= ShoppingCart::findOrCreateBySession(null);

        \Session::put("shop
            ping_cart_id",$shopping_cart->id);
        $view->with("shopping_cart",$shopping_cart);

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
