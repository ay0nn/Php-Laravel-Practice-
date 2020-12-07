<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome to Laravel');
});

Route::get('/login','loginCon@index');
Route::post('/login','loginCon@verify');
Route::get('/logout','LogoutController@index');


Route::get('/home','HomeController@index');
Route::get('/create','HomeController@create');
Route::get('/ulist','HomeController@ulist');
