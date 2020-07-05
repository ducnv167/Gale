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
});

Route::prefix('rental')->group(function () {
    Route::get('/basic', "HouseController@rentalStep1")->name('house.create');
    Route::post('/basic', "HouseController@store")->name('house.store');
});
