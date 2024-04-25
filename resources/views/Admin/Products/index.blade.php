@extends('layout.dashboard')
@section('content')
<div class="text-gray-900 bg-gray-200">
  <div class="p-4 flex">
      <h1 class="text-3xl">
          Products
      </h1>
  </div>
  <div class="p-4 flex">
    <button id="openProductPopup" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ouvrir la popup</button>

    <div id="productPopup" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
      <div class="bg-white p-8 rounded shadow-lg">
        <button id="closeProductPopup" class="absolute top-0 right-0 p-4">&times;</button>
        <div>
          <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
              <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Titre:</label>
              <input type="text" name="name"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
              <label for="Description" class="block text-gray-700 text-sm font-bold mb-2">Description Sur le Produit:</label>
              <textarea type="text" name="description"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="mb-4">
              <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
              <input type="text" name="price"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
              <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Quantity Of Product:</label>
              <input type="text" name="quantity" id="quantity" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
              <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
              <input type="file" name="image"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
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
        </div>
      </div>
    </div>
  </div>

  <div class="px-3 py-4 flex justify-center">
    <table class="w-full text-md bg-white shadow-md rounded mb-4">
      <tbody>
        <tr class="border-b">
          <th class="text-left p-3 px-5">ID</th>
          <th class="text-left p-3 px-5">Name</th>
          <th class="text-left p-3 px-5">Description</th>
          <th class="text-left p-3 px-5">Price</th>
          <th class="text-left p-3 px-5">Quantity</th>
          <th class="text-left p-3 px-5">Category</th>
          <th class="text-left p-3 px-5">Image</th>
          <th class="text-left p-3 px-5">Action</th>
          <th></th>
        </tr>
        @foreach ($products as $product)
        <tr class="border-b hover:bg-orange-100 bg-gray-100">
          <td class="p-3 px-5">{{$product->id}}</td>
          <td class="p-3 px-5">{{$product->name}}</td>
          <td class="p-3 px-5">{{$product->description}}</td>
          <td class="p-3 px-5">{{$product->price}}</td>
          <td class="p-3 px-5">{{$product->quantity}}</td>
          <td class="p-3 px-5">{{$product->category->title}}</td>
          <td class="p-3 px-5">
            @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="Image for product" class="w-20 h-20">
            @else
            No Image
            @endif
          </td>
          <td class="p-3 px-5 flex ">
            <a   class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline"    href="{{ route('products.edit', $product->id) }}"> Edit</a>
            <form action="{{route('products.destroy',$product)}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  {{ $products->links() }}

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('openProductPopup').addEventListener('click', function () {
    document.getElementById('productPopup').classList.remove('hidden');
  });

  window.addEventListener('click', function(event) {
    var editModal = document.getElementById('productPopup');
    if (event.target == productPopup) {
      editModal.classList.add('hidden');
    }
  });
});
</script>

@endsection
