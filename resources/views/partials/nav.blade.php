<header class="bg-white">
    <nav class="shadow">
        <div class="container mx-auto px-6 py-3 md:flex md:justify-between md:items-center">
            <div class="flex justify-between items-center">
                <div>
                    <a class="text-gray-800 text-xl font-bold md:text-2xl hover:text-gray-700"
                        href="{{route('home')}}">Designia</a>
                </div>

                <div class="flex md:hidden">
                    <button type="button"
                        class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                        aria-label="toggle menu" id="toggle">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="md:flex items-center" id="nav-menu" style="display: inherit">
                <div class="flex flex-col md:flex-row md:mx-6">
                    <div class="mx-10 hidden md:block">
                        <form action="/search" method="GET" role="search">
                            {{ csrf_field() }}
                            <input type="text"
                                class="w-32 lg:w-48 py-1 px-3 leading-tight text-sm text-gray-700 bg-gray-100 rounded-md placeholder-gray-500 border border-transparent focus:outline-none focus:bg-white focus:shadow-outline focus:border-blue-400"
                                placeholder="Zoeken..." aria-label="Zoeken..." name="q">
                                <input type="submit" style="position: absolute; left: -9999px"/>
                        </form>
                    </div>
                    <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0 py-1"
                        href="{{route('home')}}">Home</a>
                    @guest
                    @if (Route::has('login'))
                    <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0 py-1"
                        href="{{ route('login') }}">{{ __('Inloggen') }}</a>
                    @endif
                    @if (Route::has('register'))
                    <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0 py-1"
                        href="{{ route('register') }}">{{ __('Registreren') }}</a>
                    @endif
                    @else
                    <div class="relative">
                        <button class="relative z-10 block rounded-md bg-white p-2 focus:outline-none" id="dropdown-toggle">
                            <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20" id="dropdown-menu" style="display: none">
                            <a href="{{route('profiel')}}"
                                class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                Profiel
                            </a>
                            <a href="{{ route('logout') }}"
                                class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Uitloggen') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
