<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashController extends Controller
{
   function adduser(Request $request)
   {
    $request->validate([
        "username"=>"required",
        "email"=>"required",
        "number"=>"required",
    ],[
        "username.required"=>"please enter your name",
    ]);
    $request->session()->flash("message","message send is successfully");
    $request->session()->flash("name","khalid added succesfully");

    return redirect("flash");
   }
}
