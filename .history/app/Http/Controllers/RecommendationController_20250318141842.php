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

        $boughtProduct = Bought_Product::take(5)->get()->toArray();

        foreach ($boughtProduct as $product) {
            $response = Http::post('http://127.0.0.1:5000/process',[
                
            ])
        }

        return response()->json($response->json());
    }
}
