<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * in laravel all routes are stored in the this files, so if you confused to where is the route is
 * defined you can go to here to see where the request is flowing
**/

Route::get('/','HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/about','HomeController@about');

Route::get('/posts/create','PostController@create');
Route::get('/posts/{post}','PostController@index');
Route::post('/posts','PostController@store');
Route::post('/posts/{post}/comments','CommentController@store');

Route::get('/category','CategoryController@index');
