<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductViewed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductReferController extends Controller
{
    public function Refer($id)
    {
        $product = Product::findOrFail($id);

        if (Auth::check())
        {
            ProductViewed::create([
                'user_id' => Auth::id(),
                'product_id' => $id,
            ]);
        }

        return view('product',compact('product'));
    }
}
