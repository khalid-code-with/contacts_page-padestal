<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Validiationflashmessage extends Controller
{
  function validaton( Request $req)
  {   
    $req->session()->flash("message","data submit is successfully");
    return redirect("user");
  }
}
