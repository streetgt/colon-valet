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

//http://colon-valet.dev/test/127.0.0.1:12345
Route::get('/test/{ip}', function () {
    return view('welcome');
});
