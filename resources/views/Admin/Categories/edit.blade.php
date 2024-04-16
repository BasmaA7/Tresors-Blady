


@extends('layout.dashboard')
@section('content')
<div>
  <x-alert />

</div>
<form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')  
  <div class="mb-4">
    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Titre:</label>
    <input type="text" name="title" value="{{$category->title}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
  </div>
  <div class="mb-4">
    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
    <input type="file" name="image" value="{{$category->image}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
  </div>
  <div class="flex items-center justify-between">
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter</button>
  </div>
</form>
@endsection