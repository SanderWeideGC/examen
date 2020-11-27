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

Route::prefix('admin/leden')->group(function() {
    Route::post('/', 'UsersController@store');
    Route::get('/toevoegen', 'UsersController@create');
    Route::get('/{user}', 'UsersController@show');
    Route::get('/{user}/bewerken', 'UsersController@edit');
    Route::put('/{user}', 'UsersController@update');
    Route::get('/{user}/verwijderen', 'UsersController@delete');
});