



@extends('layout.layout')
@section('content')
<div class="w-full h-screen flex items-center bg-gray-200 dark:bg-gray-900">
  <div class="xl:w-[40%] lg:w-[50%] sm:w-[80%] xs:w-[96%] mx-auto flex flex-col gap-2 justify-center items-center p-4 mx-4 border-2 rounded-lg bg-white dark:border-gray-500 dark:bg-gray-900">
      <img src="https://media.licdn.com/media/AAYQAgSuAAgAAQAAAAAAACusnN9kMj0wRRWck-KbrrrLSg.png" alt="User Profile" class="w-[6rem] h-[6rem] outline outline-2 outline-gray-200 rounded-full" />
      <div class="w-full pt-4 text-center">
          <h3 class="text-2xl font-serif text-gray-900 dark:text-white">Votre Order a bien passé</h3>
          <p class="text-xl text-serif pt-2 text-gray-500 dark:text-gray-400">Discover free and easy ways to find a great
              hire,
              fast.</p>
      </div>

      <div class="flex sm:flex-row xs:flex-col gap-4 pt-4 dark:text-white">
          <button class="px-6 py-1 rounded-full outline outline-1 outline-blue-700 font-serif">Yes, I'm hiring</button>
          <button class="px-6 py-1 rounded-full outline outline-1 outline-blue-700 font-serif">No, not right now</button>
      </div>
  </div>
</div>
@endsection