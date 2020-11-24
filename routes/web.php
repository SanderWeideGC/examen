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
    Route::get('/banen', 'LanesController@index')->name('backend.lanes');
    Route::get('/toernooien', 'TournamentsController@index')->name('backend.tournaments');
    Route::get('/kantine', 'ProductsController@index')->name('backend.products');
});


Route::prefix('admin/banen')->group(function() {
    Route::post('/', 'LanesController@store')->name('lanes.store');
    Route::get('/create', 'LanesController@create')->name('lanes.create');
    Route::get('/{lane}', 'LanesController@show')->name('lanes.show');
    Route::get('/{lane}/edit', 'LanesController@edit')->name('lanes.edit');
    Route::put('/', 'LanesController@update')->name('lanes.update');
    Route::delete('/{lane}/delete', 'LanesController@destroy')->name('lanes.destroy');
});