<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            <div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Student Management</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row g-0">
            <nav class="col-2 bg-light pe-3">
                <div class="list-group text-center text-lg-start">
                    <a href="#" class="list-group-item list-group-item-action active"> </i>
                        <span class="d-none d-lg-inline">HOME</span>
                    </a>
                    <a href="{{url('/students')}}" class="list-group-item list-group-item-action"> </i>
                        <span class="d-none d-lg-inline">Students</span>
                    </a>
                    <a href="{{url('/teachers')}}" class="list-group-item list-group-item-action"> </i>
                        <span class="d-none d-lg-inline">Teachers</span>
                    </a>
                    <a href="{{url('/courses')}}" class="list-group-item list-group-item-action"> </i>
                        <span class="d-none d-lg-inline">Courses</span>
                    </a>
                    <a href="{{url('/batches')}}" class="list-group-item list-group-item-action"> </i>
                        <span class="d-none d-lg-inline">Batches</span>
                    </a>
                    <a href="{{url('/enrollments')}}" class="list-group-item list-group-item-action"> </i>
                        <span class="d-none d-lg-inline">Enrollment</span>
                    </a>
                    <a href="{{url('/payments')}}" class="list-group-item list-group-item-action"> </i>
                        <span class="d-none d-lg-inline">Payment</span>
                    </a>
                </div>

            </nav>

            <main class="col-10">
                @yield('content')
            </main>
        </div>
    </div>
</div>

        </main>
    </div>
</body>
</html>
