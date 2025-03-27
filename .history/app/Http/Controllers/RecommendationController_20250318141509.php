<?php

namespace App\Http\Controllers;

use App\Models\Bought_Product
use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecommendationController extends Controller
{
    public function getRecommendations(Request $request)
    {

        $allProducts = Recommendation::all();
        $products = $allProducts->toArray();

        $product = [
            "brand" => "3",
            "category" => "3",
            "id" => 0,
            "price" => "25.00",
            "product_id" => 0
        ];

        $response = Http::post('http://127.0.0.1:5000/process', [
            'products' => $products,
            'product' => $product
        ]);

        return response()->json($response->json());
    }
}
