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
})->name('home');
Route::get('/bookings', function () {
    return view('frontend.bookings');
})->name('bookings');

Route::view('login', 'frontend.auth.login')->name('login.view');
Route::view('register', 'frontend.auth.register')->name('register.view');
