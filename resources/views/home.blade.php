@extends('layout.layout')
@section('content')
<!-- source: https://codepen.io/mfg888/pen/MWVGddj -->
<section class="px-3 py-5 bg-neutral-100 lg:py-10">
  <div class="grid lg:grid-cols-2 items-center justify-items-center gap-5">
      <div class="order-2 lg:order-1 flex flex-col justify-center items-center">
          <p class="text-4xl font-bold md:text-7xl text-orange-600">25% OFF</p>
          <p class="text-4xl font-bold md:text-7xl">SUMMER SALE</p>
          <p class="mt-2 text-sm md:text-lg">For limited time only!</p>
          <button class="text-lg md:text-2xl bg-black text-white py-2 px-5 mt-10 hover:bg-zinc-800">Shop Now</button>
      </div>
      <div class="order-1 lg:order-2">
          <img class="h-80 w-80 object-cover lg:w-[500px] lg:h-[500px]" src="https://images.unsplash.com/photo-1615397349754-cfa2066a298e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
      </div>
  </div>
</section>


  <!--Categorie section -->
  <section class="text-gray-600 body-font">
    <div class=" mx-auto px-5 py-8 flex flex-wrap -m-4">
        <h1 class="sm:text-3xl text-3xl font-medium title-font text-gray-900 mb-8 w-full">The Category</h1>

        <div class="flex flex-wrap -m-4">
            @foreach ($categories as $category)
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                  <a href="{{ route('categories.show', $category->id) }}" class="block w-full h-full">
                    <div class="relative overflow-hidden rounded-lg">
                            <img alt="gallery" class="w-full h-full object-cover object-center transform scale-100 transition-transform duration-300 hover:scale-110"
                                src="{{ 'storage/'.$category->image }}">
                            <div class="absolute inset-0 p-8 flex flex-col items-center justify-center text-center bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                <strong class="tracking-widest text-sm title-font font-bold text-white mb-1">{{$category->title}}</strong>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
</div>



<section class="text-gray-600 bg-green-50 body-font">
    <div class="px-5 py-24 mx-auto flex flex-wrap -m-4">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-10 text-gray-900 w-full">Large Plants & Trees</h1>

        @foreach ($products as $product)
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
            <a class="block relative h-48 rounded overflow-hidden">
                <img alt="Product" class="object-cover object-center w-full h-full block" src="{{ asset('storage/'. $product->image) }}">
            </a>
            
            <div class="mt-4 flex items-center justify-between">
                <div>
                    <div class="flex flex-row items-center space-between">
                        <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
                        <form action="" method="post">
                        @csrf
                          <button class="text-gray-600" >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </button>
                      </form>
                    </div>
                    
                    <p class="mt-1 text-gray-900">Price : <strong class="text-orange-500">${{ $product->price }}</strong></p>
                    
                    @if ($product->category)
                    <h1>Category : {{ $product->category->name }}</h1>
               
                @endif                    </div>

@if ($product->quantity == 0)
                    <button 
                    class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full px-5 py-2.5 text-center text-xs dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">out of stock</button>
                    @else
                    <form action="{{ route('add.cart', ['id' => $product->id]) }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit"
                            class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add</button>
                    </form>   
                    @endif
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection