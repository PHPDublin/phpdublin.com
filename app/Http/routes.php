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

<<<<<<< HEAD
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
=======
Route::get('/'                , ['as' => 'home'                 , 'uses' => 'MeetupController@index']);
Route::get('/code-of-conduct' , ['as' => 'page.code-of-conduct' , 'uses' => 'SiteController@code_of_conduct']);
Route::get('/contact-us'      , ['as' => 'page.contact-us'      , 'uses' => 'SiteController@contact_us']);

Route::group(['prefix' => 'blog'], function() {
    Route::get('/'            , ['as' => 'blog.index' , 'uses' => 'BlogController@index']);
    Route::get('{id}' , ['as' => 'blog.show'  , 'uses' => 'BlogController@show']);
});

Route::group(['prefix' => 'meetup'], function() {
    Route::get('/'            , ['as' => 'meetup.index' , 'uses' => 'MeetupController@index']);
    Route::get('{id}/{title}' , ['as' => 'meetup.show'  , 'uses' => 'MeetupController@show']);
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
});
