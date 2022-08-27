<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="app.css">
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    {{-- @vite(['resources/css/app.css']) --}}
</head>

<body>
    <header>
        <div class="container"><a class="logo" href="/">Design Storm</a>
            <nav>
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">{{ $user->name }}</a>
                            <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Log
                                out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none";>
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </nav>
        </div>
    </header>
    @yield('content')
</body>

</html>
