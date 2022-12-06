<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;

class CourseController extends Controller
{
    public function index()
    {
        return view('teacher.course.index',['categories'=>Category::all()]);
    }

    public function manage()
    {
        return view('teacher.course.manage');
    }
}
