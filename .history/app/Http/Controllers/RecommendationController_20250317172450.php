<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RecommendationController extends Controller
{
    public function getRecommendations(Request $request)
    {

        $allProducts = Recommendation::all();
        $products = ['data'=>$allProducts->toArray()];

        Log::info('Sending JSON to Python:', $data);

        $response = Http::post('http://127.0.0.1:5000/process', [
            $products
        ]);

        return response()->json($response->json());
    }
}
