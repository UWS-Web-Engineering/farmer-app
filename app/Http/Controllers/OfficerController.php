<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Cookies;

class OfficerController extends Controller
{
    function getOfficers(){
        $id = 'Bearer '.$_COOKIE['token'];
        $farmerId = $_COOKIE['farmerId'];

        // $response = Http::withHeaders([
        //     'Authorization' =>  $id 
        // ])->get('https://gateway.include.ninja/api/officer-manager/get_officers_under_manager', [
        //     'managerid' => '2',
        //     'farmerid' => $farmerId,
        // ]);

        $response = Http::withHeaders([
            'Authorization' => $_COOKIE['token']
        ])->get('https://mockend.com/UWS-Web-Engineering/farmer-app/clients?limit=10');

        $officers = json_decode($response, true);
        // $rawTitle = json_encode($officers[0]['companyname']);
        // $title =  $rawTitle;
        $title = "Officers";

        // var_dump($officers);

        return view('officers', compact('officers', 'title'));
    }
}
