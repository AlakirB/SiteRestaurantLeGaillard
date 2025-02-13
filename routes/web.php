<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/carte', function () {
    return view('carte');
})->name('carte');

Route::get('/restaurant', function () {
    return view('restaurant');
})->name('restaurant');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');