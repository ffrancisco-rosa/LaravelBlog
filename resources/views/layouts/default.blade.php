<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="relative flex items-top justify-end bg-gray-800 dark:bg-gray-900 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden top-0 right-0 px-6 py-4 sm:block">
                    <a href="{{ url('/') }}" class="text-sm text-gray-100 underline">Home</a>
                    <a href="{{ url('/blog') }}" class="ml-4 text-sm text-gray-100 underline">Blog</a>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-gray-100 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-100 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-100 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>


        <div>
            @yield('content')
        </div>
        <div>
            @include('layouts.footer')
        </div>
    </body>
</html>