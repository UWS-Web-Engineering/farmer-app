<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Cookies;

class CropController extends Controller
{
    function getCrops(){

        $id = 'Bearer '.$_COOKIE['token'];

        // $response = Http::withHeaders([
        //     'Authorization' => $id 
        // ])->get('https://gateway.include.ninja/api/officer-manager/get_all_crops_farmers/3');

        $response = http::get('https://mockend.com/UWS-Web-Engineering/farmer-app/crops?limit=10');

        $crops = json_decode($response, true);
        $title = 'Crops';

        return view('crops', compact('crops', 'title'));
    }
}
