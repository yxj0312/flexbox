<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('flex-examples.welcome');
});

Route::get('/episode-list', function () {
    return view('flex-examples.episodelist');
});

Route::get('/media', function () {
    return view('flex-examples.media');
});


Route::get('/grid', function () {
    return view('flex-examples.grid');
});

Route::get('/nav', function () {
    return view('flex-examples.nav');
});

Route::get('/form', function () {
    return view('flex-examples.form');
});

Route::get('/flex-grid', function () {
    return view('solved-by-flexbox.grid');
});