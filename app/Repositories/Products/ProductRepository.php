<?php 
// app/Repositories/Products/ProductRepository.php

namespace App\Repositories\Products;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        return Product::all();
    }

    public function find($id)
    {
        return Product::findOrFail($id);
    }

    public function create(array $data)
    {
        return Product::create($data);
    }

    public function delete($id)
    {
        $product = $this->find($id);
        $product->delete();
    }
}