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

Route::get('/', 'UsersDataController@index')->name('users');


Route::get('/users',"UsersDataController@index");

Route::get('/app', function () {
    return view('welcome in my app');
});

Auth::routes();
Route::resource('users', 'UsersDataController');
Route::get('/home', 'HomeController@index')->name('home');
