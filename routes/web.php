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
 

 
 



Route::get('/', function () {
    return view('extern.start');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
 
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/r', 'GameController@radarman');


Route::resource('intern/posts', 'PostController');


Route::get('/home', 'PostController@index');
 

Route::post('/upload', 'UserController@upload');

 
Route::get('/myprofile', 'UserController@index');
 
Route::get('/myprofile/edit', 'UserController@edit');
