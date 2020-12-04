@extends('layouts.master')

@section('main')

<div class="w-full p-6 mx-auto bg-white">
    <h2 class="text-lg text-gray-700 font-semibold capitalize">Product Toevoegen</h2>

    <form action="{{ route('insert_product') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <div>
                <label class="text-gray-700" for="username">Product naam</label>
                <input id="username" type="text" placeholder="Naam van het product..." name="productTitle"
                    value="{{ old('productTitle') }}"
                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring @error('productTitle') is-invalid @enderror">
                <span>@error('productTitle')
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700" for="emailAddress">Product Merk</label>
                <input id="emailAddress" type="email" placeholder="Merk van het product..." name="productMerk"
                    value="{{ old('productMerk') }}"
                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring @error('productMerk') is-invalid @enderror">
                <span>@error('productMerk')
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700" for="password">Product Materiaal</label>
                <input id="password" type="text" placeholder="Materiaal van het product..." name="productMateriaal"
                    value="{{ old('productMateriaal') }}"
                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring @error('productMateriaal') is-invalid @enderror">
                <span>@error('productMateriaal')
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700" for="passwordConfirmation">Product Gender</label>
                <input id="passwordConfirmation" type="text" placeholder="Gender van het product..."
                    name="productGender" value="{{ old('productGender') }}"
                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring @error('productTitle') is-invalid @enderror">
                <span>@error('productGender')
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700" for="productDesc">Product Beschrijving</label>
                <textarea id="productDesc" placeholder="Beschrijving van het product..." name="productDescription"
                    value="{{ old('productDesc') }}"
                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring @error('productTitle') is-invalid @enderror"
                    ></textarea>
                <span>@error('productDesc')
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700" for="productPrice">Product Prijs</label>
                <input id="productPrice" type="text" placeholder="Prijs van het product..." name="productPrijs"
                    value="{{ old('productPrijs') }}"
                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring @error('productTitle') is-invalid @enderror">
                <span>@error('productPrijs')
                    <p style="color: red">{{ $message }}</p>
                    @enderror</span>
            </div>

            <div>
                <label class="text-gray-700" for="productPrice">Product Afbeeldingen</label>
                <input type="file" name="filename[]" class="w-full mt-2 py-2 block rounded bg-white text-gray-800 @error('filename') is-invalid @enderror">
            </div>
        </div>

        <div class="flex mt-6">
            <button
                class="px-4 py-2 bg-gray-800 text-gray-200 rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700"
                type="submit">Product Toevoegen</button>
        </div>
    </form>
</div>
@endsection
