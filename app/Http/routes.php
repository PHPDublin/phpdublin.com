<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'EventsController@index']);

Route::get('contact', function() {
    return view('pages/contact')->with([
        'activePage' => 'contact',
    ]);
});

Route::get('code-of-conduct', function() {
    return view('pages/code-of-conduct')->with([
        'activePage' => 'code-of-conduct',
    ]);
});
