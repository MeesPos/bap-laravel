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
                        <input type="text"
                            class="w-32 lg:w-48 py-1 px-3 leading-tight text-sm text-gray-700 bg-gray-100 rounded-md placeholder-gray-500 border border-transparent focus:outline-none focus:bg-white focus:shadow-outline focus:border-blue-400"
                            placeholder="Zoeken..." aria-label="Zoeken...">
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
                        <!-- Dropdown toggle button -->
                        <button class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
                            <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                            <a href="#"
                                class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                your profile
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                Your projects
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                Help
                            </a>
                            <a href="#"
                                class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                Settings
                            </a>
                            <a href="{{ route('logout') }}"
                                class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}>
                                Uitloggen
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @endguest
                </div>

                <div class="flex justify-center md:block">
                    <a class="relative text-gray-700 hover:text-gray-600" href="#">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="absolute top-0 left-0 rounded-full bg-indigo-500 text-white p-1 text-xs"></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>


