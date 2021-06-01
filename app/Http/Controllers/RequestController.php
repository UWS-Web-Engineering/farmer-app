<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Cookies;

class RequestController extends Controller
{
    function getRequests(){
        // $response = Http::withHeaders([
        //     'Authorization' => $_COOKIE['token']
        // ])->get('https://mockend.com/UWS-Web-Engineering/farmer-app/requests?limit=10');

        $url = 'https://mockend.com/UWS-Web-Engineering/farmer-app/requests?limit=10';
        $response = http::get($url);
      
        $requests = json_decode($response, true);
        $title = 'Requests';

        return view('requests', compact('requests', 'title'));
    }

    function getRequest($id){
        $url = "https://mockend.com/UWS-Web-Engineering/farmer-app/request/" . $id;
        $response = http::get($url);

        $request = json_decode($response, true);
        $title = 'Request';

        return view('request', compact('request', 'title'));
    }
}
