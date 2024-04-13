<?php

namespace App\Repositories\Categories;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all()
    {
        return Category::all();
    }

    public function find($id)
    {
        return Category::findOrFail($id);
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function delete($id)
    {
        $category = $this->find($id);
        $category->delete();
    }
}
