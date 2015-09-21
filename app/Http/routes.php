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

Route::get('/', 'SiteController@home');
Route::get('/blog', 'BlogController@all');
Route::get('/blog/post/{id}/{title}', 'BlogController@post');
Route::get('/code-of-conduct', 'SiteController@code_of_conduct');
Route::get('/contact-us', 'SiteController@contact_us');