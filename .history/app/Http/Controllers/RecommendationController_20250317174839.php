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
            'brand' => '5',
            'category' => '3',
            'id' = 0,
            'price' =
        ]

        $response = Http::post('http://127.0.0.1:5000/process', [
            'products' => $products,
        ]);

        return response()->json($response->json());
    }
}
