<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EdamamAPIcontroller extends Controller
{

    //fetch data from edamam API
    public function fetchAPIdata() {
        // register api keys
        $APP_ID = '3e4d633f';
        $APP_KEY = '1bf98d72ec7cb4cca16d19e774cca9e2';

        //fetch data from the api
        $data = HTTP::get("https://api.edamam.com/search?q=pizza&app_id=${APP_ID}&app_key=${APP_KEY}&from=2&to=10")->json();
         return view('custom_pizzas',['data' => $data['hits'] ]);
    }
