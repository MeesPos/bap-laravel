@extends('layouts.master')

@section('header')
<div class="md:flex">
    <div class="flex items-center justify-center px-6 py-8 md:h-128 w-full md:w-1/2">
        <div class="max-w-xl">
            <h2 class="text-2xl font-semibold text-gray-800 md:text-3xl">Build Your New <span
                    class="text-indigo-600">Idea</span></h2>

            <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi, quibusdam rem
                tempora voluptates.</p>

            <div class="flex mt-6">
                <a href="#"
                    class="px-3 py-2 block bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800">Get
                    Started</a>
                <a href="#"
                    class="mx-4 px-3 py-2 block bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400">Learn
                    More</a>
            </div>
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
<section id="producten">
    <div id="newproducts">
        <h2>Nieuwe producten</h2>
        <div class="pakettenCarousel">
            <div class="owl-carousel owl-paketten owl-theme">

            </div>
        </div>
    </div>
</section>
@show

@if (session('error'))
<div class="alert alert-success error-admin">
    <div class="flex max-w-sm w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="flex justify-center items-center w-12 bg-red-500">
            <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
            </svg>
        </div>

        <div class="-mx-3 py-2 px-4">
            <div class="mx-3">
                <span class="text-red-500 font-semibold">Er is een fout opgetreden!</span>
                <p class="text-gray-600 text-sm">{{ session('error') }}</p>
            </div>
        </div>
    </div>
</div>
@endif
