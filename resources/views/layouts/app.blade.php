<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <!-- Heroicons -->
    <link rel="stylesheet" href="https://unpkg.com/heroicons@1.0.6/dist/heroicons.css">

    <!-- Scripts -->
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

    <div class="flex h-screen">

        @guest
        @else
            @livewire('components.mainsidebar')
        @endguest

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            @guest
            @else
                @livewire('components.mainnavbar')
            @endguest

            <!-- Content -->
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>

    @livewireScripts
</body>

</html>
