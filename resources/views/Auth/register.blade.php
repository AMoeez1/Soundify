<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- Google Fonts --}}
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Afacad Flux", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            font-variation-settings:
                "slnt" 0
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4">Login to <span class="text-blue-500">Listen app</span></h2>
        <p class="text-gray-600 mb-6">Welcome back! login with your data that you entered during
            registration</p>
        <div class="py-6">
            <x-bladewind::button type="secondary" outline="true" class="w-full">
                <i class="fa fa-google" style="font-size: 20px"></i>
                Continue with Google
            </x-bladewind::button>
        </div>
        <hr>
        <p class="text-center py-4 font-semibold">OR</p>
        <hr>
        <form class="my-8">
            <div class="py-2">
                <x-bladewind::input name='name' label='Full name' required='true' />
            </div>
            <div class="py-2">
                <x-bladewind::input name='username' label='username' required='true' />
            </div>
            <div class="py-2">
                <x-bladewind::input name='email' label='Email' required='true' />
            </div>
            <div class="pt-2">
                <x-bladewind::input name='password' label='Password' required='true' />
            </div>
            <a href="#" class="flex justify-end text-blue-600 hover:underline mb-4">Forgot Password?</a>
            <x-bladewind::button class="w-full">Login</x-bladewind::button>
        </form>

        <p class="text-gray-400">Already Registered?</p>
        <a class="text-blue-600 hover:text-blue-900" href="/login">Login</a>
    </div>
</body>

</html>
