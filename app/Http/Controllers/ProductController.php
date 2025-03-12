<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class ProductController extends Controller
{
    public function Search(Request $request)
    {
        $query = Product::query();

        if ($request->has("search") && $request->search != '') {
            $query->where('name','like','%' . $request->search . '%')
            ->orWhere('description','like','%' . $request->search . '%');
        }

        $products = $query->paginate(9);

        return view('search', compact('products'));
    }
}
