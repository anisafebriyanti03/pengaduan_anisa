<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">{{ config('app.name') }}</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collpase">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    @guest('masyarakat')
                        <li class="nav-item">
                            <a href="{{ route('masyarakat.login') }}" class="nav-link">Login</a>
                        </li>
                        @else
                        @can('level',['masyarakat','petugas'])
                            <li class="nav-item">
                                <a href="{{ route('post') }}" class="nav-link">Data Post </a>

                            </li>
                        @endcan
                        @can('level',['masyarakat'])
                            <li class="nav-item">
                                <a href="{{ route('masyarakat') }}" class="nav-link">Data Masyarakat </a>

                            </li>
                        @endcan
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">My Profile</a>
                                <a href="{{ route('masyarakat.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="dropdown-item">Logout</a>

                                <form action="{{ route('masyarakat.logout') }}" id="logout-form" method="post">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('masyarakat.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                            <form action="{{ route('masyarakat.logout') }}" id="logout-form" method="post">
                                    @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Aplikasi Pengaduan Masyarakat</a> -->
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collpase">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    @guest('masyarakat')
                        <li class="nav-item">
                            <a href="{{ route('masyarakat.login') }}" class="nav-link">Login</a>
                        </li>
                        @else
                        <li class="nav-item">
                                <a href="{{ route('dashboard') }}">Home</a>
                            </li>
                        @can('level',['masyarakat','petugas'])
                            <li class="nav-item">
                                <a href="{{ route('post') }}" class="nav-link">Data Post </a>
                            </li>
                        @endcan
                        @can('level',['masyarakat'])
                            <li class="nav-item">
                                <a href="{{ route('masyarakat.index') }}" class="nav-link">Laporkan </a>

                            </li>
                        @endcan
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">My Profile</a>
                                <!-- <a href="{{ route('masyarakat.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="dropdown-item">Logout</a>

                                <form action="{{ route('masyarakat.logout') }}" id="logout-form" method="post">
                                    @csrf
                                </form> -->
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('masyarakat.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                            <form action="{{ route('masyarakat.logout') }}" id="logout-form" method="post">
                                    @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>