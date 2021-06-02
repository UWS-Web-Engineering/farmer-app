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
        ])->get('https://gateway.include.ninja/api/officer-manager/get_all_queries/1');

        // $response = Http::withHeaders([
        //     'Authorization' => $id 
        // ])->get('https://mockend.com/UWS-Web-Engineering/farmer-app/queries?limit=2', [
        //     'farmerid' => '3'
        // ]);

        $queries = json_decode($response, true);
        $title = 'Queries';

        // var_dump($queries);

        return view('queries', compact('queries', 'title'));
    }

    function getQuery($id){
        $token = 'Bearer '.$_COOKIE['token'];

        // Queries
        $response = Http::withHeaders([
            'Authorization' => $token 
        ])->get('https://gateway.include.ninja/api/officer-manager/get_all_queries/1');

        // foreach 


        // $url = 'https://mockend.com/UWS-Web-Engineering/farmer-app/queries/'.$id;
        // $response = http::get($url);

        $messages = json_decode($response, true);
        // var_dump($queries);

        foreach($messages as $message) {
            if($message['id']==$id){
                $query = $message;
            }
        }
        
        // var_dump($message);

        // $title = $query['clientname'];
        $title = 'Message';

        return view('query', compact('query', 'title'));
    }
}
