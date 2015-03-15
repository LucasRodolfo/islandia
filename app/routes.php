<?php

// Login route
Route::get('login', array('uses' => 'HomeController@showLogin'));

// Login process route
Route::post('login', array('uses' => 'HomeController@doLogin'));


Route::get('logout', array('uses' => 'HomeController@doLogout'));