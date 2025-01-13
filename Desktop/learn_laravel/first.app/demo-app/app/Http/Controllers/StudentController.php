<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show()
    {
        return "list of students";
    }

    public function adds()
    {
        return "student added";
    }

    public function delete()
    {
        return "list of deleted students";
    }

    function about($name)
    {
        return $name;
    }
}