<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Landing extends Controller
{
    //
    public function index()
    {
        $product = Product::all();
        return view('landing')->with('product', $product);
    }
}
