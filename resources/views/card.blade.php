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