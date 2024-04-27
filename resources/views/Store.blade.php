@extends('layout.layout')
@section('content')


<div class="container px-4 mx-auto">
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold leading-none md:text-[40px]">
                Product Category
            </h2>
        </div>
        <!-- button -->
        <div class="text-center">
            <button class="text-white font-bold py-3 px-11 bg-blue-600 hover:bg-opacity-90 rounded">
                See All
            </button>
        </div>
    </div>
    <div class="flex justify-center items-center bg-SectionBg">

        <div class="relative flex-grow">
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
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12" id="place_result">
        @foreach ($products as $product)
            <div class="w-[28rem] h-[25rem] p-6 flex flex-col">
                <a class="block relative h-48" href="{{ route('products.show', $product->id) }}">
                    <img alt="Product" class="object-cover object-center w-full h-full"
                        src="{{ asset('storage/' . $product->image) }}">
                </a>
                <div class="pt-3 flex items-center justify-between">
                    <p class="">{{ $product->name }}</p>
                    <div class="flex">
                        <a href="" class="px-4">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M21 5L19 12H7.37671M20 16H8L6 3H3M16 5.5H13.5M13.5 5.5H11M13.5 5.5V8M13.5 5.5V3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a href="{{ route('favoris.add', $product->id) }}">
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </a>


                    </div>
                </div>
                <p class="pt-1 text-gray-900">{{ $product->price }} MAD</p>
            </div>
        @endforeach
    </div>
@endsection
