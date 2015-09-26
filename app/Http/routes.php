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

Route::get('/'                       , ['as' => 'home'                 , 'uses' => 'SiteController@home']);
Route::get('/blog'                   , ['as' => 'blog.index'           , 'uses' => 'BlogController@all']);
Route::get('/blog/post/{id}/{title}' , ['as' => 'blog.show'            , 'uses' => 'BlogController@post']);
Route::get('/code-of-conduct'        , ['as' => 'page.code-of-conduct' , 'uses' => 'SiteController@code_of_conduct']);
Route::get('/contact-us'             , ['as' => 'page.contact-us'      , 'uses' => 'SiteController@contact_us']);
