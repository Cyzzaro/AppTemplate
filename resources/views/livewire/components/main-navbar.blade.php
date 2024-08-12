<!-- Navbar -->
<nav class="bg-white shadow-md p-4 flex justify-between items-center border-b border-gray-200 h-16">
    <div class="flex items-center">
        <!-- Mobile menu button -->
        <button class="text-gray-600 focus:outline-none lg:hidden">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
        <!-- Dashboard title -->
        <h1 class="text-xl font-semibold ml-4">
            {{ __('Dashboard') }}
        </h1>
    </div>

    <div class="flex items-center space-x-4">
        <!-- Notifications button -->
        <div class="relative">
            <button class="flex items-center text-gray-600 focus:outline-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
            </button>
            <!-- Notification dropdown -->
            <!-- Aquí podrías agregar el dropdown de notificaciones -->
        </div>

        <!-- User profile dropdown -->
        <div class="relative">
            <button class="flex items-center text-gray-600 focus:outline-none">
                <img src="{{ Avatar::create('César')->toBase64() }}" alt="User Avatar" class="w-10 h-10 rounded-full">
            </button>
            <!-- User dropdown -->
            <!-- Aquí podrías agregar el dropdown del usuario -->
        </div>
    </div>
</nav>
