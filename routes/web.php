<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

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

Route::get('/requests', function () {
    return view('requests', ['title' => 'New Requests']);
});

<<<<<<< HEAD
Route::get('/queries', function () {
    return view('queries', ['title' => 'Queries']);
});

Route::get('/clients', function () {
    return view('clients', ['title' => 'Woolworths']);
});

Route::get('/query', function () {
<<<<<<< HEAD
    return view('query', ['title' => 'Query']);
});

Route::get('/welcome', function () {
    return view('welcome');
=======
    return view('query');
>>>>>>> Sample welcome layout
=======
Route::get('/welcome', function () {
    return view('welcome');
>>>>>>> Sample welcome layout
});

