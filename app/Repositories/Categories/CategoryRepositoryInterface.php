<?php

namespace App\Repositories\Categories;

interface CategoryRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function delete($id);
}