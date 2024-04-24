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
  <!--******** Search********* -->
  <div class="  flex justify-center items-center">
    <form action="/search" class="max-w-[680px] w-full px-4 pt-20">
        <div class="relative">
            <input type="text" name="q" class="w-full border h-12 shadow p-4 rounded-full dark:text-gray-800 dark:border-gray-700 dark:bg-gray-200" placeholder="search">
            <button class="bgButton"    type="submit">
                <svg class="text-teal-400 h-5 w-5 absolute top-3.5 right-3 fill-current dark:text-teal-300"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    x="0px" y="0px" viewBox="0 0 56.966 56.966"
                    style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                    <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                    </path>
                </svg>
            </button>
        </div>
    </form>
</div>

  <!--******** Search********* -->

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
                            <img src="{{ 'storage/'.$category->image }}" class="rounded-full object-cover w-full h-full" alt="..." />
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


<section class="text-gray-600  body-font">
  <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">Introducing Our Latest Product</h2>

  <div class="w-full mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    @foreach ($products as $product)
    <div class="p-4">
      <div class="max-w-sm rounded overflow-hidden shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
        <!--  animation de transition et d'un titre au survol -->
        <a class="block relative h-48" href="{{ route('products.show', $product->id) }}">
          <img alt="Product" class="object-cover object-center w-full h-full" src="{{ asset('storage/'. $product->image) }}">
        </a>
        <div class="px-6 py-4 bg-primary">
          <div class="mb-2 ">
            <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
            <p class="text-gray-900">Price: <strong class="text-orange-500">${{ $product->price }}</strong></p>
            @if ($product->category)
            <h1>Category: {{ $product->category->name }}</h1>
            @endif
          </div>
          @if ($product->quantity == 0)
          <button class="text-white  focus:outline-none focus:ring-4  font-medium rounded-full px-5 py-2.5 text-center text-xs dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Out of stock</button>
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

<!--Best Product-->
<section>
  <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">Shop Our Best Sellers  </h2>
  <div class="w-full mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    @foreach ($topProducts as $product)
      <div class="p-4">
        <div class="max-w-sm rounded overflow-hidden shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
          <!--  animation de transition et d'un titre au survol -->
          <a class="block relative h-48" href="{{ route('products.show', $product->id) }}">
            <img alt="Product" class="object-cover object-center w-full h-full" src="{{ asset('storage/'. $product->image) }}">
          </a>
          <div class="px-6 py-4 bg-primary">
            <div class="mb-2">
              <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
              <form action="{{ route('favoris.add', ['id' => $product->id]) }}" method="POST">
                @csrf
                <button class="text-gray-600" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>
                </button>
            </form>
            
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
<!--Best Product-->
<section>
  <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
    <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center "> Best Product </h2>
      <div class="rounded overflow-hidden flex flex-col max-w-xl mx-auto">
          <a href="{{ route('products.show', $bestProduct->id) }}">
              <img class="w-full" src="{{ asset('storage/'. $bestProduct->image) }}" alt="#">
          </a>
          <div class="relative -mt-16 px-10 pt-5 pb-16 bg-white m-10">
              <a href="#" class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">{{ $bestProduct->name }}</a>
              <p class="text-gray-500 text-sm">{{ $bestProduct->description }}</p>
              @if ($bestProduct->category)
              <h1>Category : {{ $bestProduct->category->name }}</h1>
         
          @endif                @if ($bestProduct->quantity == 0)
                  <button class="text-gray-100 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full px-5 py-2.5 text-center text-xs dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Out of stock</button>
              @else
                  <form action="{{ route('add.cart', ['id' => $bestProduct->id]) }}" method="post">
                      @csrf
                      <input type="hidden" name="product_id" value="{{ $bestProduct->id }}">
                      <button type="submit" class="px-4 py-2 font-bold text-white bg-primary-100 rounded-full hover:bg-primary-300">Add to Cart</button>
                  </form>
              @endif
          </div>
      </div>
  </div>
</section>


  <!--Discount Pub -->
  <div class="flex justify-center items-center  ">
    <div class="px-4 md:px-8 py-12  rounded-lg shadow-2xl w-full bg-customColor">
      <h1 class="text-lg mb-4 text-center ">
        Hey Amit<span class="mx-2" id="demo"></span><span class="text-xl">😄</span>,
        <br>
        <span class="text-4xl font-preconnect">EXTRA 15% OFF & FREE SHIPPING FOR NEW CLIENTS </span>
        <span class="text-4xl font-semibold text-white">Seat?</span>
      </h1>
  
      <div class="flex flex-col justify-center w-full text-center mt-8 gap-6 sm:flex-row text-lg font-semibold">
        <a href=""
          class="py-4 w-full sm:w-40 border border-blue-700 text-white bg-bgButton rounded-lg hover:shadow-2xl hover:text-blue-700 shadow-lg">
          Yes
        </a>
        
      </div>
    </div>
  </div>
  
  
  
  
  
  <script>
    const time = new Date().getHours();
      let greeting;
      if (time < 10) {
        greeting = "Good morning";
      } else if (time < 20) {
        greeting = "Good day";
      } else {
        greeting = "Good evening";
      }
      document.getElementById("demo").innerHTML = greeting;
  </script>
  <!--Discount Pub -->


     <!-- ******* Description sur site *********-->
<section class="text-gray-600 body-font py-20">
  <div class="container mx-auto flex flex-col md:flex-row items-center">
    <!-- Colonne pour l'image -->
    <div class="lg:max-w-lg lg:w-1/2 md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="hero" src="{{ URL::asset('asset/images/register.jpg') }}">
    </div>
    <!-- Colonne pour le paragraphe -->
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-5xl text-4xl mb-4 font-bold text-gray-900 leading-tight">Experience the Magic of Morocco <br class="hidden lg:inline-block">Through the Skilled Hands of Our Talented Artisans </h1>
      <p class="mb-8 text-lg leading-relaxed text-gray-700">Explore the rich tapestry of Moroccan craftsmanship on our homepage, where tradition meets innovation. Immerse yourself in the vibrant hues of Berber rugs, intricately patterned ceramics, and the delicate filigree of silver jewelry, each piece a testament to centuries of skill and culture. From the bustling souks of Marrakech to the tranquil workshops of Fez, our curated collection celebrates the artistry and heritage of Moroccan artisans, inviting you to bring a touch of North African elegance into your home.</p>
      <div class="flex justify-center">
        <a href="#" class="inline-block text-white bg-primary-500 border-0 py-3 px-8 focus:outline-none hover:bg-primary-600 rounded-lg text-lg">Shop Now</a>
      </div>
    </div>
  </div>
</section>
<!-- ******* Description sur site *********-->


  
@endsection