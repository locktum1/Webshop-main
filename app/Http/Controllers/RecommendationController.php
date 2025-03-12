<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecommendationController extends Controller
{
    public function getRecommendations(Request $request)
    {
        $products = $request->input('products');

        $response = Http::post('http://127.0.0.1:5000/recommend', [
            'products' => (array) $products
        ]);

        dd($response->json());
    }
}
