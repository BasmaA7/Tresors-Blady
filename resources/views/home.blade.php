@extends('layout.layout')
@section('content')

  <!--********hero section********* -->

  <section class="bg-white relative dark:bg-gray-900" id="background-slider" style="background: url('http://127.0.0.1:8000/storage/slider_imgs/artisanat.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh; padding-top: 120px; padding-bottom: 120px; position: relative;">
    <div class="bg-black opacity-50 absolute inset-0 z-0"></div> 
    <!-- Overlay element -->
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 relative z-10">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-white">TresorsBlady</h1>
            <p class="max-w-2xl mb-6 font-medium text-gray-200 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Discover the Rich Treasures of Moroccan Artisan Crafts!</p>
        </div>
    </div>
</section>

  <!--******** END hero section********* -->

  <!--Categorie section -->
  <section class="ezy__epcategory3 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white relative overflow-hidden z-10">
    <div class="container px-4 mx-auto ">
      <div class="flex justify-center items-center text-center md:text-start">
        <h2 class="text-2xl leading-none md:text-[40px] font-bold mb-2 ml-3">
          Shop By Category
        </h2>
      </div>
  
      <div class="grid grid-cols-12 gap-6 text-center mt-6 md:mt-12">
        <!-- card start -->
        @foreach ($categories as $category)
        <div class="col-span-12 sm:col-span-6 md:col-span-2 lg:col-span-2 xl:col-span-2">
          <a href="{{ route('categories.show', $category->id) }}">
            <div class="flex flex-col items-center justify-center">
              <div class="w-44 h-44 flex justify-center items-center">
                <img src="{{ 'storage/'.$category->image }}" class="rounded-full max-w-full max-h-full w-auto" alt="..." />
              </div>
              <div class="p-4 md:p-6">
                <h2 class="text-lg font-bold leading-none my-2">
                  {{$category->title}}
                </h2>
              </div>
            </div>
          </a>
        </div>
        @endforeach
        <!-- card end -->
      </div>
    </div>
  </section>
</div>
   



<!-- Ajout du titre -->


<section class="text-gray-600 bg-primary body-font">
  <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">Introducing Our Latest Product</h2>

  <div class="w-full mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    @foreach ($products as $product)
    <div class="p-4">
      <div class="max-w-sm rounded overflow-hidden shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
        <!--  animation de transition et d'un titre au survol -->
        <a class="block relative h-48" href="{{ route('products.show', $product->id) }}">
          <img alt="Product" class="object-cover object-center w-full h-full" src="{{ asset('storage/'. $product->image) }}">
        </a>
        <div class="px-6 py-4">
          <div class="mb-2">
            <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
            <p class="text-gray-900">Price: <strong class="text-orange-500">${{ $product->price }}</strong></p>
            @if ($product->category)
            <h1>Category: {{ $product->category->name }}</h1>
            @endif
          </div>
          @if ($product->quantity == 0)
          <button class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full px-5 py-2.5 text-center text-xs dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Out of stock</button>
          @else
          <form action="{{ route('add.cart', ['id' => $product->id]) }}" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button type="submit" class="px-4 py-2 font-bold text-white bg-primary-100 rounded-full hover:bg-primary-300">Add to Cart</button>
          </form>
          @endif
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>


<section>
  <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">Shop Our Best Sellers Products </h2>
  <div class="w-full mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    @foreach ($topProducts as $product)
      <div class="p-4">
        <div class="max-w-sm rounded overflow-hidden shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
          <!--  animation de transition et d'un titre au survol -->
          <a class="block relative h-48" href="{{ route('products.show', $product->id) }}">
            <img alt="Product" class="object-cover object-center w-full h-full" src="{{ asset('storage/'. $product->image) }}">
          </a>
          <div class="px-6 py-4">
            <div class="mb-2">
              <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
              <p class="text-gray-900">Price: <strong class="text-orange-500">${{ $product->price }}</strong></p>
              @if ($product->category)
                <h1>Category: {{ $product->category->name }}</h1>
              @endif
            </div>
            @if ($product->quantity == 0)
              <button class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full px-5 py-2.5 text-center text-xs dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Out of stock</button>
            @else
              <form action="{{ route('add.cart', ['id' => $product->id]) }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit" class="px-4 py-2 font-bold text-white bg-primary-100 rounded-full hover:bg-primary-300">Add to Cart</button>
              </form>
            @endif
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>



<section>
  <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">the Best Products </h2>
    
</section>
<section>
  <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">Gift Ideas  </h2>
    
</section>
<section>
  <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">Flash Sales </h2>

</section>
<section>
  <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center "> Experience the Magic of Morocco Through the Skilled Hands of Our Talented Artisans
  </h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda. Sint et unde mollitia deleniti voluptate ullam, velit quisquam doloribus facilis, alias sapiente
  , repellendus libero optio. Veniam id magni voluptate.</p>
</section>


@endsection