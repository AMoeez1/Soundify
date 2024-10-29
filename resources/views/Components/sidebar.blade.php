<div class="flex text-gray-900">
    <aside class="flex h-screen fixed flex-col items-center border-r border-gray-200 bg-white">
        <div class="flex cursor-pointer w-20 items-center justify-center border-b border-gray-200 p-2">
            <i class="fa fa-bars text-2xl"></i>
        </div>
        <nav class="flex flex-1 flex-col gap-y-4 pt-10">
            <a href="{{ url('/') }}"
                class="group relative rounded-xl bg-gray-100 p-2 text-blue-600 hover:bg-gray-50">
                <i class="fa fa-home text-xl text-gray-500"></i>
                <div class="absolute inset-y-0 left-12 hidden items-center group-hover:flex">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Home <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </a>

            <a href="#" class="text-gary-400 group relative rounded-xl p-2 hover:bg-gray-50">
                <i class="fa fa-music text-xl text-gray-500"></i>
                <div class="absolute inset-y-0 left-12 hidden items-center group-hover:flex">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Music <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </a>

            <a href="#" class="text-gary-400 group relative rounded-xl p-2 hover:bg-gray-50">
                <i class="fa fa-microphone text-xl text-gray-500"></i>
                <div class="absolute inset-y-0 left-12 hidden items-center group-hover:flex">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Artists<span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </a>

            <a href="#" class="text-gary-400 group relative rounded-xl p-2 hover:bg-gray-50">
                <i class="fa fa-headphones text-xl text-gray-500"></i>
                <div class="absolute inset-y-0 left-12 hidden items-center group-hover:flex">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Albums <span class="text-gray-400"></span>
                    </div>
                </div>
            </a>
        </nav>
        <i class="fa fa-ellipsis-h mt-4"></i>
        <nav class="flex flex-1 flex-col gap-y-4 pt-10">
            <a href="#" class="group relative rounded-xl bg-gray-100 p-2 text-blue-600 hover:bg-gray-50">
                <i class="fa fa-heart "></i>
                <div class="absolute inset-y-0 left-12 hidden items-center group-hover:flex">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Liked <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </a>

            <a href="#" class="text-gary-400 group relative rounded-xl p-2 hover:bg-gray-50">
                <i class="fa fa-history text-xl text-gray-500"></i>
                <div class="absolute inset-y-0 left-12 hidden items-center group-hover:flex">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        History <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </a>

            <a href="#" class="text-gary-400 group relative rounded-xl p-2 hover:bg-gray-50">
                <i class="fa fa-plus-square-o text-xl text-gray-500"></i>
                <div class="absolute inset-y-0 left-12 hidden items-center group-hover:flex">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Add Music <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </a>
        </nav>
        <i class="fa fa-ellipsis-h mt-4"></i>
        {{-- <div class="flex flex-col items-center gap-y-4 py-10">
        </div> --}}
        <form method='post' action='{{route('logout')}}' class="flex flex-col items-center gap-y-4 py-10">
        @csrf
            <a href="/profile">Profile</a>
            <x-bladewind::button can_submit='true' outline='true' color='gray' >Logout</x-bladewind::button>
        </form>
    </aside>
</div>
