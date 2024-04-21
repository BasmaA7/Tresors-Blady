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
        $topProducts = $this->getMostPopularProducts(); // Utiliser la méthode pour obtenir les cinq produits les plus populaires
    
        return view('home', compact('categories', 'products', 'topProducts'));
    }

    // public function getMostPopularProduct()
    // {
    //     $topProduct = Product::leftJoin('order_product', 'products.id', '=', 'order_product.product_id')
    //         ->select('products.*', DB::raw('COUNT(order_product.product_id) as nombre_commandes'))
    //         ->groupBy('products.id')
    //         ->orderByDesc('nombre_commandes')
    //         ->first();

    //     return $topProduct;
    // }


    public function getMostPopularProducts()
    {
        $topProducts = Product::leftJoin('order_product', 'products.id', '=', 'order_product.product_id')
            ->select('products.*', DB::raw('COUNT(order_product.product_id) as nombre_commandes'))
            ->groupBy('products.id')
            ->orderByDesc('nombre_commandes')
            ->take(5) // Limiter à 5 produits
            ->get(); // Utiliser get() pour obtenir une collection de produits
    
        return $topProducts;
    }
}
