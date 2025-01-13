<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamedController extends Controller
{
    function show($name)
    {

        return view("named-route.home",["user"=>$name]);
        
        
    }
}
