@extends('layout.layout')
@section('content')


<div class="container px-4 mx-auto">
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold leading-none md:text-[40px] py-8">
              Stor Of Product 
            </h2>
        </div>
        
    </div>
    <div class="flex justify-center items-center py-8">

        <div class="relative w-1/2">
            <input type="text" name="q" id="search"
                class="w-full border h-12 shadow p-4 rounded-full dark:text-gray-800 dark:border-gray-700 dark:bg-gray-200"
                placeholder="search" oninput="recherche()"
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
        <div class="ml-4">
            <select id="filter" onchange="recherche()">
                <option value="">ALL</option>
                @foreach ($categories as $category)
                    <option value={{ $category->id }}>{{ $category->title }}</option>
                @endforeach
            </select>
        </div>



   <script>
          
     $(document).ready(function() {
    $('#search').on('input', function() {
        recherche();
    });

    $('#filter').on('change', function() {
        recherche();
    });
});

function recherche() {
    const search = $('#search').val();
    const filter = $('#filter').val();

    $.ajax({
        url: '/filter',
        method: 'GET',
        data: { search: search, category: filter },
        success: function(response) {
            $('#place_result').html(response);
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
}

           
        </script>
    </div>
    <section class="text-gray-600  body-font py-20 bg-SectionBg ">
        <h2 class="text-2xl leading-none md:text-[40px] font-bold mb-2 ml-3 text-center text-TextColor ">All</h2>

        <div class="container mx-auto flex flex-wrap justify-center items-stretch" id="place_result">
            @foreach ($products as $product)
                <div class="max-w-xs w-64 rounded overflow-hidden shadow-lg m-4">
                    <a href="{{ route('products.show', $product->id) }}">
                        <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    </a>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                        <p class="text-gray-700 text-base">
                            <!-- Description if needed -->
                        </p>
                        <div class="flex items-center justify-between mt-4">
                            <p class="text-gray-700 font-bold text-xl">{{ $product->price }} MAD</p>
                            <div class="flex">
                                <a href="" class="px-4">
                                    <!-- Add to cart button -->
                                </a>
                                <a href="{{ route('favoris.add', $product->id) }}" class="text-gray-500 hover:text-black">
                                    <!-- Favorite button -->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        
    </section>
   

@endsection
