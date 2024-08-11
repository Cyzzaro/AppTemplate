<div>
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <a class="text-xl font-semibold text-gray-800" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <div class="flex items-center">
                <button class="text-gray-500 focus:outline-none lg:hidden" @click="open = !open">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <div :class="{ 'block': open, 'hidden': !open }" class="hidden lg:flex lg:items-center lg:space-x-4">
                    <!-- Left Side Of Navbar -->
                    <ul class="flex space-x-4">
                        <!-- Aquí puedes añadir elementos adicionales al navbar -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="flex space-x-4 ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="text-gray-800 hover:text-gray-600"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li>
                                    <a class="text-gray-800 hover:text-gray-600"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="relative" x-data="{ dropdownOpen: false }">
                                <button @click="dropdownOpen = !dropdownOpen"
                                    class="text-gray-800 hover:text-gray-600 focus:outline-none">
                                    {{ Auth::user()->name }}
                                    <svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                                    class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg py-1 z-20"
                                    x-cloak>
                                    <a class="block px-4 py-2 text-gray-800 hover:bg-gray-100" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
