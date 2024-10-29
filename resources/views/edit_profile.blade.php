@extends('layout.pages')
@php
    $user = Auth::user();
@endphp

@section('title', 'Edit Profile - ' . $user->username)
<style>
    .bg {
        background-image: url('{{asset('storage/'. $user->banner)}}');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 22rem;
    }
</style>
@section('content')
    <form action="{{ route('editProfile') }}" class="{{$user->banner ? 'bg' : 'bg-gradient-to-b from-orange-600 via-red-500 to-purple-400 h-80'}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-end mr-8 py-3 cursor-pointer">
            <button type="button" onclick="showModal('no-cancel')">
                <i class="fa fa-edit text-white" style="font-size: 24px"></i>
                <input type="file" class="hidden">
            </button>
        </div>
        <x-bladewind::modal title="Change Banner" name="no-cancel" size="xl" show_action_buttons="false">
            <x-bladewind::filepicker name="banner" placeholder="Add Banner" />
            <x-bladewind::button color="gray" can_submit="true">Change Banner</x-bladewind::button>
        </x-bladewind::modal>        
        <div class="flex items-end">
            <div class="inline pl-8 pb-4">
                <h3 class="text-gray-100 font-semibold text-xl px-4 cursor-pointer">Verified Artist <i
                        class="fa fa-check text-xs bg-blue-500 p-1 rounded-full"></i></h3>
                <h1 class="text-6xl font-semibold px-4 text-white font-serif">{{ $user->name }}</h1>
                <div class="mt-4">
                    <label for="imageUpload" class="cursor-pointer">
                        <div class="relative w-36 h-36 rounded-full overflow-hidden bg-gray-900 hover:bg-opacity-50">
                            <img class="object-cover w-full h-full transition-opacity duration-200 ease-in-out hover:opacity-50"
                                src="{{asset('storage/' . $user->profile)}}" width="150"
                                height="150" alt="" />
                            <div
                                class="absolute inset-0 flex flex-col justify-center items-center text-white opacity-0 transition-opacity duration-200 ease-in-out hover:opacity-100">
                                <span class=" pb-2">
                                    <i class="fa fa-camera text-xl"></i>
                                </span>
                                <span class="uppercase text-xs w-1/2 text-center">Change Picture</span>
                            </div>
                        </div>
                    </label>
                    <input type="file" id="imageUpload" name="profile" style="display: none;" accept="image/*"
                        onchange="previewImage(event)">
                </div>
            </div>
        </div>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class='bg-red-500 text-white p-3 rounded-lg max-w-md'>{{ $error }}</p>
            @endforeach
        @endif
        <div class="bg-white max-w-md mt-12 ml-12">
            <h1>Profile Detail</h1>
            <div class="py-2">
                <x-bladewind::input name='name' label='Full name' required='true' selected_value='{{ $user->name }}' />
            </div>
            <div class="py-2">
                <x-bladewind::input name='username' label='username' required='true'
                    selected_value='{{ $user->username }}' />
            </div>
            <div class="py-2">
                <x-bladewind::input name='email' label='Email' required='true' selected_value='{{ $user->email }}' />
            </div>
            <div class="py-2">
                <x-bladewind::textarea name='about' label='About' selected_value='{{ $user->about }}' />
            </div>
            <x-bladewind::button class="w-full" can_submit='true'>Edit Profile</x-bladewind::button>
        </div>
    </form>


    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const imgElement = document.querySelector('label img');
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imgElement.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
