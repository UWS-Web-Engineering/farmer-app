<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Mock data routes
Route::prefix('mock')->group(function () {
    // GET /farmers
    // RETURNS array of all of the farmers
    Route::get('/farmers', function () {
        $farmers = array(
            array(
                "id"=> 1,
                "userName"=> "atoosafarms",
                "password"=> "123456",
                "regionId"=> 17,
                "farmerEmail"=> "at@oo.sa",
                "farmerName"=> "Atoosa",
                "farmerPhone"=> "01234",
                "farmerAddr"=> "1 Some st."),
            array(
                "id"=> 2,
                "userName"=> "mammadys",
                "password"=> "123456",
                "regionId"=> 29,
                "farmerEmail"=> "ma@ma.dd",
                "farmerName"=> "Mammad",
                "farmerPhone"=> "01514",
                "farmerAddr"=> "2 Some rd.")
            );
        return response($farmers, 200);
    });
    // GET /farmers/{id}
    // RETURNS farmer with the specified ID
    Route::get('/farmers/{id}', function ($id) {
        if ($id != 1) return response("Farmer not found!", 404);

        $farmer = array(
            "id"=> 1,
            "userName"=> "atoosafarms",
            "password"=> "123456",
            "regionId"=> 17,
            "farmerEmail"=> "at@oo.sa",
            "farmerName"=> "Atoosa",
            "farmerPhone"=> "01234",
            "farmerAddr"=> "1 Some st."
        );
        return response($farmer, 200);
    });
    // POST /farmers {userName, password, regionID}
    // creates a new farmer instance with input data
    // RETURNS new farmer
    Route::post('/farmers', function (Request $request) {
        $userName = $request->input("userName");
        if (empty($userName)) return response("UserName not provided!", 400);
        $password = $request->input("password");
        if (empty($password)) return response("Password not provided!", 400);
        $regionId = $request->input("regionId");
        if (empty($regionId)) return response("Region ID not provided", 400);
        $newFarmer = array(
            "id"=> 2,
            "userName"=> $userName,
            "password"=> $password,
            "regionId"=> $regionId,
            "farmerEmail"=> "",
            "farmerName"=> "",
            "farmerPhone"=> "",
            "farmerAddr"=> ""
        );
        return response($newFarmer, 201);
    });
    // PATCH /farmers/{id} {farmerEmail, farmerName, farmerPhone, farmerAddr}
    // updates the farmer with the specified ID with input data
    // RETURNS updated farmer
    Route::patch('/farmers/{id}', function ($id, Request $request){
        if ($id != 2) return response("Farmer does not exist!", 404);

        $updatedFarmer = array(
            "id"=> 2,
            "userName"=> "atoosa",
            "password"=> "123",
            "regionId"=> 17,
            "farmerEmail"=> "",
            "farmerName"=> "",
            "farmerPhone"=> "",
            "farmerAddr"=> ""
        );
        $farmerEmail = $request->input("farmerEmail");
        if ($farmerEmail != null) $updatedFarmer["farmerEmail"] = $farmerEmail;
        $farmerName = $request->input("farmerName");
        if ($farmerName != null) $updatedFarmer["farmerName"] = $farmerName;
        $farmerPhone = $request->input("farmerPhone");
        if ($farmerPhone != null) $updatedFarmer["farmerPhone"] = $farmerPhone;
        $farmerAddr = $request->input("farmerAddr");
        if ($farmerAddr != null) $updatedFarmer["farmerAddr"] = $farmerAddr;

        return response($updatedFarmer, 200);
    });
    // POST /auth {userName, password}
    // authenticates farmer
    // RETURNS {farmerID, token}
    Route::post('/auth', function (Request $request) {
        $userName = $request->input("userName");
        $password = $request->input("password");
        if ($userName == "atoosa" && $password == "123") {
            $auth = array(
                "farmerID"=> 2,
                "token"=> "53cr3tt0k3n"
            );
            return response($auth, 201);
        } else {
            return response("Invalid credentials!", 401);
        }        
    });
});
