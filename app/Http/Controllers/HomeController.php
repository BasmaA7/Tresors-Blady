<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Repositories\Products\ProductRepositoryInterface;


class HomeController extends Controller
{
    protected $categoryRepository;
    protected $productRepository; 


    public function __construct(ProductRepositoryInterface $productRepository,CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;

    }

    public function index()
    {
        $categories = $this->categoryRepository->all();
        $products = $this->productRepository->all(); 
        return view('home', compact('categories','products'));
    }
}
