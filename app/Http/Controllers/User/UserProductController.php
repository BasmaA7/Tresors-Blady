<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Repositories\Products\ProductRepositoryInterface; 



class UserProductController extends Controller
{


    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function store()
    {
        $categories = Category::all();
        $products = $this->productRepository->paginate(6); 

        return view('search', compact('categories', 'products'));
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
