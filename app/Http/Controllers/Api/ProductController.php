<?php

namespace App\Http\Api\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    public function index(Request $request) {
       $request->validate([
          'game' => 'required|exists:games,id'
       ]);

        $products = Product::query()
            ->where('game_id', $request->game)
            ->with('game')
            ->paginate(25);

        return ProductResource::collection($products);
    }

    public function get(Product $product) {
        return ProductResource::make($product);
    }
}
