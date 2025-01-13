<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DatabaseConnectivity extends Controller
{
function usercontroller()
{ 
    $users = DB::select('select * from userscheck');
  
    return view("databaseshowdata.database",['pass'=>$users]);
}
}


