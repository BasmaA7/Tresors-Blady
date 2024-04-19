
@extends('layout.layout')
@section('content')


<section
  class="ezy__epgrid3 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white relative overflow-hidden z-10"
>
  <div class="container px-4 mx-auto">
    <div class="flex justify-between items-center">
      <div>
        <h2 class="text-2xl font-bold leading-none md:text-[40px]">
          Product Category
        </h2>
      </div>
      <!-- button -->
      <div class="text-center">
        <button
          class="text-white font-bold py-3 px-11 bg-blue-600 hover:bg-opacity-90 rounded"
        >
          See All
        </button>
      </div>
    </div>

    <!-- products -->
    <div class="grid grid-cols-12 gap-6 text-center mt-12">
      <!-- card start -->
      <div
        class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2"
      >
        <div
          class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full"
        >
          <a href="#!">
            <div
              class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600"
            >
              <i class="fas fa-heart"></i>
            </div>
          </a>
          <div class="p-4 lg:p-6">
            <div
              class="min-h-[210px] flex justify-center items-center h-full px-6"
            >
              <a href="#!">
                <img
                  src="https://cdn.easyfrontend.com/pictures/products/sofa5.png"
                  alt="..."
                  class="max-h-[200px] max-w-full w-auto"
                />
              </a>
            </div>
          </div>

          <div class="p-4 lg:p-6 h-full pt-0 text-start">
            <a href="#!">
              <h5 class="text-base leading-5 font-medium">
                Side Chair Back Chair Fabric Upholstered Seat
              </h5>
            </a>
            <h5
              class="text-blue-600 text-base font-medium leading-none my-2"
            >
              $1500.00
            </h5>
            <div class="flex justify-between items-center">
              <h5 class="font-medium">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                4.3
              </h5>
              <a href="#!">
                <h5 class="font-medium hover:text-blue-600">
                  <i class="fas fa-shopping-cart"></i>
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- card end -->

      <!-- card end -->
      <!-- card start -->
      <div
        class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2"
      >
        <div
          class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full"
        >
          <a href="#!">
            <div
              class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600"
            >
              <i class="fas fa-heart"></i>
            </div>
          </a>
          <div class="p-4 lg:p-6">
            <div
              class="min-h-[210px] flex justify-center items-center h-full px-6"
            >
              <a href="#!">
                <img
                  src="https://cdn.easyfrontend.com/pictures/products/lamp2.png"
                  alt="..."
                  class="max-h-[200px] max-w-full w-auto"
                />
              </a>
            </div>
          </div>

          <div class="p-4 lg:p-6 h-full pt-0 text-start">
            <a href="#!">
              <h5 class="text-base leading-5 font-medium">
                Touch Rechargeable Bud Table Lamps LED Creative Mushroom
              </h5>
            </a>
            <h5
              class="text-blue-600 text-base font-medium leading-none my-2"
            >
              $172.00
            </h5>
            <div class="flex justify-between items-center">
              <h5 class="font-medium">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                4.9
              </h5>
              <a href="#!">
                <h5 class="font-medium hover:text-blue-600">
                  <i class="fas fa-shopping-cart"></i>
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- card end -->
      <!-- card start -->
      <div
        class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2"
      >
        <div
          class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full"
        >
          <a href="#!">
            <div
              class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600"
            >
              <i class="fas fa-heart"></i>
            </div>
          </a>
          <div class="p-4 lg:p-6">
            <div
              class="min-h-[210px] flex justify-center items-center h-full px-6"
            >
              <a href="#!">
                <img
                  src="https://cdn.easyfrontend.com/pictures/products/chair3.png"
                  alt="..."
                  class="max-h-[200px] max-w-full w-auto"
                />
              </a>
            </div>
          </div>

          <div class="p-4 lg:p-6 h-full pt-0 text-start">
            <a href="#!">
              <h5 class="text-base leading-5 font-medium">
                Modern Lounge Chair with Ottoman Classic Designer Chair
                Genuine
              </h5>
            </a>
            <h5
              class="text-blue-600 text-base font-medium leading-none my-2"
            >
              $1125.00
            </h5>
            <div class="flex justify-between items-center">
              <h5 class="font-medium">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                4.1
              </h5>
              <a href="#!">
                <h5 class="font-medium hover:text-blue-600">
                  <i class="fas fa-shopping-cart"></i>
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- card end -->
      <!-- card start -->
      <div
        class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2"
      >
        <div
          class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full"
        >
          <a href="#!">
            <div
              class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600"
            >
              <i class="fas fa-heart"></i>
            </div>
          </a>
          <div class="p-4 lg:p-6">
            <div
              class="min-h-[210px] flex justify-center items-center h-full px-6"
            >
              <a href="#!">
                <img
                  src="https://cdn.easyfrontend.com/pictures/products/earings2.png"
                  alt="..."
                  class="max-h-[200px] max-w-full w-auto"
                />
              </a>
            </div>
          </div>

          <div class="p-4 lg:p-6 h-full pt-0 text-start">
            <a href="#!">
              <h5 class="text-base leading-5 font-medium">
                New Classic Copper Alloy Smooth Metal Hoop Earrings
              </h5>
            </a>
            <h5
              class="text-blue-600 text-base font-medium leading-none my-2"
            >
              $15.00
            </h5>
            <div class="flex justify-between items-center">
              <h5 class="font-medium">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                4.9
              </h5>
              <a href="#!">
                <h5 class="font-medium hover:text-blue-600">
                  <i class="fas fa-shopping-cart"></i>
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- card end -->
      <!-- card start -->
      <div
        class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2"
      >
        <div
          class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full"
        >
          <a href="#!">
            <div
              class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600"
            >
              <i class="fas fa-heart"></i>
            </div>
          </a>
          <div class="p-4 lg:p-6">
            <div
              class="min-h-[210px] flex justify-center items-center h-full px-6"
            >
              <a href="#!">
                <img
                  src="https://cdn.easyfrontend.com/pictures/products/pant2.png"
                  alt="..."
                  class="max-h-[200px] max-w-full w-auto"
                />
              </a>
            </div>
          </div>

          <div class="p-4 lg:p-6 h-full pt-0 text-start">
            <a href="#!">
              <h5 class="text-base leading-5 font-medium">
                EACHIN Boys Pants Boys Pants Solid Cargo Pants Teenage Boy
              </h5>
            </a>
            <h5
              class="text-blue-600 text-base font-medium leading-none my-2"
            >
              $152.00
            </h5>
            <div class="flex justify-between items-center">
              <h5 class="font-medium">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                4.3
              </h5>
              <a href="#!">
                <h5 class="font-medium hover:text-blue-600">
                  <i class="fas fa-shopping-cart"></i>
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- card end -->
      <!-- card start -->
      <div
        class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2"
      >
        <div
          class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full"
        >
          <a href="#!">
            <div
              class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600"
            >
              <i class="fas fa-heart"></i>
            </div>
          </a>
          <div class="p-4 lg:p-6">
            <div
              class="min-h-[210px] flex justify-center items-center h-full px-6"
            >
              <a href="#!">
                <img
                  src="https://cdn.easyfrontend.com/pictures/products/perfume3.png"
                  alt="..."
                  class="max-h-[200px] max-w-full w-auto"
                />
              </a>
            </div>
          </div>

          <div class="p-4 lg:p-6 h-full pt-0 text-start">
            <a href="#!">
              <h5 class="text-base leading-5 font-medium">
                Men's Perfumes Sauvage Eau De Parfum Perfumes Long Lasting
              </h5>
            </a>
            <h5
              class="text-blue-600 text-base font-medium leading-none my-2"
            >
              $122.00
            </h5>
            <div class="flex justify-between items-center">
              <h5 class="font-medium">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                4.4
              </h5>
              <a href="#!">
                <h5 class="font-medium hover:text-blue-600">
                  <i class="fas fa-shopping-cart"></i>
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- card end -->
      <!-- card start -->
      <div
        class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2"
      >
        <div
          class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full"
        >
          <a href="#!">
            <div
              class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600"
            >
              <i class="fas fa-heart"></i>
            </div>
          </a>
          <div class="p-4 lg:p-6">
            <div
              class="min-h-[210px] flex justify-center items-center h-full px-6"
            >
              <a href="#!">
                <img
                  src="https://cdn.easyfrontend.com/pictures/products/couch2.png"
                  alt="..."
                  class="max-h-[200px] max-w-full w-auto"
                />
              </a>
            </div>
          </div>

          <div class="p-4 lg:p-6 h-full pt-0 text-start">
            <a href="#!">
              <h5 class="text-base leading-5 font-medium">
                multi-functional leather sofa small living room moder
              </h5>
            </a>
            <h5
              class="text-blue-600 text-base font-medium leading-none my-2"
            >
              $125.00
            </h5>
            <div class="flex justify-between items-center">
              <h5 class="font-medium">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                4.8
              </h5>
              <a href="#!">
                <h5 class="font-medium hover:text-blue-600">
                  <i class="fas fa-shopping-cart"></i>
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- card end -->
      <!-- card start -->
      <div
        class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2"
      >
        <div
          class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full"
        >
          <a href="#!">
            <div
              class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600"
            >
              <i class="fas fa-heart"></i>
            </div>
          </a>
          <div class="p-4 lg:p-6">
            <div
              class="min-h-[210px] flex justify-center items-center h-full px-6"
            >
              <a href="#!">
                <img
                  src="https://cdn.easyfrontend.com/pictures/ecommerce/watch-2.png"
                  alt="..."
                  class="max-h-[200px] max-w-full w-auto"
                />
              </a>
            </div>
          </div>

          <div class="p-4 lg:p-6 h-full pt-0 text-start">
            <a href="#!">
              <h5 class="text-base leading-5 font-medium">
                Smart Watch Ultra 8 NFC Access Control Unlocking
              </h5>
            </a>
            <h5
              class="text-blue-600 text-base font-medium leading-none my-2"
            >
              $15.00
            </h5>
            <div class="flex justify-between items-center">
              <h5 class="font-medium">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                4.7
              </h5>
              <a href="#!">
                <h5 class="font-medium hover:text-blue-600">
                  <i class="fas fa-shopping-cart"></i>
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- card end -->
      <!-- card start -->
      <div
        class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2"
      >
        <div
          class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full"
        >
          <a href="#!">
            <div
              class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600"
            >
              <i class="fas fa-heart"></i>
            </div>
          </a>
          <div class="p-4 lg:p-6">
            <div
              class="min-h-[210px] flex justify-center items-center h-full px-6"
            >
              <a href="#!">
                <img
                  src="https://cdn.easyfrontend.com/pictures/products/sbag2.png"
                  alt="..."
                  class="max-h-[200px] max-w-full w-auto"
                />
              </a>
            </div>
          </div>

          <div class="p-4 lg:p-6 h-full pt-0 text-start">
            <a href="#!">
              <h5 class="text-base leading-5 font-medium">
                Luxury Tassel Small Messenger Bag For Women Lingge
                Embroidery
              </h5>
            </a>
            <h5
              class="text-blue-600 text-base font-medium leading-none my-2"
            >
              $1100.00
            </h5>
            <div class="flex justify-between items-center">
              <h5 class="font-medium">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                4.0
              </h5>
              <a href="#!">
                <h5 class="font-medium hover:text-blue-600">
                  <i class="fas fa-shopping-cart"></i>
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- card end -->
      <!-- card start -->
      <div
        class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2"
      >
        <div
          class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full"
        >
          <a href="#!">
            <div
              class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600"
            >
              <i class="fas fa-heart"></i>
            </div>
          </a>
          <div class="p-4 lg:p-6">
            <div
              class="min-h-[210px] flex justify-center items-center h-full px-6"
            >
              <a href="#!">
                <img
                  src="https://cdn.easyfrontend.com/pictures/products/cap2.png"
                  alt="..."
                  class="max-h-[200px] max-w-full w-auto"
                />
              </a>
            </div>
          </div>

          <div class="p-4 lg:p-6 h-full pt-0 text-start">
            <a href="#!">
              <h5 class="text-base leading-5 font-medium">
                Disney Captain America Children's Hat Baby Baseball
              </h5>
            </a>
            <h5
              class="text-blue-600 text-base font-medium leading-none my-2"
            >
              $152.00
            </h5>
            <div class="flex justify-between items-center">
              <h5 class="font-medium">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                4.1
              </h5>
              <a href="#!">
                <h5 class="font-medium hover:text-blue-600">
                  <i class="fas fa-shopping-cart"></i>
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- card end -->
      <!-- card start -->
      <div
        class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2"
      >
        <div
          class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full"
        >
          <a href="#!">
            <div
              class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600"
            >
              <i class="fas fa-heart"></i>
            </div>
          </a>
          <div class="p-4 lg:p-6">
            <div
              class="min-h-[210px] flex justify-center items-center h-full px-6"
            >
              <a href="#!">
                <img
                  src="https://cdn.easyfrontend.com/pictures/products/glass1.png"
                  alt="..."
                  class="max-h-[200px] max-w-full w-auto"
                />
              </a>
            </div>
          </div>

          <div class="p-4 lg:p-6 h-full pt-0 text-start">
            <a href="#!">
              <h5 class="text-base leading-5 font-medium">
                ZUEE Retro Small Rectangle Sunglasses Women Vintage Brand
              </h5>
            </a>
            <h5
              class="text-blue-600 text-base font-medium leading-none my-2"
            >
              $425.00
            </h5>
            <div class="flex justify-between items-center">
              <h5 class="font-medium">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                4.9
              </h5>
              <a href="#!">
                <h5 class="font-medium hover:text-blue-600">
                  <i class="fas fa-shopping-cart"></i>
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- card end -->
      <!-- card start -->
      <div
        class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2"
      >
        <div
          class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full"
        >
          <a href="#!">
            <div
              class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600"
            >
              <i class="fas fa-heart"></i>
            </div>
          </a>
          <div class="p-4 lg:p-6">
            <div
              class="min-h-[210px] flex justify-center items-center h-full px-6"
            >
              <a href="#!">
                <img
                  src="https://cdn.easyfrontend.com/pictures/products/tshirt3.png"
                  alt="..."
                  class="max-h-[200px] max-w-full w-auto"
                />
              </a>
            </div>
          </div>

          <div class="p-4 lg:p-6 h-full pt-0 text-start">
            <a href="#!">
              <h5 class="text-base leading-5 font-medium">
                Spring Autumn Kids Thin Sweater Boys Girls Clothes Cute
              </h5>
            </a>
            <h5
              class="text-blue-600 text-base font-medium leading-none my-2"
            >
              $157.00
            </h5>
            <div class="flex justify-between items-center">
              <h5 class="font-medium">
                <span class="text-yellow-500 mr-1">
                  <i class="fas fa-star"></i>
                </span>
                4.2
              </h5>
              <a href="#!">
                <h5 class="font-medium hover:text-blue-600">
                  <i class="fas fa-shopping-cart"></i>
                </h5>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- card end -->
    </div>
  </div>
</section>
@endsection