<?php

namespace App\Http\Controllers;

use App\Models\Bought_Product;
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
        $selectedProductIds = [];
        $results = [];

        foreach ($boughtProducts as $product) {
            $response = Http::post('http://127.0.0.1:5000/process',[
                'products' => $products,
                'product' => $product,
                'selected_product_ids' => $selectedProductIds
            ]);

            $results[] = $response['result']['most_similar_product']['product_id'];
        }

        return response()->json(['results' => $results]);
    }
}
