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

Route::group([
    'prefix'    => 'admin',
    'namespace' => 'Admin',
    'as'        => 'admin.',
],function(){
    Route::get('index', 'HomeController@index')->name('index');
    Route::get('home', 'HomeController@home')->name('home');

    Route::group(['prefix' => 'profile'], function(){
        Route::get('index', 'ProfileController@index')->name('profile');
    });

    Route::group(['prefix' => 'khachhang', 'as' => 'customer.'], function(){
        Route::get('index', 'CustomerController@index')->name('index');
    });
});

Route::group([
    'prefix'    => 'frontend',
    'namespace' => 'Frontend',
    'as'        => 'frontend.',
],function(){
    Route::get('index', 'HomeController@index')->name('index');
    Route::get('about', 'AboutController@index')->name('about');
    Route::get('order', 'OrderController@index')->name('order');
    Route::get('contact', 'ContactController@index')->name('contact');
});


