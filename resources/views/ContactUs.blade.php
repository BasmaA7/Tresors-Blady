@extends('layout.layout')
@section('content')

    <!-- Contact Us Section -->
    <section
    class="ezy__contact10 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white overflow-hidden"
  >
    <div class="container px-4 bg-orange-200 ">
      <div class="grid grid-cols-12 py-6">
        <div class="col-span-12 lg:col-span-6 lg:col-start-7 order-2 mb-4 lg:mb-0">
          <div
            class="bg-center bg-no-repeat bg-cover min-h[150px] w-[50vw] h-full"
            style="background-image: url(https://media.istockphoto.com/id/1146280994/fr/photo/beaucoup-de-tapis-color%C3%A9s-et-de-tapis-%C3%A0-vendre-dans-le-magasin-%C3%A0-la-rue-distanbul.jpg?s=612x612&w=0&k=20&c=2IXBq7ZbABduED2lbWiSaZwD6D8VW_5qBh7eVOeDMco=)"
          >
            <div class="flex flex-col justify-center h-full -ml-14">
              <div class="bg-gray-100 shadow dark:bg-gray-800 max-w-[350px] mt-6 flex items-center rounded-xl p-5">
                <i class="fas fa-envelope-open-text text-3xl px-2"></i>
                <a class="text-lg font-medium ml-4" href="mailto:email@easyfrontend.com">email@easyfrontend.com</a>
              </div>
              <div class="bg-gray-100 shadow dark:bg-gray-800 max-w-[350px] mt-6 flex items-center rounded-xl p-5">
                <i class="fas fa-phone-alt text-3xl px-2"></i>
                <a class="text-lg font-medium ml-4" href="callto:123**56">+880 1742-0****0</a>
              </div>
              <div class="bg-gray-100 shadow dark:bg-gray-800 max-w-[350px] mt-6 flex items-center rounded-xl p-5">
                <i class="fas fa-hdd text-3xl px-2"></i>
                <a class="text-lg font-medium ml-4" href="mailto:email@easyfrontend.com">easyfrontend.com</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-5 ">
        
          <div
            class="bg-white dark:bg-[#162231] rounded-2xl border-[25px] dark:border-[#1C293A] border-[#F4F7FD] border- p-6 md:p-12"
          >
            <h2 class="text-2xl md:text-[45px] leading-none font-bold mb-4">Contact Us</h2>
            <p class="text-lg mb-12">We list your menu online, help you process orders.</p>
  
            <form class="">
              <div class="mb-4">
                <input
                  type="text"
                  class="min-h-[48px] leading-[48px] bg-[#F2F6FD] dark:bg-[#2A384C] border border-transparent rounded-xl focus:outline-none focus:border focus:border-[#86b7fe] w-full px-5"
                  placeholder="Enter Name"
                />
              </div>
              <div class="mb-4">
                <input
                  type="email"
                  class="min-h-[48px] leading-[48px] bg-[#F2F6FD] dark:bg-[#2A384C] border border-transparent rounded-xl focus:outline-none focus:border focus:border-[#86b7fe] w-full px-5"
                  placeholder="Enter Email"
                />
              </div>
              <div class="mb-4">
                <textarea
                  name="message"
                  class="min-h-[48px] leading-[48px] bg-[#F2F6FD] dark:bg-[#2A384C] border border-transparent rounded-xl focus:outline-none focus:border focus:border-[#86b7fe] w-full px-5"
                  placeholder="Enter Message"
                  rows="4"
                ></textarea>
              </div>
              <div class="text-start">
                <button type="submit" class="bg-blue-600 hover:bg-opacity-90 text-white px-8 py-3 rounded mb-4">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
    


@endsection