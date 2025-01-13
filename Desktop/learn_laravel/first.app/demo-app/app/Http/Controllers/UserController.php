<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     function getUser()
     {

         return  view("user");
     }
     function setuser()
     {
    
     }
      function getusers($name)
      {
        return view("getuser",['name'=>$name]);
      }
       function insidefolderfile()
       {
        return view('admit.login');
       }
};
