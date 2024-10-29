<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>

    <style>
        .div {
            background-image: url("{{ asset('storage/girl.png') }}");
            background-size: contain;
            height: 400px;
            background-repeat: no-repeat;
            background-position: left;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen font-sans">

@if($errors->any())
    <div>
        {{ $errors }}
    </div>
@endif
    <header class="bg-white shadow-md py-4 px-6">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="https://www.flaticon.com/free-icons/music-note" alt="Music Note" class="w-8 h-8">
                <h1 class="text-xl font-bold text-gray-800">Music App</h1>
            </div>
            <nav class="flex space-x-6">

                <a href="#" class="text-gray-600 hover:text-blue-500">Discover</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">Pricing</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">About Us</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">Blog</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">Contact Us</a>
            </nav>
            <a href="/register" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">Try it Free</a>
        </div>
    </header>


    {{-- Main content --}}
    <main class="div flex flex-col items-center bg-cyan-500 py-32">
        <h2 class="text-4xl font-bold text-white mb-4">Music to fill yoursoul</h2>
        <p class="text-lg text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla
            auctor, vestibulum magna sed, convallis ex.</p>
        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">Get Started</button>
    </main>
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-3xl font-bold text-center mb-8">Features of Listen app</h1>
        <p class="text-gray-600 text-center mb-12">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus
            sit aliquid molestiae sint ab illo.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-center mb-4">
                    <i
                        class="fa fa-music text-2xl flex justify-center border py-2 px-3 bg-blue-200 text-blue-700 rounded-full"></i>
                </div>
                <h2 class="text-xl font-bold mb-2">Millions of tracks</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet elit adipisicing. consectetur maiores
                    Exercitationem.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-center mb-4">
                    <i
                        class="fa fa-music text-2xl flex justify-center border py-2 px-3 bg-blue-200 text-blue-700 rounded-full"></i>
                </div>
                <h2 class="text-xl font-bold mb-2">Create playlists</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet elit adipisicing. consectetur maiores
                    Exercitationem.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-center mb-4">
                    <i
                        class="fa fa-music text-2xl flex justify-center border py-2 px-3 bg-blue-200 text-blue-700 rounded-full"></i>
                </div>
                <h2 class="text-xl font-bold mb-2">Discover new music</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet elit adipisicing. consectetur maiores
                    Exercitationem.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-center mb-4">
                    <i
                        class="fa fa-calendar text-2xl flex justify-center border py-2 px-3 bg-blue-200 text-blue-700 rounded-full"></i>
                </div>
                <h2 class="text-xl font-bold mb-2">Live Streaming</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet elit adipisicing. consectetur maiores
                    Exercitationem.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-center mb-4">
                    <i
                        class="fa fa-music text-2xl flex justify-center border py-2 px-3 bg-blue-200 text-blue-700 rounded-full"></i>
                </div>
                <h2 class="text-xl font-bold mb-2">Subsciption plan</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet elit adipisicing. consectetur maiores
                    Exercitationem.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-center mb-4">
                    <i
                        class="fa fa-music text-2xl flex justify-center border py-2 px-3 bg-blue-200 text-blue-700 rounded-full"></i>
                </div>
                <h2 class="text-xl font-bold mb-2">User Management</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet elit adipisicing. consectetur maiores
                    Exercitationem.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-center mb-4">
                    <i
                        class="fa fa-music text-2xl flex justify-center border py-2 px-3 bg-blue-200 text-blue-700 rounded-full"></i>
                </div>
                <h2 class="text-xl font-bold mb-2">Offline listening</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet elit adipisicing. consectetur maiores
                    Exercitationem.</p>
            </div>
        </div>
    </div>

    {{-- Subscription plan --}}
    <div class="text-center">
        <h1 class="text-4xl font-bold my-8"><span class="text-blue-500">Plans </span> For you</h1>
    </div>

    <main class="md:mx-20 p-8">
        <div class="grid grid-cols-12 w-full md:border-2 md:p-8 p-0">
            <div class="bg-white rounded-lg p-6 col-span-12 md:col-span-4 ">
                <h2 class="text-2xl font-bold mb-2">Free Trial</h2>
                <p class="mb-4">
                    Get 30 days Free Trial subscription plan to experience awesome
                    music.
                </p>
                <a href="" class="text-blue-500">
                    Register now
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
    </main>

    <div class="footer text-gray-500 text-center py-4 border-t-2">
        © 2024 Listen app. All rights reserved.
    </div>
</body>

</html>
