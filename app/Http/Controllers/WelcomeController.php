<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WelcomeController extends Controller
{
    public function Welcome()
    {
        $products = Product::all();
        return view('welcome',compact('products'));
    }
}
