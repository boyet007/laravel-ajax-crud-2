<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index() 
    {
        return view('studentform');
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->course = $request->input('course');
        $student->section = $request->input('section');
        
        $student->save();
    }
}
