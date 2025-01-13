<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ViewController extends Controller
{
    function getcontact()
    {
        return view("contact");
    }

    function userlogin()
    {
        return view("demo");
    }
     function nestedfolder()
     {
        $name="anil";
        $arr=["one","two","three","four","five"];
        return view('nested.nested',['name'=>$name,"arr"=>$arr]);
     }
    // function nestedfolder($name)
    // {
         
    //     // if (View::exists('nested.nested')) {
    //     //     // Passing dynamic data to the view
    //     //     return view('nested.nested', ['user' => $name]);
    //     // } else {
    //     //     return "Record not found";
    //     // }
    // }
}
