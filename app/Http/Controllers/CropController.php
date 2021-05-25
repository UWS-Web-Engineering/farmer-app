<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CropController extends Controller
{
    function getCrops(){
        $response = http::get('https://mockend.com/UWS-Web-Engineering/farmer-app/crops?limit=10');
        $crops = json_decode($response, true);
        $title = 'Crops';

        return view('crops', compact('crops', 'title'));
    }
}
