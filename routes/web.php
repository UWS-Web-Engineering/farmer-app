<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\CropController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RequestController;

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

// Route::get('/requests', function () {
//     return view('requests', ['title' => 'New Requests']);
// });

Route::view('/crops', 'crops/list');

Route::view('/register', 'users/register');

Route::view('/login', 'users/login');

Route::view('/details', 'users/details');

Route::view('/settings', 'users/settings');

Route::get('/queries', [QueryController::class,'getQueries']);

Route::get('/clients', [ClientController::class,'getClients']);

//Route::get('/clients', function () {
 //   return view('clients', ['title' => 'Woolworths']);
//});

// Route::get('/query', function () {
//     return view('query', ['title' => 'Query']);
// });

Route::get('/query/{query_id}', [QueryController::class,'getQuery']);

Route::get('/client', function () {
    return view('client', ['title' => 'Woolworths']);
});

Route::get('/crops', [CropController::class,'getCrops']);

Route::get('/requests', [RequestController::class,'getRequests']);
