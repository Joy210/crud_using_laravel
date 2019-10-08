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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontendController@show');
Route::get('/create', 'FrontendController@create');
Route::get('/edit/{id}', 'FrontendController@edit');
Route::get('/delete/{id}', 'FrontendController@destroy');
Route::get('/details/{id}', 'FrontendController@details');

Route::post('/post', 'FrontendController@store');
Route::post('/update/{id}', 'FrontendController@update');

// ImageController

Route::get('/create-image', 'ImageController@create');
Route::get('/show-image', 'ImageController@show');

Route::get('/edit/{id}', 'ImageController@edit');
Route::get('/delete/{id}', 'ImageController@destroy');

Route::post('/add-image', 'ImageController@store');

Route::post('/update/{id}', 'ImageController@update');
