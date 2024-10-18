@php
    $user = Auth::user();
@endphp
@extends('layout.pages')
@section('title', 'Profile - ' . $user->username)

<style>
    .bg {
        background-image: url('{{ asset('storage/' . $user->banner) }}');
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .bw-button.outlined.flex {
        padding-bottom: .2rem !important;
        padding-top: .2rem !important;
    }
</style>
@section('content')
    <div class="h-80 flex items-center bg">
        <div class="inline pl-8">
            <h3 class="text-gray-100 font-semibold text-xl px-4 cursor-pointer">Verified Artist <i
                    class="fa fa-check text-xs bg-blue-500 p-1 rounded-full"></i></h3>
            <h1 class="text-7xl font-semibold px-4 text-white font-serif">{{ $user->name }}</h1>
        </div>
    </div>
    @if (session('Res'))
        <div class="flex justify-center transition-opacity duration-500 opacity-100" id="alert">
            <x-bladewind::alert type="success" size='tiny' class=" w-80">
                {{ session('Res') }}
            </x-bladewind::alert>
        </div>
    @endif
    <div class="p-4 flex items-center gap-8">
        <div
            class="p-4 bg-gray-500 hover:bg-gray-600 pl-5 border-2 shadow-lg rounded-full w-16 h-16 flex items-center justify-center cursor-pointer">
            <i class="fa fa-play text-2xl text-white"></i>
        </div>
        <x-bladewind::button color='gray' outline='true'>Follow</x-bladewind::button>
        <a href="{{ url('/edit/profile') }}"
            class="bw-button flex items-center uppercase regular primary border-gray-500/50 focus:ring-gray-500 hover:border-gray-600
            dark:hover:border-gray-500 active:border-gray-600 text-gray-600 focus:ring border-2 cursor-pointer rounded-md outlined border-2">
            <i class="fa fa-edit text-lg px-1"></i>Edit Profile</a>
        <a href="{{ url('/add/song') }}"
            class="bw-button flex items-center uppercase regular primary border-gray-500/50 focus:ring-gray-500 hover:border-gray-600
            dark:hover:border-gray-500 active:border-gray-600 text-gray-600 focus:ring border-2 cursor-pointer rounded-md outlined border-2">
            <i class="fa fa-plus text-lg px-1" style="font-size:15px;"></i> Add Song</a>
    </div>
@endsection
