



@extends('layout.dashboard')
@section('content')


<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT') 
  <div class="mb-4">
    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Titre:</label>
    <input type="text" name="name" value="{{$product->name}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
  </div>
  <div class="mb-4">
    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description Sur le Produit:</label>
    <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$product->description}}</textarea>
  </div>
  <div class="mb-4">
    <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
    <input type="text" name="price" value="{{$product->price}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
  </div>
  <div class="mb-4">
    <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Quantity Of Product:</label>
    <input type="text" name="quantity" value="{{$product->quantity}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
  </div>
  <div class="mb-4">
    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
    <input type="file" name="image" id="productImage" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
  </div>
  <div class="mb-4">
    <select class="form-control ml-2 outline-none py-1 px-2 text-md border-2 rounded-md w-full" name="category_id">
      <option selected="selected">Select a category</option>
      @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
      @endforeach
    </select>
  </div>
  <div class="flex items-center justify-between">
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter</button>
  </div>
</form>

@endsection