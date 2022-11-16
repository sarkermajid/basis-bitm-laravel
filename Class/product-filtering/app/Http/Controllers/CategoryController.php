<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categories;
    public function getAllCategory()
    {
        $this->categories = Category::getAllCategory();
        return view('master', ['categories'=>$this->categories]);
    }
}
