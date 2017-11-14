<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class MainController extends Controller{

	public function home(){

		$shopping_cart_id= \Session::get('shopping_cart_id');

		$shopping_cart= ShoppingCart::findOrCreateBySession(null);

		\Session::put("shopping_cart_id",$shopping_cart->id);


		return view ('main.home');
	}

	public function cerrar(){
		Auth::logout();	
		return view("home");
	}

}
