<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function api()
    {
        // Sending a GET request to the API
        $response = Http::get("https://api.genderize.io/?name=luc");
        
        // Parsing the JSON response
        $data = $response->json();

        // // Accessing the response data
        // $count = $data['count']; // Corrected variable name
        // $name = $data['name'];
        // $gender = $data['gender']; // Changed 'male' to 'gender' since the API returns a 'gender' field
        // $probability = $data['probability']; // Correctly accessing the probability

        // // Returning the response as JSON
        // return response()->json([
        //     'count' => $count,
        //     'name' => $name,
        //     'gender' => $gender,
        //     'probability' => $probability
        // ]);

        // Parsing the JSON response
        return view('api.api', ['user' =>$data]);
        // $data = $response->json();
        // return $response->body();
        // Extracting specific values
        // $time = $data['time']['updated'];
        // $disclaimer = $data['disclaimer'];
        // $chartName = $data['chartName'];

        // // Accessing Bitcoin rates in different currencies
        // $usdRate = $data['bpi']['USD']['rate'];
        // $gbpRate = $data['bpi']['GBP']['rate'];
        // $eurRate = $data['bpi']['EUR']['rate'];

        // // Returning all the values in JSON format
        // return response()->json([
        //     'time' => $time,
        //     'disclaimer' => $disclaimer,
        //     'chartName' => $chartName,
        //     'USD Rate' => $usdRate,
        //     'GBP Rate' => $gbpRate,
        //     'EUR Rate' => $eurRate,
        // ]);
    }
}


