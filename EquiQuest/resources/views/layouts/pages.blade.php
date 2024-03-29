<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EquiQuest</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <img src="{{ asset('images/logo-transparent.png') }}" alt="logo" width="30" height="30"
                    style="margin-right: 10px;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    EQUIQUEST
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @if (Auth::user()->role === 'Customer')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customer.home') }}">{{ __('Home') }}</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customer.bookings') }}">{{ __('Bookings') }}</a>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customer.horse') }}">{{ __('Horses') }}</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customer.events') }}">{{ __('Events') }}</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customer.resources') }}">{{ __('Resources') }}</a>
                            @elseif (Auth::user()->role === 'Admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.home') }}">{{ __('Home') }}</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.users') }}">Users</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.horses.index') }}">Horses</a>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('admin.bookings.index') }}">{{ __('Bookings') }}</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.analytics') }}">{{ __('Analytics') }}</a>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('stablemanager.home') }}">{{ __('Home') }}</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('stablemanager.horses') }}">{{ __('Horses') }}</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('stablemanager.stable') }}">{{ __('Stable') }}</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('stablemanager.staff') }}">{{ __('Staff') }}</a>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('stablemanager.vetssupplier') }}">{{ __('Vets & Suppliers') }}</a>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('stablemanager.payments') }}">{{ __('Payments') }}</a>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
