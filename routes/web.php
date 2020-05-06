<?php

use Illuminate\Support\Facades\Route;

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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aboutUs', 'AboutUsController@about');

Route::get('/basketball', 'ProductController@bball');

Route::get('/jordan', 'ProductController@j23');

Route::get('/loginPage', 'AdminLoginController@show');

Route::get('/adminPage', 'AdminLoginController@login');


