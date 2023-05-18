<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
    return view('student.studentlist');
    }

    public function create()
    {
    return view('student.studentcreate');
    }
}
