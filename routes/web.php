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

Route::get('/admin', function () {
    return view('backend.home');
});

Route::prefix('admin')->group(function() {
    Route::get('/leden', 'UsersController@index')->name('backend.users');
    Route::post('/leden', 'UsersController@store');
    Route::get('/banen', 'LanesController@index')->name('backend.lanes');
    Route::get('/toernooien', 'TournamentsController@index')->name('backend.tournaments');
    Route::get('/kantine', 'ProductsController@index')->name('backend.products');
});

Route::prefix('admin/leden')->group(function() {
    Route::get('/toevoegen', 'UsersController@create');
    Route::get('/{lid}', 'UsersController@show');
    Route::get('/{lid}/bewerken', 'UsersController@edit');
    Route::put('/{lid}', 'UsersController@update');
});