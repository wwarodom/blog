<?php

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

Route::get('/cart','CartController@index');

Route::get('/cart/orderProduct','CartController@orderProduct');