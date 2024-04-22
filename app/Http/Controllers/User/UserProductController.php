<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function store(){
        $categories = Category::all();
        $products = Product::all();

        return view('store', compact('categories', 'products'));
    }
    public function search(Request $request)
{
    $name = $request->input('name');
    $category = $request->input('category');

    $products = Product::where('name', 'like', '%' . $name . '%')
                        ->where('category', 'like', '%' . $category . '%')
                        ->get();

    return response()->json($products);
}
}
