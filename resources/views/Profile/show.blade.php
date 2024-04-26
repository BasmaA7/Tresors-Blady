@extends('layout.layout')
@section('content')

    <section class="container mx-auto p-4 md:p-8 lg:pt-12 grid grid-rows-2">
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-green-900">User Profile</h1>
        <div class="flex flex-col md:flex-row items-center justify-around">
            <div class="flex pt-4 md:pt-0 md:pl-4">
                <div>
                    <div class="mb-4 md:mb-0"><img class="w-12 md:w-16 lg:w-20" 
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALEAAACUCAMAAADrljhyAAAAM1BMVEX////a2tqysrLd3d2vr6/29vbX19e1tbXh4eH5+fnT09PAwMDPz8/o6Ojr6+v8/PzJycnj+kkyAAAEJ0lEQVR4nO2b23KjMAxACzLmYmP4/69dG5I2ASwZEtnsjM5Tp22GE42QfP35EQRBEARBEARBEARBEATh/vSNc+OCc67pS+sQNGNXbelcU1rrmKlxndY734DW3noqLbihcWN1rPuQvlmo+xEQ2ycw3iXOfYdF943xDi9i75J9Q0a74s4OTggHZ3BFfafxlO5KyXRuLvgGilWNKwFeKZMZ03gug1/RJTKj3/fjM3TZa0Z/skbsogyZlU90jZhy3ih/LpxZefqCcFDO9/p9UCXelMdcwmdGErhyprp8tdMdkaX7TZ8V4neypLL7onCWfv3NnAjw50XK/OgMwC38tTrxhLteTElTUNA2MPifEv6b9+WjXzsAa0y7YoxNcGYNckJlm+t3LPkJ1gpHZTHYVm2MVUs5c2YyGWJTb4W9cm3KBbknQmz2voszoaz5hp3omA1iwrQy3xgOfSxEhYMyXjK4hNEGDTYu7JUtpqy5WjW6PqFbRLiuW/QV4EoLrFJgOUHnRccj3GPPHPAQ+yAP2PflqRZoGs94iH2QZ+wL8yQyOqagQux7H/ZxnraHVWNNhdgrYx9nefWwFo2XtocxNr5gadTY0iBVKRZjrFqwrA81yAM/NgaOVw83JoXrOr9x/HmfG7OUN9yYzoqbGZMNpEQLQY2TqtudjD/tIAWM4/OPX2F8HpLdmE5kNec3xtIQPhtt8tRjfAMPtisrW/CkYOnS6GIFVEDMmlBhpiULfL8GhuszU66JHrFKiL58aPeouEb05Lrm5RUWLmO0WKxRjghTEeYpFT/47P+hvFvaDBM8Uphr9k8b+9dvlxnKDPSiN5dxwr4YVLpVf9JKtbpK2FlgW0GmH71Iz7+7CnPSTkiluYQT0mJ19pEehkGn6VZ8SeGrxbe3xlbYljYT98bOw7k/9vX9xwDrHiTZRK7A1T5Wrh/Ki8N7kiV55x+qlDq8/Cfz7j9xRAgA9GDtvGLtoIEoceyHhSbE2LvZ0D1Cr1upQxexaLQ1+ymWaLkAP6gIsttxhZ9/+KFFTDrD4abYkWM9KxUdHys1R75ojoNCRxUuhJfYa6rnozEc92u3cpAXR+Pig3Gy3jlnOvC2GRDRaxVP2m2Y+YZA72yGF3M0f3dh3iwMMR+4eeEllUGnLB3/OZuXlMqTxA/l36eeE37f1st6AeCprA8OrVDoEsKPOR/ohBqxj/JaMrLfV3AXUuKhHHK5xNWbJmGZO6Zc6BLLhK4NospDoYtCTcIO06HwXOya0NQlN48X3zrjif89/elUVqb07c3OnIizUibb/YQ4TXpR9qW4dIBXGkhyVm3OgQQFmBpNDv9Hk2tomYoL05BDa/9bP9Mre730mMl11izT6BfXEFwL7i43pXdMTeOWU+mLa9v6uZ1rbneBXhAEQRAEQRAEQRAEQfjf+Ae7hTbg6AWxtwAAAABJRU5ErkJggg=="
                            alt="user">
                    </div>
                </div>
                <div class="flex flex-col justify-center px-4">
                    <span class="text-base md:text-lg">{{ $user->name }}</span>
                </div>
            </div>
            <div class="flex space-x-2 md:space-x-4 mt-4 md:mt-0">
                <a class="w-1/2 md:w-[124px] px-2 md:px-4 bg-green-600 h-10 text-white rounded-md text-center leading-10"
                    href="./editProfile.html">Update</a>
                <a class="w-1/2 md:w-[124px] px-2 md:px-4 bg-red-600 h-10 text-white rounded-md text-center leading-10"
                    href="#">Delete</a>
            </div>
        </div>
    </section>
    <div class="border mt-4 w-[85%] mx-auto justify-center items-center text-center"></div>
    <section>
        <div class="w-full py-5">
            <div class="w-11/12 mx-auto py-5">
                <div class="flex justify-evenly">
                    <div>
                        <div class="flex flex-col p-2">
                            <span class="font-semibold mb-1">Name</span>
                            <span class="text-gray-400 pl-2">{{ $user->name }}</span>
                        </div>    
                        <div class="flex flex-col p-2">
                            <span class="font-semibold mb-1">User Email</span>
                            <span class="text-gray-400 pl-2">{{ $user->email }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="border mt-4 w-[85%] mx-auto justify-center items-center text-center"></div>
    <section>
        <div class="w-full py-5">
            <div class="w-11/12 mx-auto py-5 mr-[105px]">
                <div class="flex justify-evenly">
                    <div>
                        <div class="flex flex-col">
                            <span class="font-semibold mb-1">Password</span>
                            <span class="text-gray-400 pl-2">••••••••••••</span>
                        </div>
                    </div>                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="border  mt-4 w-[85%] mx-auto justify-center items-center text-center"></div>
    <div>
        @if (auth()->user()->role_id == 2)
            <h2 class="text-2xl md:text-3xl mt-6 ml-[8rem] lg:text-4xl font-bold text-green-900">My Purchases</h2>
        @else
            <h2 class="text-2xl md:text-3xl mt-6 ml-[8rem] lg:text-4xl font-bold text-green-900">My Products</h2>
        @endif

        <div class="flex flex-wrap">
            @isset($products)
                @forelse ($products as $product)
                    <a href="{{ asset('storage/' . $product->image) }}"
                        class="max-w-sm ml-[8rem] w-[35rem] lg:max-w-[42rem] lg:flex m-7">
                        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                            style="background-image: url({{ asset('storage/' . $product->image) }})" title="Woman holding a mug">
                        </div>
                        <div
                            class="shadow-2xl border rounded-md bg-white rounded-b p-4 flex flex-col justify-between leading-normal">
                            <div class="mb-8">
                                <div class="text-gray-900 font-bold text-xl mb-2">{{ $product->name }}</div>
                                <p class="text-gray-700 text-base">{{ $product->description }}</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full mr-4" src="{{ asset('images/14.jpg') }}"
                                    alt="Avatar of Jonathan Reinink">
                                <div class="text-sm">
                                    <p class="text-gray-900 leading-none">{{ $user->name }}</p>
                                    <p class="text-gray-600">{{ \Carbon\Carbon::parse($product->created_at)->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>


                @empty
                    <div class="text-center w-full mt-4">
                        <h1 class="text-2xl font-bold text-gray-400 pb-24">No products found</h1>
                    </div>
                @endforelse
            @else
                
            @endisset
        </div>
        <div class="flex flex-wrap ml-20 mb-16">
            @isset($orders)
                @forelse ($orders as $order)
                    <a class="relative block p-8 border border-gray-100 shadow-xl rounded-xl m-6" href="#">
                        <span
                            class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs">
                            {{$order->status}}
                        </span>

                        <div class="mt-4 text-gray-500 sm:pr-8">
                            <svg class="w-8 h-8 sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>

                            <h5 class="mt-4 text-xl font-bold text-gray-900">
                            {{ $order->total_amount }} $</h5>

                            <p class="hidden mt-2 text-sm sm:block">
                                Contact us for more details
                            </p>
                        </div>
                    </a>
                @empty
                    <div class="text-center w-full mt-4">
                        <h1 class="text-2xl font-bold text-gray-400 pb-24">No commands purshased</h1>
                    </div>
                @endforelse
            @else
                <div class="text-center w-full mt-4">
                    <h1 class="text-2xl font-bold text-gray-400 pb-24">No commands purshased</h1>
                </div>
            @endisset
        </div>

    </div>

@endsection
