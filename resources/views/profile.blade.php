@extends('layout.pages')
@php
    $user = Auth::user();
@endphp

<style>
    .bg{
        background-image: url('https://tse4.mm.bing.net/th?id=OIP.01eF6jgwZJhZx2gmbb0r9AHaCq&pid=Api&P=0&h=220'); 
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>
@section('content')
<div class="h-80 flex items-center bg">
    <div class="inline pl-8">
        <h3 class="text-gray-100 font-semibold text-xl px-4">Verified Artist</h3>
        <h1 class="text-8xl font-semibold px-4 text-white font-serif">{{$user->name}}</h1>
    </div>
</div>
<main class="ml-6">
{{-- <form action="">
    @csrf
    <x-bladewind::input label='name'>
</form> --}}
    

    <div class="md:mx-20 p-8">
        <h1 class="text-2xl text-center font-semibold">Currently you have no plan!<span class="text-blue-500"></span></h1>
        <div class="grid grid-cols-12 w-full md:border-2 md:p-8 p-0">
            <div class="bg-white rounded-lg p-6 col-span-12 md:col-span-4 ">
                <h2 class="text-2xl font-bold mb-2">Free Trial</h2>
                <p class="mb-4">
                    Get 30 days Free Trial subscription plan to experience awesome
                    music.
                </p>
                <a href="" class="text-blue-500">
                    Get Free Trial 
                    <i class="fa fa-arrow-right "></i>
                </a>
                <img src="https://listen-next-two.vercel.app/_next/image?url=%2Fimages%2Fmisc%2Fplan.png&w=384&q=75"
                    alt="Music lover " class="mt-4" style="height: 280px;" />
            </div>
            <div class="flex col-span-12 md:col-span-3 items-center">
                <div class="bg-gray-50 rounded-lg shadow-md w-full p-6">
                    <h2 class="text-2xl font-semibold my-2"><i class="fa fa-music"></i> Free <span
                            class="text-blue-600">Trial</span></h2>
                    <p class="text-gray-300">What you'll get</p>
                    <ul class="text-sm text-gray-400 my-4 fa-ul flex items-center">
                        <li><span class="fa-li"><i
                                    class="fa fa-check text-white text-xs bg-blue-500 rounded-full px-1 py-0.5"></i></span>All
                            free songs and app features</li>
                    </ul>
                    <ul class="text-sm text-gray-400 my-4 fa-ul flex items-center">
                        <li><span class="fa-li"><i
                                    class="fa fa-check text-white text-xs bg-blue-500 rounded-full px-1 py-0.5"></i></span>No
                            Ads between songs</li>
                    </ul>
                    <div class="mt-4 md:mt-44">
                        <h4 class="text-2xl font-bold">$0.00<span class="text-sm font-thin">/3 months</span></h4>
                        <x-bladewind::button class="w-full mt-4">Start Free Trial</x-bladewind::button>

                    </div>
                </div>
            </div>
            <div class="flex col-span-12 md:col-span-3 items-center">
                <div class="bg-gray-50 rounded-lg shadow-md w-full p-6">
                    <h2 class="text-2xl font-semibold my-2"><i class="fa fa-music"></i> Premium</h2>
                    <p class="text-gray-300">What you'll get</p>
                    <ul class="text-sm text-gray-400 my-4 fa-ul flex items-center">
                        <li><span class="fa-li"><i
                                    class="fa fa-check text-white text-xs bg-blue-500 rounded-full px-1 py-0.5"></i></span>All
                            free songs and app features</li>
                    </ul>
                    <ul class="text-sm text-gray-400 my-4 fa-ul flex items-center">
                        <li><span class="fa-li"><i
                                    class="fa fa-check text-white text-xs bg-blue-500 rounded-full px-1 py-0.5"></i></span>No
                            Ads between songs</li>
                    </ul>
                    <ul class="text-sm text-gray-400 my-4 fa-ul flex items-center">
                        <li><span class="fa-li"><i
                                    class="fa fa-check text-white text-xs bg-blue-500 rounded-full px-1 py-0.5"></i></span>Create
                            playlist & access analytics
                        </li>
                    </ul>
                    <ul class="text-sm text-gray-400 my-4 fa-ul flex items-center">
                        <li><span class="fa-li"><i
                                    class="fa fa-check text-white text-xs bg-blue-500 rounded-full px-1 py-0.5"></i></span>Listen
                            paid song once & purchase
                        </li>
                    </ul>
                    <ul class="text-sm text-gray-400 my-4 fa-ul flex items-center">
                        <li><span class="fa-li"><i
                                    class="fa fa-check text-white text-xs bg-blue-500 rounded-full px-1 py-0.5"></i></span>Download
                            and listen offline
                        </li>
                    </ul>
                    <div class="mt-4 md:mt-16">
                        <h4 class="text-2xl font-bold">$10.99<span class="text-sm font-thin">/year</span></h4>
                        <x-bladewind::button class="w-full mt-4">Start with this</x-bladewind::button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection