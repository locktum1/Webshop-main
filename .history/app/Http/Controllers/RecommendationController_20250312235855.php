<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecommendationController extends Controller
{
    public function getRecommendations(Request $request)
    {
        $products = Product::all();

        $products_data = [];
        foreach($products as $product){
            $products_data[$product->name] = [
                $product->
            ]
        }
    }
}
