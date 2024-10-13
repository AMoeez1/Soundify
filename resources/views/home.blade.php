@extends('Layout.pages')
@section('content')
<div class="flex justify-center h-80 bg-gradient-to-b from-red-400 via-gray-400 to-transparent">
    <div class="flex items-center my-8 w-3/4 bg-blue-500 p-1 rounded-lg shadow-lg h-fit">
        <i class=" fa fa-search text-white text-xl mx-4"></i>
        <input type="text" class=" border-0 w-full text-white bg-blue-500 placeholder-white" placeholder="Search any song, artist or album">
    </div>
</div>
<main class="ml-6">
    <div class="">
        <h3 class="uppercase text-gray-400">Listen to top</h3>
        <h1 class="text-3xl font-semibold">Top <span class="text-blue-500">Charts</span></h1>
    </div>
    <div class="container px-4 py-10">
        <div class="overflow-x-auto">
          <div class="flex space-x-4">
            <div class="card bg-white rounded-lg shadow-md p-4 transition-all hover:bg-red-500 hover:text-white flex-shrink-0 w-60">
              <h3 class="text-xl">Service 1</h3>
              <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <div class="mt-auto">
                <a href="#" class="inline-block mt-4 text-red-500 bg-white border border-red-500 rounded-lg px-3 py-1 hover:bg-red-500 hover:text-white transition">Learn More</a>
              </div>
            </div>
            <!-- Repeat for other services -->
            <div class="card bg-white rounded-lg shadow-md p-4 transition-all hover:bg-red-500 hover:text-white flex-shrink-0 w-60">
              <h3 class="text-xl">Service 2</h3>
              <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <div class="mt-auto">
                <a href="#" class="inline-block mt-4 text-red-500 bg-white border border-red-500 rounded-lg px-3 py-1 hover:bg-red-500 hover:text-white transition">Learn More</a>
              </div>
            </div>
            <!-- Add remaining cards -->
          </div>
        </div>
      </div>
     
</main>
@endsection