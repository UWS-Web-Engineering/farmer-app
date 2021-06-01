<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    function getQueries(){
        $id = 'Bearer '.$_COOKIE['token'];

        // Queries
        $response = Http::withHeaders([
            'Authorization' => $id 
        ])->get('https://gateway.include.ninja/api/officer-manager/get_all_queries', [
            'farmerid' => '3'
        ]);

        $queries = json_decode($response, true);
        $title = 'Queries';

        return view('queries', compact('queries', 'title'));
    }

    function getQuery($id){
        $id = 'Bearer '.$_COOKIE['token'];

        // Queries
        $response = Http::withHeaders([
            'Authorization' => $id 
        ])->get('https://gateway.include.ninja/api/officer-manager/get_all_queries_by_officer', [
            'officerid' => '2',
            'farmerid' => '3',
        ]);

        $query = json_decode($response, true);
        // $title = $query['clientname'];
        $title = 'Message';

        return view('query', compact('query', 'title'));
    }

    function getRequest($id){
        $url = "https://mockend.com/UWS-Web-Engineering/farmer-app/request/" . $id;
        $response = http::get($url);

        $request = json_decode($response, true);
        $title = $request['clientName'];

        return view('request', compact('request', 'title'));
    }
}
