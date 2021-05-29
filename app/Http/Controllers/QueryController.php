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
        $title = $query['clientName'];

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
