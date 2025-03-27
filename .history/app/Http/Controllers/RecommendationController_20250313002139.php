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

        foreach($products as $product){
            
        }

        // $products_data = [];
        // foreach($products as $product){
        //     $products_data[$product->name] = [
        //         $product->price,
        //         $product->category,
        //         $product->brand,
        //     ];
        // }

        // $first_product = $products->first()->name;

        // try {
        //     $response = Http::post('http://127.0.0.1:5000', [
        //         'product_name' => $first_product,
        //         'products_data' => $products_data,
        //     ]);

        //     if ($response->successful()) {
        //         return response()->json($response->json());
        //     }

        //     dd($response->json());

        // } catch (\Exception $e) {

        // }
    }
}
