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

        $products = Recommendation::all()->toArray();
        $boughtProducts = Bought_Product::all()->toArray();

        foreach ($boughtProducts as $boughtProduct)
        {
            $productID = $boughtProduct['product_id'];
            foreach ($products as $product)
            {
                $boughtProductID = $product['product_id'];
            }
        }

        $response = Http::post('http://127.0.0.1:5000/process',[
            'products' => $products,
            'boughtProducts' => $boughtProducts,
        ]);

        $results = collect($response['result']);
        $products = [];

        foreach ($results as $result)
        {
            $product = Product::find($result['most_similar_product']['product_id']);

            if ($product)
            {
                $products[] = $product;
            }
        }

        return view('recommendations',compact('products'));
    }
}
