<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Repositories\Products\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepository;
    protected $categoryRepository; 


    public function __construct(ProductRepositoryInterface $productRepository ,CategoryRepositoryInterface $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository; 
    }

    public function index()
    {
        $categories = $this->categoryRepository->all();
        $products = $this->productRepository->all();
        return view('admin.products.index', compact('products','categories'));
    }

    public function show($id)
    {
        $product = $this->productRepository->find($id);
        return view('admin.products.show', compact('product'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(StoreProduct $request)
    {
        $validatedData = $request->validated();
        
        $product = $this->productRepository->create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function destroy($id)
    {
        $this->productRepository->delete($id);

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}

