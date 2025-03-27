<?php

namespace App\Http\Controllers;

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
            "brand" => "5",
            "ctegory' => '3',
            'id' => 0,
            'price' => '18.00',
            'product_id' => 0
        ];

        $response = Http::post('http://127.0.0.1:5000/process', [
            'products' => $products,
            'product' => $product
        ]);

        return response()->json($response->json());
    }
}
