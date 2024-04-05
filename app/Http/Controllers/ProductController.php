<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){
    $products = Product::all();
    return view('admin.products.index', compact('products'));
}
public function create()
{
    return view('admin.products.create');
}
  public function store(Request $request){
    $product=Product::create($request->all());
    return redirect()->route('admin.products.index')->with('success', 'Product created successfully');

}
public function edit(Product $product)
{
    return view('products.edit', compact('product'));
}
 public function showDash(){
    return view('dashboard');
 }
}
