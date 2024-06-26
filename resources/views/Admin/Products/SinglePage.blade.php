
@extends('layout.layout')
@section('content')

<div class=" px-4 mt-8 sm:px-10">
  <div class="w-full  mx-auto max-w-7xl">
      <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300">{{ $product->title }}</h2>
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
                      <h2 class="text-2xl font-extrabold text-gray-800">{{ $product->name }}</h2>
                      <div class="flex flex-wrap gap-4 mt-4">
                          <p class="text-gray-800 text-xl font-bold">{{ $product->price }} $</p>
                          <p class="text-gray-400 text-xl"><strike>$16</strike> <span class="text-sm ml-1">Tax
                                  included</span></p>
                      </div>
                      <div class="flex space-x-2 mt-4">
                          <svg class="w-5 fill-gray-800" viewBox="0 0 14 13" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                          </svg>
                          <svg class="w-5 fill-gray-800" viewBox="0 0 14 13" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                          </svg>
                          <svg class="w-5 fill-gray-800" viewBox="0 0 14 13" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                          </svg>
                          <svg class="w-5 fill-gray-800" viewBox="0 0 14 13" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                          </svg>
                          <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                          </svg>
                      </div>
                      <div class="mt-8">
                          <h3 class="text-lg font-bold text-gray-800">About the Product</h3>
                          <ul class="space-y-3 list-disc mt-4 pl-4 text-sm text-gray-800">
                              <li>{{ $product->description }}</li>
                          </ul>
                      </div>
                      <div class="mt-8 max-w-md">
                          <h3 class="text-lg font-bold text-gray-800">Reviews(10)</h3>
                          <div class="space-y-3 mt-4">
                              <div class="flex items-center">
                                  <p class="text-sm text-gray-800 font-bold">5.0</p>
                                  <svg class="w-5 fill-gray-800 ml-1" viewBox="0 0 14 13" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                  </svg>
                                  <div class="bg-gray-300 rounded w-full h-2 ml-3">
                                      <div class="w-2/3 h-full rounded bg-gray-800"></div>
                                  </div>
                                  <p class="text-sm text-gray-800 font-bold ml-3">66%</p>
                              </div>
                              <div class="flex items-center">
                                  <p class="text-sm text-gray-800 font-bold">4.0</p>
                                  <svg class="w-5 fill-gray-800 ml-1" viewBox="0 0 14 13" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                  </svg>
                                  <div class="bg-gray-300 rounded w-full h-2 ml-3">
                                      <div class="w-1/3 h-full rounded bg-gray-800"></div>
                                  </div>
                                  <p class="text-sm text-gray-800 font-bold ml-3">33%</p>
                              </div>
                              <div class="flex items-center">
                                  <p class="text-sm text-gray-800 font-bold">3.0</p>
                                  <svg class="w-5 fill-gray-800 ml-1" viewBox="0 0 14 13" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                  </svg>
                                  <div class="bg-gray-300 rounded w-full h-2 ml-3">
                                      <div class="w-1/6 h-full rounded bg-gray-800"></div>
                                  </div>
                                  <p class="text-sm text-gray-800 font-bold ml-3">16%</p>
                              </div>
                              <div class="flex items-center">
                                  <p class="text-sm text-gray-800 font-bold">2.0</p>
                                  <svg class="w-5 fill-gray-800 ml-1" viewBox="0 0 14 13" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                  </svg>
                                  <div class="bg-gray-300 rounded w-full h-2 ml-3">
                                      <div class="w-1/12 h-full rounded bg-gray-800"></div>
                                  </div>
                                  <p class="text-sm text-gray-800 font-bold ml-3">8%</p>
                              </div>
                              <div class="flex items-center">
                                  <p class="text-sm text-gray-800 font-bold">1.0</p>
                                  <svg class="w-5 fill-gray-800 ml-1" viewBox="0 0 14 13" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                  </svg>
                                  <div class="bg-gray-300 rounded w-full h-2 ml-3">
                                      <div class="w-[6%] h-full rounded bg-gray-800"></div>
                                  </div>
                                  <p class="text-sm text-gray-800 font-bold ml-3">6%</p>
                              </div>
                          </div>
                          <div class="flex items-start mt-8">
                              <img src="https://readymadeui.com/team-2.webp"
                                  class="w-12 h-12 rounded-full border-2 border-white" />
                              <div class="ml-3">
                                  <h4 class="text-sm font-bold">John Doe</h4>
                                  <div class="flex space-x-1 mt-1">
                                      <svg class="w-4 fill-gray-800" viewBox="0 0 14 13" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                              d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                      </svg>
                                      <svg class="w-4 fill-gray-800" viewBox="0 0 14 13" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                              d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                      </svg>
                                      <svg class="w-4 fill-gray-800" viewBox="0 0 14 13" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                              d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                      </svg>
                                      <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                              d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                      </svg>
                                      <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                              d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                      </svg>
                                      <p class="text-xs !ml-2 font-semibold">2 mins ago</p>
                                  </div>
                                  <p class="text-xs mt-4">The service was amazing. I never had to wait that long for
                                      my food. The staff was friendly and attentive, and the delivery was impressively
                                      prompt.</p>
                              </div>
                          </div>
                          <button type="button"
                              class="w-full mt-8 px-4 py-2 bg-transparent border-2 border-gray-800 text-gray-800 font-bold rounded">Read
                              all reviews</button>

                          <button type="button"
                              class="w-full mt-8 px-4 py-2 bg-transparent border-2 border-gray-800 text-gray-800 font-bold rounded">Read
                              all reviews</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


@endsection