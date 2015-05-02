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

// PATERN PARAMS
Route::pattern('id', '[0-9]+');

Route::get('/', 'HomeController@index', ['as' => 'home']);

Route::get('/vote/{id}', [
    'as'    => 'vote',
    'uses'  => 'VoteController@index'
]);

// USER
Route::group(['prefix' => 'user'], function()
{
    // GET SUBSCRIBE
    Route::get('subscribe', [
        'as'    => 'user.subscribe',
        'uses'  => 'UserController@subscribe'
    ]);

    // POST SUBSCRIBE
    Route::post('subscribe', 'UserController@createAccount');

    // GET LOGIN
    Route::get('login', [
        'as'    => 'user.login',
        'uses'  => 'UserController@login'
    ]);

    // POST SUBSCRIBE
    Route::post('login', 'UserController@connect');
    
});

// STATS
Route::group(['prefix' => 'stats'], function()
{
    // GET SUBSCRIBE
    Route::get('online', [
        'as'    => 'stats.online',
        'uses'  => 'StatsController@online'
    ]);

});
