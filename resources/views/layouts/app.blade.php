<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Proiect</title>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <nav class="navbar navbar-expand-md navbar-light bg-light" style="position: fixed !important; top: 0;  width: 100%;">
        <a class="navbar-brand" href="/" style="width:150px; margin-top:0px;"><img src="{{ URL::to('/') }}/img/snackoverflow.png" class="navbar-brand" style="height:60px;"></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="{{Request :: path() === '/' ? 'active' : ''}}">
                    <a class="nav-link " href="/">Acasă <span class="sr-only"></span></a>
                </li>
                <li class="{{Request :: path() === 'posts' ? 'active' : ''}}">
                    <a class="nav-link" href="/posts">Postări</a>
                </li>
                <li class="{{Request :: path() === '2' ? 'active' : ''}}">
                    <a class="nav-link" href="#">Despre noi</a>
                </li>
            </ul>
            <form class="form-inline mx-auto my-2 my-lg-0" style="align-content:center;" method="get" action="/search">
                <input class="form-control mr-sm-2" type="search" placeholder="Caută" aria-label="Search" name="q">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Caută</button>
            </form>
            @if (Route::has('login'))
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                @auth
                <li class="nav-item dropdown {{Request :: path() === 'login' ? 'active' : ''}}">
                    <a class="nav-link dropdown-toggle" href="{{ url('/dashboard') }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button class="btn btn-outline-secondary" type="submit">Dashboard</button>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('myposts.index')}}">Postările mele</a>
                        <a class="dropdown-item" href="/user/profile">Profilul meu</a>
                        <a class="dropdown-item" href="/logout">Deconectare</a>
                    </div>
                </li>
                @else

                <li class="{{Request :: path() === 'login' ? 'active' : ''}}">
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"> <button class="btn btn-outline-secondary" type="submit">Autentificare</button></a>
                </li>
                @if (Route::has('register'))

                <li class="{{Request :: path() === 'login' ? 'active' : ''}}">
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">
                        <button class="btn btn-outline-secondary" type="submit">Înregistrare</button></a>
                </li>
                @endif
                @endauth
            </ul>
            @endif




            @livewireStyles

            <!-- Scripts -->
            <script src="{{ mix('js/app.js') }}" defer></script>

        </div>
    </nav>

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100" style="  margin-top: 70px !important;">

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>