<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $products, $product;
    public function index()
    {
        $this->products = Product::all();
        return view('home.index', ['products'=>$this->products]);
    }
}
