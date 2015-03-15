<?php

/*
 * Routes for login
 */
Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('home', function()
{
    return View::make('home');
});

Route::get('logout', array('uses' => 'HomeController@doLogout'));
