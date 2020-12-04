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

@show
