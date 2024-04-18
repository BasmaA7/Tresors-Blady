@extends('layout.layout')
@section('content')

  <!--********hero section********* -->

<section class="bg-white relative dark:bg-gray-900" id="background-slider"
        style="background: url('http://127.0.0.1:8000/storage/slider_imgs/artisanat.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; padding-top: 120px; padding-bottom: 120px; position: relative;">
        <div class="bg-black opacity-50 absolute inset-0 z-0"></div> 
        <!-- Overlay element -->
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 relative z-10">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-white">
                     TresorsBlady</h1>
                <p class="max-w-2xl mb-6 font-medium text-gray-200 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                  Discover the Rich Treasures of Moroccan Artisan Crafts!</p>
                
            </div>
        </div>
        {{-- <form class="mx-auto absolute top-[95%] left-[50%] translate-x-[-50%] flex">
            <div class="border-4 border-blue-500 rounded-s-lg w-full">
                <div class="relative">
                    <input type="search" id="default-search"
                        class="block w-full p-4 text-sm text-gray-900 focus:ring-0 border-none bg-gray-50"
                        placeholder="Where are you going?" required />
                </div>
            </div>
            <div class="border-4 border-l-0 border-blue-500 hidden md:block w-full">
                <div class="relative">
                    <input id="start" name="start" type="text" onfocus="(this.type='date')"
                        placeholder="Check in" onblur="(this.type='text')"
                        class="block text-center w-full p-4 text-md text-gray-900 focus:ring-0 border-none bg-gray-50" />
                </div>
            </div>
            <div class="border-4 border-l-0 border-blue-500 hidden md:block w-full">
                <div class="relative">
                    <input id="end" name="end" type="text" onfocus="(this.type='date')"
                        placeholder="Check out" onblur="(this.type='text')"
                        class="block text-center w-full p-4 text-md text-gray-900 border-none bg-gray-50 focus:ring-0" />
                </div>
            </div>
            <div class="border-4 border-l-0 border-blue-500 rounded-e-xl">
                <button type="button"
                    class="block w-full p-4 px-10 text-md rounded-e-lg bg-primary-600 text-white">Search</button>
            </div>
        </form> --}}
    </section>

  <!--******** END hero section********* -->

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
   



<!-- Ajout du titre -->

<h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300 text-center ">Introducing Our Latest Product</h2>

<section class="text-gray-600 bg-primary body-font">
  <div class="w-full mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    @foreach ($products as $product)
    <div class="p-4">
      <div class="max-w-sm rounded overflow-hidden shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
        <!--  animation de transition et d'un titre au survol -->
        <a class="block relative h-48" href="{{ route('products.show', $product->id) }}"">
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



<div class="p-4  bg-primary  mt-28 sm:px-10">
  <div class="w-full mx-auto max-w-7xl">
      <div class="grid items-center gap-10 lg:grid-cols-2">
          <div class="">
              <h2 class="mb-6 text-3xl font-extrabold md:text-4xl">Chrih Daba - Explore the Rich Tapestry of Chrih
                  Daba Categories</h2>
              <p>Dive into the diverse world of Chrih Daba categories, the rich tapestry of Moroccan culture. Explore
                  with passion as you navigate through each category, discovering the unique stories and artistry
                  behind our meticulously chosen products. Immerse yourself in the essence of Morocco and elevate your
                  lifestyle with the finest offerings across our thoughtfully crafted sections. Start your journey of
                  exploration and discovery at Chrih Daba today</p>
              <button
                  class='bg-[#333] hover:bg-[#111] text-white flex items-center transition-all font-semibold rounded-md px-5 py-4 mt-8'>Learn
                  more
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2"
                      viewBox="0 0 492.004 492.004">
                      <path
                          d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                          data-original="#000000" />
                  </svg>
              </button>
          </div>
          <div class="grid gap-8 sm:grid-cols-2">

              @foreach ($categories as $category)
                  <div
                      class="text-center bg-white shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] transition-all rounded-xl p-6">
                      <img src="{{ 'storage/'.$category->image }}"
                          class="inline-block w-20 p-3 bg-blue-100 rounded-full fill-blue-600" />

                      <h3 class="mt-6 mb-2 text-base font-extrabold">{{$category->title}}</h3>
                      <a href="javascript:void(0);" class="inline-block font-bold text-blue-600 hover:underline">Learn
                          more</a>
                  </div>
              @endforeach
          </div>

      </div>
  </div>
</div>


<!---product-->
{{-- <div class=" px-4 mt-8 sm:px-10">
  <div class="w-full  mx-auto max-w-7xl">
      <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300">Introducing Our Latest Product</h2>
      <div class="grid grid-cols-1 gap-8 md:grid-cols-3">

          @foreach ($products as $product)
              <div class="p-8 bg-white rounded-lg shadow-lg">
                  <div class="relative overflow-hidden">
                      <img class="object-cover " src="{{ asset('storage/'. $product->image) }}" alt="Product"
                          style="width: 300px; height: 250px;">
                      <div class="absolute inset-0 bg-black opacity-40"></div>
                      <div class="absolute inset-0 flex items-center justify-center">
                          <a href=""
                              class="px-6 py-2 font-bold text-gray-900 bg-white rounded-full hover:bg-gray-300">View
                              Product</a>
                      </div>
                  </div>

                  <h3 class="mt-4 text-xl font-bold text-gray-900">{{ $product->name }}</h3>
                  <p class="mt-2 text-sm text-gray-500 min-w-24 max-h-28 min-h-28">{{ $product->description }}</p>
                  <div class="flex items-center justify-between mt-4">
                      <span class="text-lg font-bold text-gray-900">{{ $product->price }}$</span>
                      @if ($product->category)
                      <h1>Category : {{ $product->category->name }}</h1>
                 
                  @endif                    </div>
                      <form action="" method="POST">
                          @csrf
                          @method('POST')
                          <input type="hidden" name="id" value="{{ $product->id }}">
                          <button type="submit"
                              class="px-4 py-2 font-bold text-white bg-primary-100 rounded-full hover:bg-primary-300">Add
                              to Cart</button>
                      </form>
                  </div>
              </div>
          @endforeach



      </div>
      <a  href=""
          class='bg-primary-300 w-44 hover:bg-primary-400 text-white flex items-center transition-all font-semibold rounded-md px-5 py-4 mt-8'>
          View All
          <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2" viewBox="0 0 492.004 492.004">
              <path
                  d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                  data-original="#000000" />
          </svg>
      </a>
  </div>
</div> --}}


@endsection