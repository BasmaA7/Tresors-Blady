@extends('layout.layout')
@section('content')
    <!--********hero section********* -->

    <section class="bg-white relative dark:bg-gray-900" id="background-slider"
        style="background: url('http://127.0.0.1:8000/storage/slider_imgs/artisanat.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh; padding-top: 120px; padding-bottom: 120px; position: relative;">
        <div class="bg-black opacity-50 absolute inset-0 z-0"></div>
        <!-- Overlay element -->
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 relative z-10">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-white">
                    TresorsBlady</h1>
                <p class="max-w-2xl mb-6 font-medium text-gray-200 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Discover
                    the Rich Treasures of Moroccan Artisan Crafts!</p>
            </div>
        </div>
    </section>

    <!--******** END hero section********* -->
    <!--******** Search********* -->
    <div class="flex justify-center items-center bg-SectionBg">
        <form action="/search" class="max-w-[680px] w-full px-4 pt-20 flex-grow">
            <div class="relative flex-grow">
                <input type="text" name="q"
                    class="w-full border h-12 shadow p-4 rounded-full dark:text-gray-800 dark:border-gray-700 dark:bg-gray-200"
                    placeholder="search">
                <button class="bgButton" type="submit">
                    <svg class="text-teal-400 h-5 w-5 absolute top-3.5 right-3 fill-current dark:text-teal-300"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
                        y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                        </path>
                    </svg>
                </button>
            </div>
        </form>
        <div class="ml-4">
            <div class="hs-dropdown relative inline-flex">
                <button id="hs-dropdown-basic" type="button"
                    class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-bgButton text-gray-900 shadow-sm hover:bg-gray-8000 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 mt-16">
                    Filter
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ffffff"
                            d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z" />
                    </svg>
                    <svg class="hs-dropdown-open:rotate-180 size-4 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 w-56 hidden z-10 mt-2 min-w-60 shadow-md rounded-lg p-2 bg-gray-800 dark:border border-gray-700 divide-gray-700"
                    aria-labelledby="hs-dropdown-basic">
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-300 hover:bg-gray-800 focus:outline-none  hover:text-gray-300 focus:bg-gray-700"
                        href="{{ route('home') }}">
                        All
                    </a>
                    @foreach ($categories as $category)
                        <p>{{ $category->title }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <!--******** end Search********* -->

    {{-- ------------------------------- --}}



    <!--Categorie section -->
    <section
        class="ezy__epcategory3 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white relative overflow-hidden z-10">
        <div class="container mx-auto  ">
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
                                    <img src="{{ 'storage/' . $category->image }}"
                                        class="rounded-full object-cover w-full h-full" alt="..." />
                                </div>
                                <div class="p-4 md:p-6">
                                    <h2 class="text-lg font-bold leading-none my-2">
                                        {{ $category->title }}
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

    <!--Best Products-->
    <section class="bg-SectionBg">
        <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">Shop Our Best Sellers </h2>
        <div class="container mx-auto flex justify-center items-center flex-wrap pt-4 pb-12" id="place_result">
            @foreach ($topProducts as $product)
                <div class="w-[28rem] h-[25rem] p-6 flex flex-col" data-aos="zoom-out">
                    <a class="w-full h-full" href="{{ route('products.show', $product->id) }}">
                        <img class="hover:grow hover:shadow-lg w-full h-[20rem]"
                            src="{{ asset('storage/' . $product->image) }}">
                    </a>
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">{{ $product->name }}</p>
                        <div class="flex">
                            @if ($product->quantity == 0)
                                <button
                                    class="text-white  focus:outline-none focus:ring-4  font-medium rounded-full px-5 py-2.5 text-center text-xs dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Out
                                    of stock</button>
                            @else
                                <form action="{{ route('add.cart', ['id' => $product->id]) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit"
                                        class="px-4 py-2 font-bold text-white bg-primary-100 rounded-full hover:bg-primary-300">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="18px"
                                            height="18px" viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21 5L19 12H7.37671M20 16H8L6 3H3M16 5.5H13.5M13.5 5.5H11M13.5 5.5V8M13.5 5.5V3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </form>
                            @endif
                            <form action="{{ route('favoris.add', ['id' => $product->id]) }}" method="POST">
                                @csrf
                                <button class="text-gray-600" type="submit">
                                    <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                                    </svg>
                                </button>
                            </form>


                        </div>
                    </div>
                    <p class="pt-1 text-gray-900">{{ $product->price }} MAD</p>
                    @if ($product->category)
                        <h1>Category: {{ $product->category->name }}</h1>
                    @endif
                </div>
            @endforeach
        </div>
        </div>
    </section>
    <!-- End Best Products-->



    <!-- Last product -->
    <section class="text-gray-600  body-font pt-20  ">
        <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">Introducing Our Latest Product</h2>

        <div class="w-full mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($products as $product)
                <div class="p-4">
                    <div
                        class="max-w-sm rounded overflow-hidden shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
                        <!--  animation de transition et d'un titre au survol -->
                        <a class="block relative h-48" href="{{ route('products.show', $product->id) }}">
                            <img alt="Product" class="object-cover object-center w-full h-full"
                                src="{{ asset('storage/' . $product->image) }}">
                        </a>
                        <div class="px-6 py-4 bg-gray-50">
                            <div class="mb-2 ">
                                <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
                                <p class="text-gray-900">Price: <strong
                                        class="text-orange-500">{{ $product->price }} MAD</strong></p>
                                @if ($product->category)
                                    <h1>Category: {{ $product->category->name }}</h1>
                                @endif
                            </div>
                          
                            <div class="flex">
                              @if ($product->quantity == 0)
                                  <button
                                      class="text-white  focus:outline-none focus:ring-4  font-medium rounded-full px-5 py-2.5 text-center text-xs dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Out
                                      of stock</button>
                              @else
                                  <form action="{{ route('add.cart', ['id' => $product->id]) }}" method="post">
                                      @csrf
                                      <input type="hidden" name="product_id" value="{{ $product->id }}">
                                      <button type="submit"
                                          class="px-4 py-2 font-bold text-white bg-primary-100 rounded-full hover:bg-primary-300">
                                          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="18px"
                                              height="18px" viewBox="0 0 24 24" fill="none">
                                              <path
                                                  d="M21 5L19 12H7.37671M20 16H8L6 3H3M16 5.5H13.5M13.5 5.5H11M13.5 5.5V8M13.5 5.5V3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                                  stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" />
                                          </svg>
                                      </button>
                                  </form>
                              @endif
                              <form action="{{ route('favoris.add', ['id' => $product->id]) }}" method="POST">
                                  @csrf
                                  <button class="text-gray-600" type="submit">
                                      <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                          <path
                                              d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                                      </svg>
                                  </button>
                              </form>
  
  
                          </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Last product -->



    <!--Best Product-->
    {{-- <section>
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
</section> --}}


    <!--Most Populair Product-->
    <section>
        <div class=" mx-auto p-5 sm:p-10 md:p-16 bg-SectionBg">
            <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">The Most Populair Product </h2>
            <div class="rounded overflow-hidden flex flex-col max-w-xl mx-auto">
                <a href="{{ route('products.show', $bestProduct->id) }}">
                    <img class="w-full" src="{{ asset('storage/' . $bestProduct->image) }}" alt="#">
                </a>
                <div class="relative -mt-16 px-10 pt-5 pb-16 bg-white m-10">
                    <a href="#"
                        class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">{{ $bestProduct->name }}</a>
                    <p class="text-gray-500 text-sm">{{ $bestProduct->description }}</p>
                    @if ($bestProduct->category)
                        <h1>Category : {{ $bestProduct->category->name }}</h1>
                        @endif @if ($bestProduct->quantity == 0)
                            <button
                                class="text-gray-100 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full px-5 py-2.5 text-center text-xs dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Out
                                of stock</button>
                        @else
                            <form action="{{ route('add.cart', ['id' => $bestProduct->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $bestProduct->id }}">
                                <button type="submit"
                                    class="px-4 py-2 font-bold text-white bg-primary-100 rounded-full hover:bg-primary-300">Add
                                    to Cart</button>
                            </form>
                        @endif
                </div>
            </div>
        </div>
    </section>
    <!--Most Populair Product-->


    <!--  15% Discount  Pub -->
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
    <!-- 15% Discount Pub -->





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


    <!-- ******* Description sur site *********-->
    <section class="text-gray-600 body-font py-20 bg-SectionBg">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <!-- Colonne pour l'image -->
            <div class="lg:max-w-lg lg:w-1/2 md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero"
                    src="{{ URL::asset('asset/images/register.jpg') }}">
            </div>
            <!-- Colonne pour le paragraphe -->
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-5xl text-4xl mb-4 font-bold text-gray-900 leading-tight">Experience the Magic
                    of Morocco <br class="hidden lg:inline-block">Through the Skilled Hands of Our Talented Artisans </h1>
                <p class="mb-8 text-lg leading-relaxed text-gray-700">Explore the rich tapestry of Moroccan craftsmanship
                    on our homepage, where tradition meets innovation. Immerse yourself in the vibrant hues of Berber rugs,
                    intricately patterned ceramics, and the delicate filigree of silver jewelry, each piece a testament to
                    centuries of skill and culture. From the bustling souks of Marrakech to the tranquil workshops of Fez,
                    our curated collection celebrates the artistry and heritage of Moroccan artisans, inviting you to bring
                    a touch of North African elegance into your home.</p>
                <div class="flex justify-center">
                    <a href="#"
                        class="inline-block text-white bg-primary-500 border-0 py-3 px-8 focus:outline-none hover:bg-primary-600 rounded-lg text-lg">Shop
                        Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ******* Description sur site *********-->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdownButton = document.getElementById('hs-dropdown-basic');

            var dropdownMenu = document.querySelector('.hs-dropdown-menu');

            dropdownButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });

            document.addEventListener('click', function(event) {
                var isClickInside = dropdownButton.contains(event.target) || dropdownMenu.contains(event
                    .target);
                if (!isClickInside) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>

@endsection
