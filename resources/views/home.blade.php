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
<form id="search-form">
  <input type="text" name="name" placeholder="Product Name">
  <button type="submit">Search</button>
</form>

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



  <section class="text-gray-600 body-font">
    <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">the Best Products </h2>
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out
          <br class="hidden lg:inline-block">readymade gluten
        </h1>
        <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
        <div class="flex justify-center">
          <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
          <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
        </div>
      </div>
    </div>
  </section>
{{-- <section>
  <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">Gift Ideas  </h2>
    
</section> --}}
  <section class="text-gray-600 body-font">
    <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">Flash Sales </h2>
    <div class="container px-5 py-24 mx-auto">
      <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
          <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
        </svg>
        <p class="leading-relaxed text-lg">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>
        <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
        <p class="text-gray-500">Senior Product Designer</p>
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font">
    <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center "> Experience the Magic of Morocco Through the Skilled Hands of Our Talented Artisans </h2>
    <div class="container mx-auto flex flex-col md:flex-row items-center">
      <!-- Colonne pour l'image -->
      <div class="lg:max-w-lg lg:w-1/2 md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
      </div>
      <!-- Colonne pour le paragraphe -->
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out <br class="hidden lg:inline-block">readymade gluten </h1>
        <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
        <div class="flex justify-center">
          <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
          <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
        </div>
      </div>
    </div>
  </section>
  
  
@endsection