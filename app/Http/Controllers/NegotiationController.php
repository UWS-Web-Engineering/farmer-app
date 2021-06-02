<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class NegotiationController extends Controller
{
    function getNegotiations(){
        // $response = Http::withHeaders([
        //     'Authorization' => $_COOKIE['token']
        // ])->get('https://mockend.com/UWS-Web-Engineering/farmer-app/negotiations?limit=10');

        $url = 'https://mockend.com/UWS-Web-Engineering/farmer-app/negotiations?limit=10';
        $response = http::get($url);
      
        $requests = json_decode($response, true);
        // $title = $request['clientName'];
        $title = 'Negotiations';

        return view('negotiations', compact('requests', 'title'));
    }

    function getNegotiation($id){
        $url = "https://mockend.com/UWS-Web-Engineering/farmer-app/negotiations/" . $id;
        $response = http::get($url);

        $request = json_decode($response, true);
        // $title = $request['clientName'];
        $title = 'Negotiation';

        return view('negotiation', compact('request', 'title'));
    }
}
