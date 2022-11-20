<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandConroller extends Controller
{
    public static function index($id)
    {
        return view('brand');
    }

}
