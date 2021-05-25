<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    function getQueries(){
        $response = http::get('https://mockend.com/UWS-Web-Engineering/farmer-app/queries?limit=10');

        $queries = json_decode($response, true);
        $title = 'Queries';

        return view('queries', compact('queries', 'title'));
    }

    function getQuery($id){
        $url = "https://mockend.com/UWS-Web-Engineering/farmer-app/queries/" . $id;
        $response = http::get($url);

        $query = json_decode($response, true);
        $title = $query['sender'];

        return view('query', compact('query', 'title'));
    }

    function sendResponse(Request $request){
        echo 'Response';
    }
}
