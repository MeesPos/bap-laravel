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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
</body>

</html>
