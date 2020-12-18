@extends('layouts.master')

@section('main')
<main class="profile-page">
    <section class="relative block" style="height: 500px;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
            style='background-image: url("https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80");'>
            <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="relative py-16 bg-gray-300">
        <div class="container mx-auto px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                <div class="px-6">
                    <div class="text-center mt-12">
                        <h3 class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
                            {{$user['name']}}
                        </h3>
                        <div class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase">
                            <i class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"></i>
                            @if($user['admin'] = true)
                            Admin
                            @else
                            Gebruiker
                            @endif
                        </div>
                        <div class="mb-2 text-gray-700 mt-10">
                            <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i>Gebruiker sinds:
                            {{$user['created_at']}}
                        </div>
                    </div>
                    <div class="mt-10 py-10 border-t border-gray-300">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <div class="max-w-4xl p-6 mx-auto bg-white rounded-md">
                                    <h2 class="text-lg text-gray-700 font-semibold capitalize">Profiel aanpassen</h2>
                                    <form method="POST" action="{{route('aanpassen', ['id' => $user['id']])}}">
                                        @csrf
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                                            <div>
                                                <label class="text-gray-700" for="username">Naam</label>
                                                <input id="username" type="text" value="{{$user['name']}}" name="name"
                                                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring">
                                            </div>

                                            <div>
                                                <label class="text-gray-700" for="emailAddress">Email Address</label>
                                                <input id="emailAddress" type="email" value="{{$user['email']}}" name="email"
                                                    class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring">
                                            </div>
                                        </div>

                                        <div class="flex justify-end mt-6">
                                            <button
                                                class="px-4 py-2 bg-gray-800 text-gray-200 rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Pas gegevens aan</button>
                                        </div>
                                        <p class="text-green-600">@if($message = Session::get('succes')) {{$message}} @endif </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
{{-- @endforeach --}}
@endsection
