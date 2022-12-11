<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index',[
            'recent_courses' => Course::where('status',1)->orderBy('id','desc')->take(8)->get(),
        ]);
    }

    public function about()
    {
        return view('website.about.index');
    }

    public function categoryTraining()
    {
        return view('website.category.index');
    }

    public function allTraining()
    {
        return view('website.training.index',['courses'=>Course::where('status',1)->orderBy('id','desc')->get()]);
    }

    public function trainingDetail()
    {
        return view('website.training.detail');
    }

    public function contact()
    {
        return view('website.contact.index');
    }

    public function loginRegistration()
    {
        return view('website.auth.index');
    }
}
