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
Route::get('code-of-conduct'        , ['as' => 'page.code-of-conduct' , 'uses' => 'SiteController@code_of_conduct']);
Route::get('contact-us'             , ['as' => 'page.contact-us'      , 'uses' => 'SiteController@contact_us']);

Route::group(['prefix' => 'blog'], function() {
    Route::get('/'                 , ['as' => 'blog.index'      , 'uses' => 'BlogController@index']);
    Route::get('post/{id}/{title}' , ['as' => 'blog.show'       , 'uses' => 'BlogController@show']);
    Route::get('contribute'        , ['as' => 'blog.contribute' , 'uses' => 'BlogController@index']);
    Route::get('about'             , ['as' => 'blog.about'      , 'uses' => 'BlogController@index']);
});
