@extends('layout.pages')
@section('title', 'Add Song - Soundify')
@section('content')
    <div class="w-full flex justify-center mt-8">
        <form action="{{route('add_song')}}" method="post" enctype="multipart/form-data" class="w-1/3">
            @csrf
            {{-- <x-bladewind::filepicker name="audio" placeholder="Upload an Audio" accepted_file_types="audio/*" /> --}}
            <input type="file" accept="audio/*" name="audio">
            <x-bladewind::input name='song' label='Song Name' required='true'/>
            <x-bladewind::button disabled='true' color='gray' outline='true' class="w-full">Artist Id: {{Auth::id()}}</x-bladewind::button>
            <x-bladewind::button disabled='true' color='gray' outline='true' class="w-full my-4">Artist username: {{Auth::user()->username}}</x-bladewind::button>
            {{-- <x-bladewind::input name='feat_artist' label='Featured Artist'/> --}}
            <x-bladewind::input name="site" label="Featured Artist" prefix="@" />
            <x-bladewind::filepicker name="cover" placeholder='Select Cover of the song' accepted_file_types='images/*' required='true'/>
            <x-bladewind::button color='gray' can_submit='true' class="w-full my-4">Add Song</x-bladewind::button>
        </form>
    </div>
@endsection
