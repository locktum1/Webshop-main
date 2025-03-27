<?php

namespace App\Http\Controllers;

use App\Models\Bought_Product;
use App\Models\Product;
use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecommendationController extends Controller
{
    public function getRecommendations(Request $request)
    {

        $allProducts = Recommendation::all();
        $products = $allProducts->toArray();
        $boughtProducts = Bought_Product::take(5)->get()->toArray();

        $response = Http::post('http://127.0.0.1:5000/process',[
            'products' => $products,
            'boughtProducts' => $boughtProducts,
        ]);

        $results = collect($response['result']);

        foreach ($results as $result)
        {
            $product = Product::find($result['most_similar_product']['product_id']);

            if ($product)
            {
                
            }
        }

        return view('recommendations',compact('results'));
    }
}
