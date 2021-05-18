<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes // add your routes here
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/user', function () {
    return view('user');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/queries', function () {
    return view('queries');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/query', function () {
    return view('query');
});