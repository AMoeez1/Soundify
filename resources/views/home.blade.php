@extends('Layout.pages')
@section('title', 'Home')
@section('content')
    <div class="flex justify-center h-80 bg-gradient-to-b from-red-400 via-gray-400 to-transparent">
        <div class="flex items-center my-8 w-3/4 bg-blue-500 p-1 rounded-lg shadow-lg h-fit">
            <i class=" fa fa-search text-white text-xl mx-4"></i>
            <input type="text" class=" border-0 w-full text-white bg-blue-500 placeholder-white"
                placeholder="Search any song, artist or album">
        </div>
    </div>
    <main class="ml-6">
        @include('components.subscription')
        <div class="">
            <h3 class="uppercase text-gray-400">Listen to top</h3>
            <h1 class="text-3xl font-semibold">Top <span class="text-blue-500">Charts</span></h1>
        </div>
        <div class="container px-4 py-10">
            <div class="overflow-x-auto">
                @foreach ($songs as $song)
                    <div class="flex space-x-4">
                        <div class="card cursor-pointer bg-white rounded-lg shadow-md p-4 transition-all hover:bg-red-500 hover:text-white flex-shrink-0 w-60"
                            onclick="playAudio('{{ asset('storage/' . $song->audio) }}', '{{ $song->song_name }}', '{{ $song->artist_name }}', '{{ asset('storage/' . $song->cover) }}')">
                            <img src="{{ asset('storage/' . $song->cover) }}" class="w-full h-36 object-cover rounded-lg"
                                alt="">
                            <h3 class="text-xl mt-2">{{ $song->song_name }}</h3>
                            <a href="{{url('/' . $song->artist->username)}}" class="mt-">{{ $song->artist_name }}</a>
                            <div class="mt-auto">
                                <a href="#"
                                    class="inline-block mt-4 text-red-500 bg-white border border-red-500 rounded-lg px-5 py-2 hover:bg-red-500 hover:text-white transition">
                                    <i class="fa fa-play text-2xl flex items-center justify-center"></i>
                                </a>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
