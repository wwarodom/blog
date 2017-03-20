<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
	public function index() {
		session(['cake' => '49.90']);
		session()->put('foo','Foo bar value');

		$cookie = cookie('cupPrice', '5','5'); //name, value, minutes
	 	return view('cart.index')->withCookie($cookie);
	}

    public function orderProduct() {    	
    	echo session('cake');
    	session()->forget('cake');
    	echo "<br/><br/>	";
    	var_dump(session()->all());
    }
}
