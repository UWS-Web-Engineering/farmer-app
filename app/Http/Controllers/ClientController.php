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
        
        // $response = Http::withHeaders([
        //     'Authorization' => $id 
        // ])->get('https://gateway.include.ninja/api/officer-manager/get_managers_for_farmers', [
        //     'cropid' => '4',
        //     'farmerid' => '2',
        // ]); 

        $response = Http::withHeaders([
            'Authorization' => $_COOKIE['token']
        ])->get('https://mockend.com/UWS-Web-Engineering/farmer-app/clients?limit=10');

        $clients = json_decode($response, true);
        $title = 'Clients';

        return view('clients', compact('clients', 'title'));
    }

    function getClient($officerid){

        $token = 'Bearer '.$_COOKIE['token'];
        $farmerid = $_COOKIE['farmerId'];
        $officerid = 2;

        // Client Info
        // $response = Http::withHeaders([
        //     'Authorization' => $token
        // ])->get('https://gateway.include.ninja/api/officer-manager/get_all_dets', [
        //     'officerid' => $officerid,
        //     'farmerid' => $farmerid
        // ]);

        $response = Http::withHeaders([
            'Authorization' => $_COOKIE['token']
        ])->get('https://mockend.com/UWS-Web-Engineering/farmer-app/clients/1');

        $client = json_decode($response, true);
        $title = 'Client';

        // Queries
        // $response_q = Http::withHeaders([
        //     'Authorization' => $token
        // ])->get('https://gateway.include.ninja/api/officer-manager/get_all_queries_by_officer', [
        //     'officerid' => $officerid,
        //     'farmerid' => $farmerid,
        // ]);

        $response_q = Http::withHeaders([
            'Authorization' => $token
        ])->get('https://mockend.com/UWS-Web-Engineering/farmer-app/queries?limit=10', [
            'officerid' => $officerid,
            'farmerid' => $farmerid
        ]);
        
        // var_dump($clients);
        
        $queries = json_decode($response_q, true);

        return view('client', compact('client', 'queries', 'title', 'officerid'));
    }
}
