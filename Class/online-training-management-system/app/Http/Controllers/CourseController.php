<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('teacher.course.index');
    }

    public function manage()
    {
        return view('teacher.course.manage');
    }
}
