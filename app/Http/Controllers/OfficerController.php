<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Cookies;

class OfficerController extends Controller
{
    function getOfficers(){

        $id = $_COOKIE['farmerID'];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' + $_COOKIE['token']
        ])->get('https://gateway.include.ninja/api/officer-manager/get_officers_under_manager', [
            'managerid' => '4',
            'farmerid' =>  '2',
        ]); 

        $officers = json_decode($response, true);
        $title = 'Officers';

        return view('officers', compact('officers', 'title'));

    }
}
