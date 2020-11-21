<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travelhub</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>

<body>
    <nav>
        @include('partials.nav')
    </nav>

    <header>
        @include('partials.header')
    </header>

    <section id="products" class="text-gray-700 body-font">
        @include('partials.products')
    </section>

    <script src="/js/app.js"></script>
</body>

</html>
