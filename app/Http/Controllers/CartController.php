<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;

class CartController extends Controller
{
	public function index() {
		session(['cake' => '49.90']);
		session()->put('foo','Foo bar value');

		Cookie::queue(cookie('cupPrice', '5',3600)); //name, value, minutes
		Cookie::queue(cookie('bar', 'Bar Cookie value',3600));  
	 	return view('cart.index');
	}

    public function orderProduct(Request $request) {    	
    	echo session('cake');
    	session()->forget('cake');
    	echo "<br/><br/>	";
    	var_dump(session()->all());

    	echo $request->cookie('bar');
    	Cookie::queue(Cookie::forget('bar', 'Bar Cookie value',3600));
    	echo $request->cookie('bar');
    }
}
