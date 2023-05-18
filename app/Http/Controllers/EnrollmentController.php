<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
    return view('enrollment.enrollmentlist');
    }

    public function create()
    {
    return view('enrollment.enrollment');
    }
}
