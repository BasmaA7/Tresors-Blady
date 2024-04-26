@extends('layout.layout')
@section('content')

<section class="ezy__epgrid3 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white relative overflow-hidden z-10">
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

        <!-- products -->
        <div class="grid grid-cols-12 gap-6 text-center mt-12">
            @foreach($products as $product)
            <!-- card start -->
            <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-2 my-2">
                <div class="bg-white dark:bg-slate-800 border dark:border-none rounded-md relative p-2 h-full">
                    <a href="#!">
                        <div class="absolute top-4 right-4 z-20 text-base p-4 rounded-full bg-slate-100 dark:bg-slate-900 flex justify-center items-center hover:text-blue-600">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                    <div class="p-4 lg:p-6">
                        <div class="min-h-[210px] flex justify-center items-center h-full px-6">
                            <a href="#!">
                                <img src="{{ asset('storage/'. $product->image) }}" alt="..." class="max-h-[200px] max-w-full w-auto" />
                            </a>
                        </div>
                    </div>

                    <div class="p-4 lg:p-6 h-full pt-0 text-start">
                        <a href="#!">
                            <h5 class="text-base leading-5 font-medium">
                                {{ $product->name }}
                            </h5>
                        </a>
                        <h5 class="text-blue-600 text-base font-medium leading-none my-2">
                            ${{ $product->price }}
                        </h5>
                        <div class="flex justify-between items-center">
                            <h5 class="font-medium">
                                <span class="text-yellow-500 mr-1">
                                    <i class="fas fa-star"></i>
                                </span>
                                {{ $product->rating }}
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
            @endforeach
        </div>
    </div>
</section>

@endsection
