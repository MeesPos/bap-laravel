@extends('layouts.master')

@section('main')

<div class="w-full p-6 mx-auto bg-white">
    <h2 class="text-lg text-gray-700 font-semibold capitalize">Product Toevoegen</h2>
    @foreach($product as $row)
    <form action="{{ route('update_product', ['id' => $row['id']]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <div>
                <label class="text-gray-700" for="username">Product naam</label>
                <input id="username" type="text" placeholder="Naam van het product..." name="productName"
                    value="{{$row['productName']}}"
                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring @error('productName') is-invalid @enderror">
                <span>@error('productName')
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700" for="emailAddress">Product Merk</label>
                <input id="emailAddress" type="text" placeholder="Merk van het product..." name="productBrand"
                    value="{{$row['productBrand']}}"
                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring @error('productBrand') is-invalid @enderror">
                <span>@error('productBrand')
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700" for="password">Product Materiaal</label>
                <input id="password" type="text" placeholder="Materiaal van het product..." name="productMaterial"
                    value="{{$row['productMaterial']}}"
                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring @error('productMaterial') is-invalid @enderror">
                <span>@error('productMaterial')
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700" for="passwordConfirmation">Product Gender</label>
                <input id="passwordConfirmation" type="text" placeholder="Gender van het product..."
                    name="productGender" value="{{$row['productGender']}}"
                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring @error('productGender') is-invalid @enderror">
                <span>@error('productGender')
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700" for="productDesc">Product Beschrijving</label>
                <textarea id="productDesc" placeholder="Beschrijving van het product..." name="productDesc"
                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring @error('productDesc') is-invalid @enderror">{{$row['productDesc']}}</textarea>
                <span>@error($row['productDesc'])
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700" for="productPrice">Product Prijs</label>
                <input id="productPrice" type="text" placeholder="Prijs van het product..." name="productPrice"
                    value="{{$row['productPrice']}}"
                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring @error('productPrice') is-invalid @enderror">
                <span>@error('productPrice')
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700" for="filename">Product Afbeeldingen</label>
                <input type="file" name="filename[]" multiple
                    class="w-full mt-2 py-2 block rounded bg-white text-gray-800 @error('filename') is-invalid @enderror">
                <span>@error('filename[]')
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700">Zichtbaar?</label>
                <div class="mt-4 max-w-sm text-center flex flex-wrap">
                    <div class="flex items-center mr-4 mb-4">
                        <input id="radio1" type="radio" name="visible" class="hidden" value="1" @if($row['visible'] === 1) checked @endif />
                        <label for="radio1" class="flex items-center cursor-pointer">
                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                            Ja</label>
                    </div>

                    <div class="flex items-center mr-4 mb-4">
                        <input id="radio2" type="radio" name="visible" class="hidden" value="0" @if($row['visible'] === 0) checked @endif/>
                        <label for="radio2" class="flex items-center cursor-pointer">
                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                            Nee</label>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-gray-700">Afbeeldingen</h3>
                <div class="project-images">
                    @foreach($images as $image)
                    <div class="project-image">
                        <img src="{{asset('storage/' . $image['image'])}}">
                        <button type="button"
                            class="h-10 px-5 m-2 text-red-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800 w-36"><a
                                href="{{route('delete_image', ['id' => $image['id']])}}">Verwijderen</a></button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="flex mt-6">
            <button
                class="px-4 py-2 bg-gray-800 text-gray-200 rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700"
                type="submit">Product Wijzigen</button>
        </div>
        @endforeach
    </form>
</div>
@endsection
