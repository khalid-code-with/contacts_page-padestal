<?php

namespace App\Http\Controllers;
use  App\Models\Student;
use Illuminate\Http\Request;

class NewStudentController extends Controller
{
     function student()
     {
        $student= new Student;
        $student=Student::all();
        // print_r($student);
        return view("newstudent/new-student",["data"=>$student]);
     }
}
