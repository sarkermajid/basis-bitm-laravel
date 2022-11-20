<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public $products;
    public function index()
    {
        $this->products = Product::getAllProduct();
        return view('home', ['products' => $this->products]);
    }
}
