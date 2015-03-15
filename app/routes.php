<?php

/*
 * Routes for login
 */
Route::get('login', ['uses' => 'HomeController@showLogin']);
Route::post('login', ['uses' => 'HomeController@doLogin']);

Route::get('/', ['uses'=> 'HomeController@showHome', 'as' => 'home']);

Route::get('logout', ['uses' => 'HomeController@doLogout']);

Route::get('post/{id}', ['uses' => 'ByLawController@show', 'as' => 'post.show']);
Route::get('list', ['uses' => 'ByLawController@index']);


#Route::group(['before' => 'auth'], function()
    #{
        //TODO: Routes that require login
    Route::get('admin', ['uses'=> 'AdminController@index']); #->before('admin');
    #});
