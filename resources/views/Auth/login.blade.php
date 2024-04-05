@extends('layout.layout')
@section('content')


 


<div class="bg-cover bg-center bg-fixed" style="background-image: url('https://chantiersdumaroc.ma/wp-content/uploads/2019/05/me%CC%81tiers-de-l%E2%80%99artisanat-au-Maroc.jpg')">
  <div class="h-screen flex justify-center items-center">
      <div class="bg-white mx-4 p-8 rounded shadow-md w-full md:w-1/2 lg:w-1/3">
          <h1 class="text-3xl font-bold mb-8 text-center">Login</h1>
          <form class="space-y-6" action="{{route('login')}}" method="POST">
            @csrf
            <div class="mb-4">
                  <label class="block font-semibold text-gray-700 mb-2" for="email">
                      Email Address
                  </label>
                  <input
                      class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      name="email" type="email" placeholder="Enter your email address" />
              </div>
              <div class="mb-4">
                  <label class="block font-semibold text-gray-700 mb-2" for="password">
                      Password
                  </label>
                  <input
                      class="border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                       name="password" type="password" placeholder="Enter your password" />
                  <a class="text-gray-600 hover:text-gray-800" href="forgot-password">Forgot your password?</a>
              </div>
              <div class="mb-6">
                <div>
                  <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
              </div>
          </form>
      </div>
  </div>
</div>
@endsection