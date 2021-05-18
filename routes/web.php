<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\QueryController;

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

// Route::get('/queries', function () {
//     return view('queries', ['title' => 'Queries']);
// });
// Route::get('/queries', function () {
//     return view('queries', ['title' => 'Queries']);
// });

Route::get('/queries', [QueryController::class,'testHttpClient']);

Route::get('/clients', function () {
    return view('clients', ['title' => 'Woolworths']);
});

Route::get('/query', function () {
    return view('query', ['title' => 'Query']);
});