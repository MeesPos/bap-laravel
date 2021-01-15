@extends('layouts.master')

@section('main')
<section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
            @foreach($product as $row)
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                    src="{{asset('storage/' . $row->getFirstImage())}}">
                </a>
                {{dd($row)}}
                <div class="mt-4">
                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1 uppercase">{{$row['productBrand']}}</h3>
                    <h2 class="text-gray-900 title-font text-lg font-medium">{{$row['productName']}}</h2>
                    <p class="mt-1">&euro; {{$row['productPrice']}},-</p>
                    <p class="leading-relaxed text-base">{{Str::words($row['productDesc'], 20)}}</p>
                    <a href="{{route('details', ['id' => $row['id'], 'name' => strtolower(str_replace(' ', '-', $row['productName']))])}}">
                        <button
                            class="h-10 px-5 text-gray-100 transition-colors duration-150 bg-gray-700 rounded-lg focus:shadow-outline hover:bg-gray-800">Details</button>
                    </a>
                    <a href="#">
                        <button
                            class="h-10 px-5 m-2 text-green-100 transition-colors duration-150 bg-green-500 rounded-lg focus:shadow-outline hover:bg-green-600">In
                            Winkelwagen</button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination">
            {{$product->links()}}
        </div>
    </div>
</section>
@endsection
