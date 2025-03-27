<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecommendationController extends Controller
{
    public function getRecommendations(Request $request)
    {
        $products = Recommendation::all();

        $products_data = [];
        foreach($products as $product){
            $products_data[$product->name] = [
                $product->price,
                $product->category,
                $product->brand,
            ];
        }

        $first_product = $products->first()->name;

        
    }
}
