<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    function adduser( Request $req)
    {  

// INPUT VALIDATION SUCH AS ALL FIELD MUST BE FILLOUT NAME SHOULD BE HAVE 2 CHARACTER
       $req->validate([
        "name" => 'required|min:3|max:10',  //EMPTY FIELD NOT SUBMIT IT ALLOW
         "email"=>'required|email',
            'city' => ['required', new \App\Rules\Uppercase], // Custom rule applied
              "skill"=>'required',
                "gender"=>'required'
       ],[
    'name.required' => "Name cannot be empty",
    'name.min' => "Name must have at least 3 characters", // Correct key: name.min
    'name.max' => "name max character limit is 10 " ,  // Correct key: name.max
    "email.email"=>"this email is not valid",
    "city.required"=>"city should be uppercase only",
       ]);
    //    GET all from FROM
            return $req;
    //   echo $req->place;
    //   echo $req->city;


      //--SELECT FOR MULTIPLE OPETION AS SKILL
    //   if (is_array($req->skill)) {
    //     foreach ($req->skill as $skill) {
    //         echo $skill . "<br>";
    //     }
    // } else {
    //     // Handle the case where 'skill' is not an array (for single checkbox selection)
    //     echo $req->skill . "<br>";
    // }
    // GET DIRECTLY BY NAME WAYS
    //    echo $req->name."<br>";
    //      echo $req->email."<br>";
    //      echo  $req->city."<br>";
    //      return"your data successfully stored";
      
   
    }
}
