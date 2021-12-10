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
    Route::get('index', 'HomeController@index')->name('home');

    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::get('putPitch', 'PutPitchController@index')->name('putPitch');

    Route::group([
        'prefix'    => 'customer',
        'as'        => 'customer.',
    ],function(){
        Route::get('/', 'CustomerController@index')->name('index');
        Route::get('add/', 'CustomerController@create')->name('add');
        Route::post('add', 'CustomerController@store')->name('create');
        Route::get('edit/{id}', 'CustomerController@edit')->name('edit');
        Route::post('edit/{id}', 'CustomerController@update')->name('update');
        Route::get('delete/{id}', 'CustomerController@destroy')->name('delete');
    });

    // Route::get('personnel', 'PersonnelController@index')->name('personnel');
    Route::group([
        'prefix'    => 'personnel',
        'as'        => 'personnel.',
    ],function(){
        Route::get('/', 'PersonnelController@index')->name('index');
        Route::get('add/', 'PersonnelController@create')->name('add');
        Route::post('add', 'PersonnelController@store')->name('create');
        Route::get('edit/{id}', 'PersonnelController@edit')->name('edit');
        Route::post('edit/{id}', 'PersonnelController@update')->name('update');
        Route::get('delete/{id}', 'PersonnelController@destroy')->name('delete');
    });

    Route::get('football-pitch', 'FootballPitchController@index')->name('football_pitch');

    Route::get('service', 'ServiceController@index')->name('service');

    Route::get('regulation', 'RegulationController@index')->name('regulation');

    Route::get('chart', 'ChartController@index')->name('chart');
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


