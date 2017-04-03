<?php

Route::resource('boards','Boards\\BoardsController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function() { 
	return view('foo');
});

Route::get('/example', function() { 
	return view('example.example')
			->with('name','John');
});

Route::get('/example2', function() { 
	return view('example.example2');
});

Route::get('/calculator','CalculatorController@index' );
Route::post('/add','CalculatorController@add');
Route::post('/val','CalculatorController@val');

Route::get('/cart','CartController@index');

Route::get('/cart/orderProduct','CartController@orderProduct');