<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategories;
use App\Models\Category;
use Illuminate\Http\Request;

class CategorieController extends Controller

{


  public function index()
  {
      $categories = Category::all();
      return view('Admin.Categories.index', compact('categories'));
  }

  public function show($id)
  {
      $category = Category::findOrFail($id);
      return view('categories.show', compact('category'));
  }

public function create()
{
    return view('Admin.Categories.create');
}
public function store(StoreCategories $request){
  if ($request->hasFile('image')) {
    $imagePath = $request->file('image')->store('events', 'public');
} else {
    $imagePath = null;
}
   $categorie=Category::create([
    'title'->$request->input('title'),
    'image'->$imagePath,
   ]);
   return redirect()->route('Admin.Categories.index')->with('success', 'Category created successfully.');

   

}
}
