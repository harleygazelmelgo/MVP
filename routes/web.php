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

Auth::routes(['register' => false]);

Route::get('/aboutUs', 'AboutUsController@about');

Route::get('/basketball', 'ProductController@showBasketball');

Route::get('/jordan', 'ProductController@showJordan');

Route::get('/home', function () {
    return redirect ('/dashboard');
} );


Route::get('/dashboard', 'AdminLoginController@newItems');







// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', 'AdminLoginController@login');

// Route::get('/dashboard', 'AdminLoginController@confirmLogin');
