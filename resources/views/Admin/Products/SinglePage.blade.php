
@extends('layout.layout')
@section('content')

<div class=" px-4 mt-8 sm:px-10">
  <div class="w-full  mx-auto max-w-7xl">
      <h2 class="mb-8 text-4xl text-dark-100 font-bold text-primary-300 bg-red-300">{{ $product->title }}</h2>
      <div class="font-[sans-serif]">
          <div class="p-6 lg:max-w-7xl max-w-2xl max-lg:mx-auto">
              <div class="grid items-start grid-cols-1 lg:grid-cols-5 gap-12">
                  <div class="lg:col-span-3 bg-gray-100 w-full lg:sticky top-0 text-center p-8">
                      <img src="{{ URL::asset("storage/$product->image") }}" alt="Product"
                          class="w-5/6 rounded object-cover" />
                      <hr class="border-white border-2 my-6" />
                      <div class="flex flex-wrap gap-x-12 gap-y-6 justify-center mx-auto">
                          <img src="{{ URL::asset("storage/$product->image") }}" alt="Product1"
                              class="w-24 cursor-pointer" />
                          <img src="{{ URL::asset("storage/$product->image") }}" alt="Product2"
                              class="w-24 cursor-pointer" />
                          <img src="{{ URL::asset("storage/$product->image") }}" alt="Product3"
                              class="w-24 cursor-pointer" />
                          <img src="{{ URL::asset("storage/$product->image") }}" alt="Product4"
                              class="w-24 cursor-pointer" />
                      </div>
                  </div>
                  <div class="lg:col-span-2">
                      <h2 class="text-3xl font-extrabold text-gray-800 ">{{ $product->name }}</h2>
                      <div class="flex flex-wrap gap-4 mt-4">
                          <p class="text-gray-800 text-xl font-bold">{{ $product->price }} MAD</p>
                                 </p>
                          <p class="text-gray-800 text-xl font-bold">  {{ $product->quantity }} Unit</p>
                        
                      </div>
                 
                      <div class="flex space-x-2 mt-4">
                         
                         
                    
                         
                      </div>
                      <div class="mt-8">
                          <h3 class="text-lg font-bold ">About the Product</h3>
                          <ul class="space-y-3 list-disc mt-4 pl-4 text-sm text-gray-800">
                              <li>{{ $product->description }}</li>
                          </ul>
                          <h3 class="text-lg font-bold mt-8">Category</h3>
                            <ul class="space-y-3 list-disc mt-4 pl-4 text-sm text-gray-800">
                                <li>{{ $product->category->title }}</li>
                            </ul>
                        </ul>
                      </div>
                      <div class="mt-8 max-w-md">
                          <h3 class="text-lg font-bold text-gray-800">Reviews(10)</h3>
                          <div class="space-y-3 mt-4">
                              <div class="flex items-center">
                                
                                  

                          </div>
                         
                          <button type="button"
                              class="w-full mt-8 px-4 py-2 bg-transparent border-2 border-gray-800 text-gray-800 font-bold rounded">
                            Add to Cart</button>

                          <button type="button"
                              class="w-full mt-8 px-4 py-2 bg-transparent border-2 border-gray-800 text-gray-800 font-bold rounded">
                              Add to Favoris</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


@endsection