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
    return view('welcome');
});
Route::get('/create', function () {
    return view('create');
});

Auth::routes();

Route::get('/home', 'UserController@indexuser');
Route::get('/indexusers/{id}', 'UserController@indexusers');
Route::get('/watch/{id}', 'WatchController@watch');
Route::get('/edite/{id}', 'UserController@edite');
Route::get('acch', 'siteController@acch');
Route::post('sss', 'siteController@sss');
Route::get('/profile', 'UserController@profile');
Route::post('/updateUser', 'UserController@updateUser');
Route::post('/hhh', 'UserController@filtre');
Route::post('/filtre', 'UserController@filre');
Route::get('/sup/{id}', 'UserController@sup');
Route::get('/delete/{id}', 'UserController@delete');
Route::post('/store', 'UserController@store');
Route::post('/update/{id}', 'UserController@update');

