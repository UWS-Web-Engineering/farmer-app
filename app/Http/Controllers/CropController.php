<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Cookies;

class CropController extends Controller
{
    function getCrops(){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' + $_COOKIE['token']
        ])->get('https://gateway.include.ninja/api/officer-manager/get_all_crops_farmers/3');

        $crops = json_decode($response, true);
        $title = 'Crops';

        return view('crops', compact('crops', 'title'));
    }
}
