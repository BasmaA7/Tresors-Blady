<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategories;
use App\Repositories\Categories\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 


class CategorieController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        
    }

    public function index()
    {
        $categories = $this->categoryRepository->paginate(5); 
        return view('Admin.Categories.index', compact('categories'));
    }

    public function show($id)
    {
        $category = $this->categoryRepository->find($id);
        return view('Admin.Categories.index', compact('category'));
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
    public function edit($id)
    {
      $category = $this->categoryRepository->find($id);
        return view('Admin.Categories.edit', compact('category'));
    }
    
    public function update(StoreCategories $request, $id)
    {
        $validatedData = $request->validated();
    
        $category = $this->categoryRepository->find($id);
    
        $imagePath = $category->image;
    
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image
            Storage::disk('public')->delete($category->image);
    
            // Enregistrer la nouvelle image
            $imagePath = $request->file('image')->store('categories', 'public');
        }
    
        $categoryData = [
            'title' => $validatedData['title'],
            'image' => $imagePath,
        ];
    
        $this->categoryRepository->update($id, $categoryData);
    
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }
    
    public function destroy($id)
    {
        $this->categoryRepository->delete($id);
    
        // Récupérer à nouveau toutes les catégories après la suppression
        $categories = $this->categoryRepository->all();
    
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully')->with('categories', $categories);
    }
    
}
