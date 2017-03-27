<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;

class CalculatorController extends Controller
{
    public function index() {
    	return view('calculator.index');
    }

    public function add(Request $request) {

    	$rules = [ 'num1' => 'required|numeric' ];

    	$messages = [
    		'required' => 'กรุณากรอกข้อมูลครับ',
    		'numeric' => 'กรุณากรอกข้อมูลเป็นตัวเลขด้วยครับ',
]		;

    	$v = Validator::make($request->all(), $rules,$messages);

		if ( $v->passes() ) {
	    	$num1 = $request->input('num1');
	    	$num2 = $request->input('num2');
	    	$result = $num1 + $num2;

   	    	return view('calculator.index')
    			->with('result',$result)
    			->with('num1',$num1)
    			->with('num2',$num2);	

		} else {
			return redirect('/calculator')
				->withErrors($v->messages());
		}
    }
}
