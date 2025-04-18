<?php

namespace App\Http\Controllers;

use App\Models\Bought_Product;
use App\Models\Product;
use App\Models\ProductViewed;
use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class RecommendationController extends Controller
{
    public function getRecommendations(Request $request)
    {
        if (!Auth::check())
        {
            $message = 'You need to be signed in to use recommendations!';
            return view('recommendations', compact('message'));
        }

        $products = Recommendation::all()->toArray();
        $boughtProducts = Bought_Product::where('user_id', Auth::id())->get()->toArray();

        if (count($boughtProducts) < 4)
        {
            $productVectors = [];

            $viewedProducts = ProductViewed::where('user_id', Auth::id())->get()->toArray();

            foreach ($viewedProducts as $viewedProduct)
            {
                $productVectors[] = Recommendation::where('product_id', $viewedProduct->product_id);
            }

            $response = Http::post('http://127.0.0.1:5000/process', [
                'products' => $products,
                'boughtProducts' => $productVectors,
            ]);

            $results = collect($response['result']);
            $products = [];

            foreach ($results as $result) {
                $product = Product::find($result['most_similar_product']['product_id']);

                if ($product) {
                    $products[] = $product;
                }
            }

            return view('recommendations', compact('products'));
        }

        $boughtProductIds = collect($boughtProducts)->pluck('product_id')->toArray();

        for ($i = count($products) - 1; $i >= 0; $i--)
        {
            if (in_array($products[$i]['product_id'],$boughtProductIds))
            {
                array_splice($products,$i,1);
            }
        };

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
