@extends('layouts.master')

@section('header')
@foreach($product as $row)
<section class="text-gray-700 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$row['productBrand']}}</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{$row['productName']}}</h1>
                <div class="flex mb-4">
                    <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Beschrijving</a>
                </div>
                <p class="leading-relaxed mb-4">{{$row['productDesc']}}</p>
                <div class="flex border-t border-gray-300 py-2">
                    <span class="text-gray-500">Materiaal</span>
                    <span class="ml-auto text-gray-900">{{$row['productMaterial']}}</span>
                </div>
                <div class="flex border-t border-gray-300 py-2">
                    <span class="text-gray-500">Gender</span>
                    <span class="ml-auto text-gray-900">{{$row['productGender']}}</span>
                </div>
                <div class="flex">
                    <span class="title-font font-medium text-2xl text-gray-900">&euro; {{$row['productPrice']}},-</span>
                    <button
                        class="flex ml-auto text-white border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded bg-green-500">In Winkelwagen</button>
                </div>
            </div>
            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
            @foreach ($images as $image)
            src="{{asset('storage/' . $image['image'])}}">
            @endforeach
        </div>
    </div>
</section>
@endforeach
@endsection
