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

Route::get('/home', function () {
    return view('welcome');

})->name('home');



Route::get('/list-house','HouseController@getAll')->name('list.house');

Route::prefix('rental')->group(function () {
    Route::get('/basic', "HouseController@rentalStep1")->name('house.create');
    Route::post('/basic', "HouseController@store")->name('house.store');
});

Route::get('/{id}/details', 'HouseController@findById')->name('houses.details');


Route::get('/list-house', 'HouseController@getAll')->name('list.house');




Route::prefix('users')->group(function () {
    Route::get('register','UserController@create')->name('users.register');
    Route::post('store','UserController@store')->name('users.store');
    Route::get('login','UserController@login')->name('users.login');
    Route::post('login','UserController@loginHandling')->name('users.loginHandling');
    Route::get('logout','UserController@logout')->name('users.logout');
});

//login google
Route::get('/auth/redirect/{provider}', 'SocialController@redirect')->name('login-google');
Route::get('/callback/{provider}', 'SocialController@callback');
