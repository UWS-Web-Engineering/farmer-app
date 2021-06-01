<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Cookies;

class ClientController extends Controller
{
    function getClients(){
        
        $id = $_COOKIE['farmerID'];
        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' + $_COOKIE['token']
        ])->get('https://gateway.include.ninja/api/officer-manager/get_managers_for_farmers', [
            'cropid' => '4',
            'farmerid' => '2',
        ]); 

        $clients = json_decode($response, true);
        $title = 'Clients';

        return view('clients', compact('clients', 'title'));
    }

    function getClient($id){

        // Client Info
        $url = "https://mockend.com/UWS-Web-Engineering/farmer-app/clients/" . $id;
        $response = http::get($url);

        $client = json_decode($response, true);
        $title = $client['name'];

        // Queries
        $url_q = "https://mockend.com/UWS-Web-Engineering/farmer-app/queries?limit=10";
        $response_q = http::get($url_q);

        $queries = json_decode($response_q, true);

        return view('client', compact('client', 'queries', 'title'));
    }
}
