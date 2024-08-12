<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ Avatar::create(config('app.name', 'Laravel'))->toBase64() }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.0.6/dist/cdn.min.js"></script>

</head>

<body class="bg-gray-100">

    <div class="flex h-screen">

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Content -->
            <main class="flex-1">
                @yield('content')
            </main>
        </div>
    </div>

    @livewireScripts
</body>

</html>
