<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
	public function index() {
		session(['cake' => '49.90']);
		session()->put('foo','Foo bar value');
	 	return view('cart.index');
	}

    public function orderProduct() {    	
    	echo session('cake');
    	session()->forget('cake');
    	echo "<br/><br/>	";
    	var_dump(session()->all());
    }
}
