<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculater extends Controller
{
  function calculater($name)
  {
    return view('get',['user'=>$name]);
  }
} 


