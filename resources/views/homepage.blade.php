@extends('layouts.master')

@section('header')
<div class="md:flex">
    <div class="flex items-center justify-center px-6 py-8 md:h-128 w-full md:w-1/2">
        <div class="max-w-xl">
            <h2 class="text-2xl font-semibold text-gray-800 md:text-3xl">Koop jouw <span class="text-indigo-600">design
                    kleding</span></h2>

            <p class="mt-2 text-sm text-gray-500 md:text-base">In de categorie designer van Designia vind je de
                meest stijlvolle ontwerpen van hoogwaardige kwaliteit. Van ready-to-wear collecties tot aan unieke
                sneakers en iconische modeaccessoires van designer merken: ontdek het bij Designia.</p>
        </div>
    </div>

    <div class="w-full h-96 md:w-1/2 md:h-96">
        <div class="h-full w-full bg-cover"
            style="background-image: url(https://images.unsplash.com/photo-1596609548086-85bbf8ddb6b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">
            <div class="h-full w-full bg-black opacity-25"></div>
        </div>
    </div>
</div>

@stop

@section('main')
<div class="recentCarousel">
    <div class="recentHeader">
        <h2 class="text-2xl font-semibold text-gray-800 md:text-3xl">Onze nieuwste <span
                class="text-indigo-600">Producten</span></h2>
        <p class="mt-2 text-sm text-gray-500 md:text-base">Al onze nieuwste producten, vers van de pers!</p>
    </div>
    <div class="owl-carousel owl-recent owl-theme">
        @foreach($products as $row)
        <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6 product-image"
                src="{{asset('storage/' . $row->getFirstImage())}}" alt="{{$row['productName']}}">
            <h3 class="tracking-widest text-indigo-500 text-medium font-medium title-font">&euro;
                {{$row['productPrice']}},-</h3>
            <h2 class="text-lg text-gray-900 font-medium title-font">{{$row['productName']}}</h2>
            <p class="leading-relaxed text-base">{{Str::words($row['productDesc'], 20)}}</p>
            <a
                href="{{route('details', ['id' => $row['id'], 'name' => strtolower(str_replace(' ', '-', $row['productName']))])}}">
                <button
                    class="h-10 px-5 text-gray-100 transition-colors duration-150 bg-gray-700 rounded-lg focus:shadow-outline hover:bg-gray-800">Details</button>
            </a>
        </div>
        @endforeach
    </div>
</div>
@stop
