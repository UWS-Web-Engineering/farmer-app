<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Cookies;

class ClientController extends Controller
{
    function getClients(){
        $response = Http::withHeaders([
            'Authorization' => $_COOKIE['token']
        ])->get('https://mockend.com/UWS-Web-Engineering/farmer-app/clients?limit=10');

        $clients = json_decode($response, true);
        $title = 'Clients';

        return view('clients', compact('clients', 'title'));
    }
}
