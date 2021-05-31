<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function renderLogin(){
        // Check if user is logged in
        // if(isset($_COOKIE["farmerID"]) && isset($_COOKIE["token"])) {
            // return redirect('/crops');
        // }

        return view('users/login');
    }

    function renderRegister(){
        // Check if user is logged in
        // if(isset($_COOKIE["farmerID"]) && isset($_COOKIE["token"])) {
            // return redirect('/crops');
        // }

        return view('users/register');
    }

    function renderDetails(){
        return view('users/details');
    }

    function renderSettings(){
        // Check if user is not logged in
        // if(!isset($_COOKIE["farmerID"]) || !isset($_COOKIE["token"])) {
            // return redirect('/');
       // }

        return view('users/settings');
    }
}
