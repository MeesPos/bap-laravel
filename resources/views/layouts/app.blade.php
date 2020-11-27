<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Designia</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav>
            @include('partials.nav')
        </nav>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
    </div>

    <script>
        document.getElementById("toggle").addEventListener("click", function() {
            if(document.getElementById("nav-menu").style.display === "none") {
                document.getElementById("nav-menu").style.display = "inherit"
            } else if(document.getElementById("nav-menu").style.display === "inherit") {
                document.getElementById("nav-menu").style.display = "none";
            }
        })
    </script>
</body>

</html>
