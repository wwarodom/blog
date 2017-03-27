<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index() {
    	return view('calculator.index');
    }

    public function add(Request $request) {
    	$num1 = $request->input('num1');
    	$num2 = $request->input('num2');
    	$result = $num1 + $num2;
    	return view('calculator.index')
    			->with('result',$result)
    			->with('num1',$num1)
    			->with('num2',$num2);	
    }
}
