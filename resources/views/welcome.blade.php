<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio - Clinic</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="bg-gray-50 text-black/50">
        <header class="grid grid-cols-2 items-center gap-2 bg-gray-400 h-20">
            <div class="ml-2">
                <img class="h-16" src="{{ asset('img/logo.png') }}" alt="logo">
            </div>
            @if (Route::has('login'))
                <nav class="mx-3 flex flex-1 justify-end">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 text-black ring-1 ring-transparent transition hover:bg-gray-500 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-md px-3 text-black ring-1 ring-transparent transition hover:bg-gray-500 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="rounded-md px-3 text-black ring-1 ring-transparent transition hover:bg-gray-500 focus:outline-none focus-visible:ring-[#FF2D20]">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
    </div>

    <div>
        <img src="{{ asset('img/index.png') }}" alt="">
    </div>

    <footer class="bg-white rounded-lg shadow">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <img src="{{ asset('img/logo.png') }}"
                    class="h-14 flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
            </img>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto" />
            <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a
                    href="#" class="hover:underline">Clinic</a>. All Rights
                Reserved.</span>
        </div>
    </footer>
</body>

</html>
