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
        {{-- <div
            class="p-4 bg-gray-500 hover:bg-gray-600 pl-5 border-2 shadow-lg rounded-full w-16 h-16 flex items-center justify-center cursor-pointer">
            <i class="fa fa-play text-2xl text-white"></i>
        </div>
        <x-bladewind::button color='gray' outline='true'>Follow</x-bladewind::button> --}}
        <a href="{{ url('/edit/profile') }}"
            class="bw-button flex items-center uppercase regular primary border-gray-500/50 focus:ring-gray-500 hover:border-gray-600
            dark:hover:border-gray-500 active:border-gray-600 text-gray-600 focus:ring border-2 cursor-pointer rounded-md outlined border-2">
            <i class="fa fa-edit text-lg px-1"></i>Edit Profile</a>
        <a href="{{ url('/add/song') }}"
            class="bw-button flex items-center uppercase regular primary border-gray-500/50 focus:ring-gray-500 hover:border-gray-600
            dark:hover:border-gray-500 active:border-gray-600 text-gray-600 focus:ring border-2 cursor-pointer rounded-md outlined border-2">
            <i class="fa fa-plus text-lg px-1" style="font-size:15px;"></i> Add Song</a>
    </div>
    <div class="bg-gray-50">
        <div class="p-4 ml-4">
            <h2 class="text-2xl font-bold text-primary">Top Songs</h2>
            <ul class="mt-4 space-y-4">
                @foreach ($songs as $song)
                    <li class="flex items-center justify-between p-2 border-b hover:bg-gray-100 cursor-pointer"
                        onclick="playAudio('{{asset('storage/'. $song->audio)}}')">
                        <div class="flex items-center">
                            <img src="{{ asset('storage/' . $song->cover) }}"
                                alt="{{ $song->artist_name . "'s" . $song->song_name }}" class="w-12 rounded-lg mr-2" />
                            <div>
                                <span class="font-semibold">{{ $song->song_name }}</span>
                                <p class="text-muted-foreground">{{ $song->artist_name }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fa fa-heart-o hover:text-red-500 text-gray-500 text-xl"></i>
                            <a href="{{url($user->username.'/edit/song/' . $song->id)}}">
                                <i class="fa fa-edit text-xl px-2"></i>
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <audio id="audioPlayer" controls style="display: none;">
                <source id="audioSource" src="" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>

    <script>
         function playAudio(audioSrc) {
            const audioPlayer = document.getElementById('audioPlayer');
            audioPlayer.src = audioSrc;
            audioPlayer.play().catch(error => {
                console.error('Error playing audio:', error);
            });
        }
    </script>
@endsection
