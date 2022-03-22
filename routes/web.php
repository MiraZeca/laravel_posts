<?php

use Illuminate\Support\Facades\Route;


Route::get('/', "App\Http\Controllers\PostController@index");
Route::get('/post/create', "App\Http\Controllers\PostController@create");
Route::post('/post/create', "App\Http\Controllers\PostController@store");
Route::get('/post/{id}', "App\Http\Controllers\PostController@show");

Route::get('/post/{id}/edit', "App\Http\Controllers\PostController@edit");
Route::put('/post/{id}/edit', "App\Http\Controllers\PostController@update");
Route::get('/post/{id}/delete', "App\Http\Controllers\PostController@delete");

Route::get('/users', "App\Http\Controllers\UsersController@index");
Route::get('/user/{user}/posts', "App\Http\Controllers\UsersController@posts");

