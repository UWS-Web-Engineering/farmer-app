<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    function testHttpClient(){
        $response = http::get('https://mockend.com/bettybondoc/farmer-app/queries?limit=10');

        $queries = json_decode($response, true);
        $title = 'Queries';

        return view('queries', compact('queries', 'title'));
        // return view('queries',['myList'=>$myEmpList]);
        
    }
}
