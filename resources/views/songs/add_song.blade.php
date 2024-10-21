@extends('layout.pages')
@section('title', 'Add Song - Soundify')
@section('content')
    <div class="w-full flex justify-center mt-8">
        <form action="{{route('add_song')}}" method="post" enctype="multipart/form-data" class="border p-4 rounded-lg bg-gray-50 md:w-1/3 shadow-xl">
            @csrf
            <h1 class="text-2xl text-center my-4">Release Song to Soundify!</h1>
            <div class="mt-3 flex items-center justify-center w-full">
                <label class="w-full cursor-pointer bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition">
                  <i class="fa fa-music mx-3"></i>Upload Audio
                  <input type="file" accept="audio/*" name="audio" class="hidden" />
                </label>
            </div>
            <p class="mb-4 text-sm text-red-300">Make sure your song does not contain any copyrighted Sample, Lyrics or Beat. Other wise taken action can temporarily/permanently terminate your account.</p>
                            
            <x-bladewind::input name='song' label='Song Name' required='true'/>
            <x-bladewind::button disabled='true' color='gray' outline='true' class="w-full">Artist Id: {{Auth::id()}}</x-bladewind::button>
            <x-bladewind::button disabled='true' color='gray' outline='true' class="w-full my-4">Artist username: {{Auth::user()->username}}</x-bladewind::button>
            {{-- <x-bladewind::input name='feat_artist' label='Featured Artist'/> --}}
            <x-bladewind::input name="feat" label="Featured Artist ( If Featured )" prefix="@" />
            <x-bladewind::input name='from' label='From ( Optional )'/>
            <x-bladewind::input name='writer' label='Written By' required='true'/>
            <x-bladewind::input name='music' label='Music By' required='true'/>
            <span></span>
            <x-bladewind::filepicker name="cover" placeholder='Select Cover of the song' accepted_file_types='images/*' required='true'/>
            <x-bladewind::button color='gray' can_submit='true' class="w-full my-4">Add Song</x-bladewind::button>
        </form>
    </div>
@endsection
