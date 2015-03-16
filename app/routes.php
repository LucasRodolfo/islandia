<?php

/*
 * Routes for login
 */
Route::get('login', ['uses' => 'HomeController@showLogin']);
Route::post('login', ['uses' => 'HomeController@doLogin']);

Route::get('/', ['uses'=> 'HomeController@showHome', 'as' => 'home']);

Route::get('logout', ['uses' => 'HomeController@doLogout']);

Route::get('post/create', ['uses' => 'ByLawController@create']);
Route::post('post/create', ['uses' => 'ByLawController@store']);

Route::get('post/{id}', ['uses' => 'ByLawController@show', 'as' => 'post.show']);
Route::get('list', ['uses' => 'ByLawController@index']);


Route::get('admin', ['uses'=> 'AdminController@index']); #->before('admin');
