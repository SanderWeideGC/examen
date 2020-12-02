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
    return view('frontend.home');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/reserveren', function () {
    return view('frontend.reserveren');
});

Route::get('/kantine', function () {
    return view('frontend.kantine');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/admin', function () {
    return view('backend.home');
});

Route::prefix('admin')->group(function() {
    Route::get('/leden', 'UsersController@index')->name('backend.users');
    Route::get('/banen', 'LanesController@index')->name('backend.lanes');
    Route::get('/reserveringen', 'ReservationsController@index')->name('backend.reservations');
    Route::get('/toernooien', 'TournamentsController@index')->name('backend.tournaments');
    Route::get('/kantine', 'ProductsController@index')->name('backend.products');
});

Route::prefix('admin/banen')->group(function() {
    Route::post('/', 'LanesController@store')->name('lanes.store');
    Route::get('/create', 'LanesController@create')->name('lanes.create');
    Route::get('/{lane}', 'LanesController@show')->name('lanes.show');
    Route::get('/{lane}/edit', 'LanesController@edit')->name('lanes.edit');
    Route::put('/', 'LanesController@update')->name('lanes.update');
    Route::get('/{lane}/delete', 'LanesController@destroy')->name('lanes.destroy');
});

Route::prefix('admin/leden')->group(function() {
    Route::post('/', 'UsersController@store');
    Route::get('/toevoegen', 'UsersController@create');
    Route::get('/{user}', 'UsersController@show');
    Route::get('/{user}/bewerken', 'UsersController@edit');
    Route::put('/{user}', 'UsersController@update');
    Route::get('/{user}/verwijderen', 'UsersController@delete');
});

Route::prefix('admin/reserveringen')->group(function() {
    Route::post('/', 'ReservationsController@store')->name('reservations.store');
    Route::get('/create', 'ReservationsController@create')->name('reservations.create');
    Route::get('/{reservation}', 'ReservationsController@show')->name('reservations.show');
    Route::get('/{reservation}/edit', 'ReservationsController@edit')->name('reservations.edit');
    Route::put('/{reservation}', 'ReservationsController@update')->name('reservations.update');
    Route::get('/{reservation}/delete', 'ReservationsController@destroy')->name('reservations.destroy');
});