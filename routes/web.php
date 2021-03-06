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

Route::get('/home', function () {
    return view('child');
});

Route::get('/about', function () {
    return view('layouts/about');
});

Route::get('/contact', function () {
    return view('layouts/contact');
});
Route::get('/shop', function () {
    return view('layouts/shop');
});



Auth::routes();