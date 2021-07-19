<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Voting App</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <div class="min-h-screen bg-gray-100">
           <header class="flex items-center justify-between px-8 py-4">
                <a href="#">
                    <img src="{{ asset('img/logo.svg') }}" alt="logo">
                </a>
                <div class="flex items-center">
                    @if (Route::has('login'))
                        <div class="top-0 right-0 px-6 py-4">
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
        
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    <a href="#">
                        <img src="https://www.gravatar.com/avatar/0000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
                    </a>
                </div>
           </header>

           <main class="container mx-auto flex max-w-custom">
            <div class="w-70 mr-5">
                Idea form goes here
            </div>
            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                        <li>
                            <a class="border-b-4 pb-3 border-blue" href="">All Ideas</a>
                        </li>
                        <li>
                            <a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue" href="">Considering</a>
                        </li>
                        <li>
                            <a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue" href="">In Progress</a>
                        </li>
                    </ul>
                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                        <li>
                            <a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue" href="">Implemented</a>
                        </li>
                        <li>
                            <a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue" href="">Closed</a>
                        </li>
                    </ul>
                </nav>
                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
           </main>
    </body>
</html>
