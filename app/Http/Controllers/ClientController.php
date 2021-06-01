<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Cookies;

class ClientController extends Controller
{
    function getClients($crop_id){
        $id = 'Bearer '.$_COOKIE['token'];
        $farmerId = $_COOKIE['farmerId'];
        
        // $response = Http::withHeaders([
        //     'Authorization' => $id 
        // ])->get('https://gateway.include.ninja/api/officer-manager/get_managers_for_farmers', [
        //     'cropid' => '4',
        //     'farmerid' => '2',
        // ]); 

        $url = 'https://mockend.com/UWS-Web-Engineering/farmer-app/clients?limit=10';

        $response = http::get($url);

        $clients = json_decode($response, true);
        $title = 'Clients';

        // var_dump($clients);

        return view('clients', compact('clients', 'title'));
    }

    function getClient($officerid){

        $token = 'Bearer '.$_COOKIE['token'];
        $farmerid = $_COOKIE['farmerId'];
        // $officerid = 2;

        // Client Info
        // $response = Http::withHeaders([
        //     'Authorization' => $token
        // ])->get('https://gateway.include.ninja/api/officer-manager/get_all_dets', [
        //     'officerid' => $officerid,
        //     'farmerid' => $farmerid
        // ]);
        
        $url = 'https://mockend.com/UWS-Web-Engineering/farmer-app/clients/'.$officerid;

        $response = http::get($url);

        $client = json_decode($response, true);
        $title = 'Client';

        // Queries
        // $response_q = Http::withHeaders([
        //     'Authorization' => $token
        // ])->get('https://gateway.include.ninja/api/officer-manager/get_all_queries_by_officer', [
        //     'officerid' => $officerid,
        //     'farmerid' => $farmerid,
        // ]);

        $url = 'https://mockend.com/UWS-Web-Engineering/farmer-app/queries?limit=10';

        $response_q = http::get($url);
        
        // var_dump($clients);
        
        $queries = json_decode($response_q, true);

        return view('client', compact('client', 'queries', 'title', 'officerid'));
    }
}
