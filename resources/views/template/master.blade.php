<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Style -->
    @yield('styles')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('Style/css/bootstrap.css')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
        overflow: hidden;
    }

    .content-wrapper {
        display: flex;
        height: 100vh;
    }

    aside {
        width: 20vw;
        background-color: #79D7BE;
        position: fixed;
        top: 0;
        bottom: 0;
    }

    main {
        width: calc(100vw - 20vw);
        margin-left: 20vw;
        overflow-y: auto;
        /* padding-top: 56px; */
        /* Adjust based on header height */
    }

    .login-page main {
        width: 100vw;
        margin-left: 0;
    }
    </style>
</head>

<body class="{{ Request::path() == 'login' ? 'login-page' : '' }}">
    <header>
        @yield('header')
    </header>

    @if (Request::path() != 'login')
    <div class="content-wrapper">
        <aside>
            @include('template.sidebar')
        </aside>
        <main>
            @yield('content')
        </main>
    </div>
    @else
    <main class="login-page">
        @yield('content')
    </main>
    @endif

    <footer>
        @yield('footer')
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>