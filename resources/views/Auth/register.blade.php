
@extends('layout.layout')
@section('content')
<section class="text-gray-600 body-font ">
  <!-- source:https://codepen.io/owaiswiz/pen/jOPvEPB -->
<div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
  <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
      <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
          <div>
              <img src="https://storage.googleapis.com/devitary-image-host.appspot.com/15846435184459982716-LogoMakr_7POjrN.png"
                  class="w-32 mx-auto" />
          </div>
          <div class="mt-12 flex flex-col items-center">
              <h1 class="text-2xl xl:text-3xl font-extrabold">
                  Sign up
              </h1>
              <div class="w-full flex-1 mt-8">
            
                  <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mx-auto max-w-xs">
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                      <input
                          class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                          type="text" name='name'placeholder="Your Name..." />
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                      <input
                      class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                      type="email" name='email' placeholder="Your Email" />
                      <input
                          class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                          type="password" name='password' placeholder="Password****" />
                      <button
                          class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                          <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                              <circle cx="8.5" cy="7" r="4" />
                              <path d="M20 8v6M23 11h-6" />
                          </svg>
                          <span class="ml-3">
                              Sign Up
                          </span>
                      </button>
                    </form>
                    
                  </div>
              </div>
          </div>
      </div>
      <div class="flex-1 bg-red-50 text-center hidden lg:flex">
          <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
              style="background-image: url('https://media.istockphoto.com/id/1453614429/fr/photo/une-touriste-chinoise-dorigine-asiatique-regardant-une-%C3%A9charpe-dans-la-rue-du-march%C3%A9-du-souk.jpg?s=612x612&w=0&k=20&c=BJIttatUsOpduD-cY8SzDa0AXz7yKa-QWqlUCJlIUzg=');">
          </div>
      </div>
  </div>
</div>
  
</section>
@endsection

