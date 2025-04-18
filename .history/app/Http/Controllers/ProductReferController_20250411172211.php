<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductReferController extends Controller
{
    public function Refer($id)
    {
        $product = Product::findOrFail($id);

        if (Auth::check())
        {
            ProductView::create([
                'user_id' => Auth
            ])
        }

        return view('product',compact('product'));
    }
}
