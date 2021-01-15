<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Designia</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>
    <nav>
        @include('partials.nav')
    </nav>

    <header>
        @section('header') @show
    </header>

    <main>
        @section('main') @show
    </main>

    {{-- @include('partials.footer') --}}


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script>
        document.getElementById("toggle").addEventListener("click", function() {
            if(document.getElementById("nav-menu").style.display === "none") {
                document.getElementById("nav-menu").style.display = "inherit"
            } else if(document.getElementById("nav-menu").style.display === "inherit") {
                document.getElementById("nav-menu").style.display = "none";
            }
        })
    </script>

    <script>
        document.getElementById("dropdown-toggle").addEventListener("click", function() {
            if(document.getElementById("dropdown-menu").style.display === "none") {
                document.getElementById("dropdown-menu").style.display = "inherit"
            } else if(document.getElementById("dropdown-menu").style.display === "inherit") {
                document.getElementById("dropdown-menu").style.display = "none";
            }
        })
    </script>
</body>

</html>
