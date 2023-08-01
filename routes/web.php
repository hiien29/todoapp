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
    return view('guest.login');
})->name('login');

Route::get('/register', function () {
    return view('guest.register');
})->name('register');

Route::get('/forget', function () {
    return view('guest.forget_pass');
})->name('forget');