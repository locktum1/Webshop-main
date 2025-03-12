<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BrowseController extends Controller
{
    public function Browse()
    {
        $products = Product::paginate(9);
        return view('browse',compact('products'));
    }
}
