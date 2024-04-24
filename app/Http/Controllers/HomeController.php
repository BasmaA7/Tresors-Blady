<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Repositories\Products\ProductRepositoryInterface;

class HomeController extends Controller
{
    protected $categoryRepository;
    protected $productRepository; 

    public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->all();
        $products = $this->productRepository->all(); 
        $bestProduct = $this->bestProduct();
        $topProducts = $this->getMostPopularProduct(); 
    
        return view('home', compact('categories', 'products', 'topProducts','bestProduct'));
    }


    public function bestProduct()
{
    $bestProduct = Product::leftJoin('order_product', 'products.id', '=', 'order_product.product_id')
        ->select('products.*', DB::raw('COUNT(order_product.product_id) as nombre_commandes'))
        ->groupBy('products.id')
        ->orderByDesc('nombre_commandes')
        ->limit(1) 
        ->first(); 

    return $bestProduct;
}

    public function getMostPopularProduct()
{
    $topProducts = Product::leftJoin('order_product', 'products.id', '=', 'order_product.product_id')
        ->select('products.*', DB::raw('COUNT(order_product.product_id) as nombre_commandes'))
        ->groupBy('products.id')
        ->orderByDesc('nombre_commandes')
        ->limit(4)
        ->get();

    return $topProducts;
}


}
