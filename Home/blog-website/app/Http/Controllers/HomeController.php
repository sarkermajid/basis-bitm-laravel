<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $blogs, $blog;
    public function index()
    {
        $this->blogs = Blog::all();
        return view('home.index',['blogs'=>$this->blogs]);
    }
    public function details($id)
    {
        $this->blog = Blog::find($id);
        return view('home.details',['blog'=>$this->blog]);
    }
}
