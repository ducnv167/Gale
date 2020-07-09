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
    return view('home');
})->name('home');


Route::get('/list-house', 'HouseController@getAll')->name('list.house');

Route::middleware(['auth'])->group(function () {
    Route::prefix('host')->group(function () {
        Route::get('/rental', "HouseController@create")->name('house.create');
        Route::post('/rental', "HouseController@store")->name('house.store');
    });
});
Route::get('/rent-house/{id}', 'OrderController@rentHouse')->name('rent');
Route::post('/rent-house', 'OrderController@store')->name('rent.store');
Route::post('/rent-house1', 'OrderController@storeUser')->name('rent.storeUser');


Route::prefix('house')->group(function () {
    Route::get('/{id}/details', 'HouseController@findById')->name('house.details');
    Route::get('/list', 'HouseController@getAll')->name('house.list');
    Route::get('/search', 'HouseController@search')->name('list.search');
});

Route::prefix('users')->group(function () {
    Route::get('register', 'UserController@create')->name('users.register');
    Route::post('store', 'UserController@store')->name('users.store');
    Route::get('login', 'UserController@login')->name('users.login');
    Route::post('login', 'UserController@loginHandling')->name('users.loginHandling');
    Route::get('logout', 'UserController@logout')->name('users.logout');
});
//login google
Route::get('/auth/redirect/{provider}', 'SocialController@redirect')->name('login-google');
Route::get('/callback/{provider}', 'SocialController@callback');
