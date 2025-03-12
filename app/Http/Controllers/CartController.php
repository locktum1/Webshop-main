<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $cart = session()->get('cart',[]);
        $productId = $request->id;

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);
        return response()->json(['message' => 'Added to cart']);
    }
}
