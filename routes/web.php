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

Route::get('/kantine', function () {
    return view('frontend.kantine');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::prefix('/')->group(function() {
    Route::post('toernooien', 'TournamentsController@storeParticipation')->name('participant.store');
    Route::get('toernooien', 'TournamentsController@indexOpenTournaments')->name('frontend.toernooien');
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
    Route::put('/{lane}', 'LanesController@update')->name('lanes.update');
    Route::get('/{lane}/delete', 'LanesController@destroy')->name('lanes.destroy');
});


Auth::routes();

Route::get('/account', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', function () {
        return view('backend.home');
    });   

    Route::get('/leden', 'UsersController@index')->name('backend.users');
    Route::get('/banen', 'LanesController@index')->name('backend.lanes');
    Route::get('/toernooien', 'TournamentsController@index')->name('backend.tournaments');
    Route::get('/kantine', 'ProductsController@index')->name('backend.products');
    
    Route::prefix('/toernooien')->group(function() {
        Route::post('/', 'TournamentsController@store')->name('tournaments.store');
        Route::get('/create', 'TournamentsController@create')->name('tournaments.create');
        Route::get('/{tournament}', 'TournamentsController@show')->name('tournaments.show');
        Route::get('/{tournament}/edit', 'TournamentsController@edit')->name('tournaments.edit');
        Route::put('/{tournament}', 'TournamentsController@update')->name('tournaments.update');
        Route::get('/{tournament}/delete', 'TournamentsController@destroy')->name('tournaments.destroy');
    });
});