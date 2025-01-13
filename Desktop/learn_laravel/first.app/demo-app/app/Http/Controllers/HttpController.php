<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpController extends Controller
{
  function login(Request $request)
  {

     echo "request methid is". $request->method(); //checking for method
     echo "<br>";
     echo "request path is". $request->path(); //checking for method
     echo "<br>";
     echo "request url is".$request->url();
     echo"<br>";
     echo "name name is".$request->input("name");
     echo "name name is".$request->name;
  print_r($request->input());
  echo "<br>";
  echo $request->ip()."=>this is our ip address";
//   print_r($request->collect());
   if($request->isMethod('post'))
   {
    echo "execute for post request";
   }
   else{
    echo "execute for other method";
   }
   echo "<br>";
   if($request->is('login'))
   {
    echo "execute for login path";
   }
   else{
    echo "execute for other path";
   }
    // return $request->password;
    // return "get http request successfully";
  }
 

}
