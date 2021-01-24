@extends('layouts.master')

@section('main')
<section id="productBeheer" class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Hallo {{$user->name}}
            </h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-base">Welkom op de admin pagina, doe hier alles wat met de
                content te maken heeft op de website.</p>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="{{route('add_product')}}">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Product toevoegen</h2>
                        <p class="leading-relaxed text-base">Voeg een product toe aan de website.</p>
                    </div>
                </a>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="{{route('all_products')}}">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Alle Producten</h2>
                        <p class="leading-relaxed text-base">Zie alle producten op de website.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


@stop
