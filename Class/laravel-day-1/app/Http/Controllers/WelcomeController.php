<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public $message , $blogs , $blog, $fullname, $addition,  $result;

    public function index()
    {
        $this->blogs = Blog::getAllBlog();
        return view('home', ['blogs' => $this->blogs]);
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function detail($id)
    {
        $this->blog = Blog::getBlogById($id);
        return view('detail',['blog'=> $this->blog]);
    }

    public function fullName(Request $request)
    {
        $this->fullName = $request->first_name.' '.$request->last_name;
        return redirect('/about')->with('message', $this->fullName);

    }

    public function calculator(Request $request)
    {

        switch ($request->choice)
        {
            case '+';
                $this->result =  $request->first_number + $request->second_number;
            break;
            case '-';
                $this->result = $request->first_number - $request->second_number;
            break;
            case '*';
                $this->result = $request->first_number * $request->second_number;
            break;
            case '/';
                $this->result = $request->first_number / $request->second_number;
            break;
            case '%';
                $this->result = $request->first_number % $request->second_number;
            break;
            default:
                $this->result = 'please select your action';
        }

        return redirect('/service')->with('message',$this->result);

    }


}
