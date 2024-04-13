<?php

namespace App\Repositories\Products;

interface ProductRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function delete($id);
}
