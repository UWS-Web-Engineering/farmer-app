<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Cookies;

class ClientController extends Controller
{
    function getClients(){
        
        $id = 'Bearer '.$_COOKIE['token'];
        
        $response = Http::withHeaders([
            'Authorization' => $id 
        ])->get('https://gateway.include.ninja/api/officer-manager/get_managers_for_farmers', [
            'cropid' => '4',
            'farmerid' => '2',
        ]); 

        $clients = json_decode($response, true);
        $title = 'Clients';

        return view('clients', compact('clients', 'title'));
    }

    function getClient($id){

        $id = 'Bearer '.$_COOKIE['token'];

        // Client Info
        $response = Http::withHeaders([
            'Authorization' => $id 
        ])->get('https://gateway.include.ninja/api/officer-manager/get_all_dets', [
            'officerid' => '2',
            'farmerid' => '3',
        ]); 

        $client = json_decode($response, true);
        $title = $client['name'];

        // Queries
        $response_q = Http::withHeaders([
            'Authorization' => $id 
        ])->get('https://gateway.include.ninja/api/officer-manager/get_all_queries_by_officer', [
            'officerid' => '2',
            'farmerid' => '3',
        ]);

        $queries = json_decode($response_q, true);

        return view('client', compact('client', 'queries', 'title'));
    }
}
