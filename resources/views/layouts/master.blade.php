<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Designia</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <nav>
        @include('partials.nav')
    </nav>

    <header>
        @section('header')
        @show
    </header>

    <main>
        @section('main')
        @show
    </main>

    <script src="{{ asset('js/app.js') }}" defer></script>
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
