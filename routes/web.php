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

Route::get('/admin', function () {
    return view('backend.home');
});

Route::prefix('admin')->group(function() {
    Route::get('/leden', 'UsersController@index')->name('backend.users');
    Route::get('/banen', 'LanesController@index')->name('backend.lanes');
    Route::get('/toernooien', 'TournamentsController@index')->name('backend.tournaments');
    Route::get('/kantine', 'ProductsController@index')->name('backend.products');
});