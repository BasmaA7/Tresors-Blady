






<div>
  <section class="relative mx-auto  bg-customColor">
      <!-- navbar -->
      <nav class="flex justify-between	 text-white">
          <div class="px-5 xl:px-12 py-6 flex w-full items-center">
              <a class="font-serif text-3xl font-bold font-heading" href="{{ route('home') }}">
                  <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                 TresoreBlady
              </a>
              <!-- Nav Links -->
              <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                  <li><a class="hover:text-gray-200" href="{{ route('home') }}">Home</a></li>

                  <!-- Dropdown li -->
                  <li id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="relative group">
                      <a href="#"
                          class="text-white    focus:outline-none  font-heading  text-sm   inline-flex items-center ">
                          Category
                          <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                              fill="none" viewBox="0 0 10 6">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m1 1 4 4 4-4" />
                          </svg>
                      </a>

                      <!-- Dropdown menu -->
                      <div id="dropdown"
                          class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute top-full left-0">
                          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                              aria-labelledby="dropdownDefaultButton">
                              @foreach ($categories as $category)
                              <p>{{ $category->title }}</p>
                          @endforeach
                          </ul>
                      </div>
                  </li>

                  <li><a class="hover:text-gray-200 cursor-pointer" href="{{route('store')}}">Store</a></li>
                  <li><a  href="" class="hover:text-gray-200 cursor-pointer">Favoris</a></li>
                  <li><a href="{{route('ContactUs')}}"   class="hover:text-gray-200 cursor-pointer">Contact Us</a></li>
              </ul>

              <!-- Header Icons -->
              <div class="hidden xl:flex  space-x-5 items-center">
                  <!-- Sign In / Register -->
                  <div style="display: flex;flex-direction:column;align-items:center;">
                      <svg id="dropdownDefaultButton2" data-dropdown-toggle="dropdown"
                          xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200 cursor-pointer"
                          fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <div style="width: 100px;position: absolute" id="dropdown2"
                          class="mt-10 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                              aria-labelledby="dropdownDefaultButton">
                              @guest
                                  <li>
                                      <a href="{{ route('login') }}"
                                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Login</a>
                                  </li>
                                  <li>
                                      <a href="{{ route('register') }}"
                                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                          up </a>
                                  </li>

                              @endguest
                              @auth
                                  <li>
                                      <form action="{{ route('logout') }}" method="post">
                                          @csrf
                                          <button
                                              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout
                                          </button>
                                          </a>
                                      </form>

                                  </li>
                              @endauth
                          </ul>
                      </div>
                  </div>
                  <a class="hover:text-gray-200 cursor-pointer">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                      </svg>
                  </a>
                  <a class="flex items-center hover:text-gray-200 curspor-pointer" href="{{route('Cart.index')}}">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                      <span class="flex absolute -mt-5 ml-4">
                          <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75">
                          </span>
                          <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                          </span>
                      </span>
                  </a>



              </div>
          </div>
          <!-- Responsive navbar -->
          <div class="flex xl:hidden mr-6 items-center">
              <a class="block" id="menu-toggle" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none"
                      viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
              </a>
              <span class="flex absolute -mt-5 ml-4">
                  <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                  </span>
              </span>
          </div>
      </nav>
      <!-- Mobile navigation menu -->
      <div class="hidden xl:hidden" id="mobile-menu">
          <ul class="flex flex-col px-4 mx-auto font-semibold font-heading space-y-4 pb-4">
              <li><a class="text-white" href="{{ route('home') }}">Home</a></li>
              <li><a class="text-white" href="{{ route('home') }}">strore</a></li>
              <li>
                  <a class="flex items-center text-gray-200 curspor-pointer" href="">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                  </a>

              </li>

              @guest
                  <li><a class="text-white" href="{{ route('login') }}">Login</a></li>
                  <li><a class="text-white" href="{{ route('register') }}">signin</a></li>
              @endguest
              @auth
                  <li>
                      <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <button type="submit"
                              class="text-gray-200 ">Logout
                          </button>
                          </a>
                      </form>

                  </li>
              @endauth
          </ul>
      </div>
  </section>
</div>

<script>
  document.getElementById('menu-toggle').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.toggle('hidden');
  });
</script>
<script>
  document.getElementById('dropdownDefaultButton').addEventListener('click', function() {
      var dropdownMenu = document.getElementById('dropdown');
      dropdownMenu.classList.toggle('hidden');
  });
  document.getElementById('dropdownDefaultButton2').addEventListener('click', function() {
  var dropdownMenu = document.getElementById('dropdown2');
  dropdownMenu.classList.toggle('hidden');
});

</script>




{{-- <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
        </li>
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"> Logout</a>
                </div>
            </div>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
        </li>
        <li>
          <a href="{{route('logout')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
        </li>
        <li>
          <a href="{{route('login')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">login</a>
        </li>
      </ul>
    </div>
  </div>
</nav> --}}
