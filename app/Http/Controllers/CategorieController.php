<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategories;
use App\Repositories\Categories\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        
    }

    public function index()
    {
        $categories = $this->categoryRepository->all();
        return view('Admin.Categories.index', compact('categories'));
    }

    public function show($id)
    {
        $category = $this->categoryRepository->find($id);
        return view('Admin.Categories.show', compact('category'));
    }

    public function create()
    {
        return view('Admin.Categories.create');
    }

    public function store(StoreCategories $request)
    {
        $validatedData = $request->validated();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public');
        }

        $categoryData = [
            'title' => $validatedData['title'],
            'image' => $imagePath,
        ];

        $this->categoryRepository->create($categoryData);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function destroy($id)
    {
        $this->categoryRepository->delete($id);

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
