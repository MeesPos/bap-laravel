@extends('layouts.master')

@section('main')
<div>
    <table class="min-w-full table-auto">
        <thead class="justify-between">
            <tr class="bg-gray-800 text-left">
                <th class="px-16 py-2">
                    <span class="text-gray-300">Product</span>
                </th>
                <th class="px-16 py-2">
                    <span class="text-gray-300">Gemaakt Op</span>
                </th>
                <th class="px-16 py-2">
                    <span class="text-gray-300">Laatste wijziging</span>
                </th>

                <th class="px-16 py-2">
                    <span class="text-gray-300">Verwijderen</span>
                </th>

                <th class="px-16 py-2">
                    <span class="text-gray-300">Bewerken</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-gray-200">
            @foreach($products as $product)
            <tr class="bg-white border-4 border-gray-200">
                <td>
                    <span class="text-center ml-2">{{$product['productName']}}</span>
                </td>
                <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold">{{$product['created_at']}}</span>
                </td>
                <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold">{{$product['updated_at']}}</span>
                </td>
                <td class="px-16 py-2">
                    <a href="{{route('delete_product', ['id' => $product['id']])}}" class="text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </a>
                </td>
                <td class="px-16 py-2">
                    <a class="text-green-500" href="{{route('change_product', ['id' => $product['id']])}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
