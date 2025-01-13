<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    // GET method to fetch data or return a view
    function get(Request $req)
    {
        return view("admit.routeaccess.route");
    }

    // POST method to handle form submission
    function post()
    {
        return "post route method";
    }

    // PUT method to handle updates
    public function put(Request $request)
    {
        return "put route method"; 
        // Optionally you can return JSON data if required
        // return response()->json([
        //     'message' => 'Put route method',
        //     'data' => $request->all(),
        // ]);
    }

    // DELETE or PATCH method for partial updates
    public function delete(Request $request)
    {
        return "delete route method";
    }

    // Any method to catch other request types
    public function any()
    {
        return "this is our any function";
    }

    // Method for matching the PUT request (used in '/match')
    public function group1()
    {
        return "this is our group 1 method call successfully";
    }

    // You can add more methods as needed
    public function group2()
    {
        return "this is our group 2 method call successfully";
    }
}

