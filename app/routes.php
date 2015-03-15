<?php

/*
 * Routes for login
 */
Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));


Route::get('logout', array('uses' => 'HomeController@doLogout'));