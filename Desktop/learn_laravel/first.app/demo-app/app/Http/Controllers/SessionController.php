<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function login(Request $req)
    {
         $req->session()->put('user',$req->input("user"));
         $req->session()->put('allData',$req->input());
        // return $req->input("user");
        // echo session("user");
        return redirect("profile");       
    }
    function logout()
    {
        session()->pull("user");
        return redirect("profile");  
    }
}
