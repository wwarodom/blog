<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function() {
	// echo "<h1>Foo</h1>";
	return view('foo');
});


Route::get('/example', function() {
	// echo "<h1>Foo</h1>";
	return view('example.example');
});
