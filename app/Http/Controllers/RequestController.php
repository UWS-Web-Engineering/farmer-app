<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RequestController extends Controller
{
    function getRequests(){
        $response = http::get('https://mockend.com/UWS-Web-Engineering/farmer-app/requests?limit=10');
        $requests = json_decode($response, true);
        $title = 'Requests';

        return view('requests', compact('requests', 'title'));
    }
}