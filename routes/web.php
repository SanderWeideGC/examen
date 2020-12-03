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

Route::get('/reserveren', function () {
    return view('frontend.reservation');
})->name('frontend.reservation');

Route::post('/reserveren', 'ReservationsController@userStore')->name('user.reservations.store');

Route::get('/reserveren/time/{lane}/{date}', 'ReservationsController@getAvailableTime');

Route::get('/admin', function () {
    return view('backend.home');
});

Route::prefix('/')->group(function() {
    Route::post('toernooien', 'TournamentsController@storeParticipation')->name('participant.store');
    Route::get('toernooien', 'TournamentsController@indexOpenTournaments')->name('frontend.toernooien');
});


Auth::routes();

Route::get('/account', 'HomeController@index')->name('home');

// Protected by admin middleware
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', function() { return view('backend.home'); });
    
    Route::get('/leden', 'UsersController@index')->name('backend.users');
    Route::get('/banen', 'LanesController@index')->name('backend.lanes');
    Route::get('/reserveringen', 'ReservationsController@index')->name('backend.reservations');
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

    Route::prefix('/banen')->group(function() {
        Route::post('/', 'LanesController@store')->name('lanes.store');
        Route::get('/create', 'LanesController@create')->name('lanes.create');
        Route::get('/{lane}', 'LanesController@show')->name('lanes.show');
        Route::get('/{lane}/edit', 'LanesController@edit')->name('lanes.edit');
        Route::put('/', 'LanesController@update')->name('lanes.update');
        Route::get('/{lane}/delete', 'LanesController@destroy')->name('lanes.destroy');
    });

    Route::prefix('/leden')->group(function() {
        Route::post('/', 'UsersController@store');
        Route::get('/toevoegen', 'UsersController@create');
        Route::get('/{user}', 'UsersController@show')->name('users.show');
        Route::get('/{user}/bewerken', 'UsersController@edit');
        Route::put('/{user}', 'UsersController@update');
        Route::get('/{user}/verwijderen', 'UsersController@delete');
    });

    Route::prefix('/reserveringen')->group(function() {
        Route::post('/', 'ReservationsController@store')->name('reservations.store');
        Route::get('/create', 'ReservationsController@create')->name('reservations.create');
        Route::get('/{reservation}', 'ReservationsController@show')->name('reservations.show');
        Route::get('/{reservation}/edit', 'ReservationsController@edit')->name('reservations.edit');
        Route::put('/{reservation}', 'ReservationsController@update')->name('reservations.update');
        Route::get('/{reservation}/delete', 'ReservationsController@destroy')->name('reservations.destroy');
    });

    Route::prefix('/kantine')->group(function() {
        Route::post('/', 'ProductsController@store')->name('products.store');
        Route::get('/create', 'ProductsController@create')->name('products.create');
        Route::get('/', 'ProductsController@index')->name('products.index');
        Route::get('/{product}', 'ProductsController@show')->name('products.show');
        Route::get('/{product}/edit', 'ProductsController@edit')->name('products.edit');
        Route::put('/{product}', 'ProductsController@update')->name('products.update');
        Route::get('/{product}/delete', 'ProductsController@destroy')->name('products.destroy');
    });
});