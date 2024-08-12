<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ Avatar::create(config('app.name', 'Laravel'))->toBase64() }}">

    <!-- Meta Tags for SEO -->
    <meta name="description" content="{{ env('APP_DESCRIPTION') }}">
    <meta name="image" content="{{ env('APP_URL') }}">

    <!-- Schema.org Metadata for Google -->
    <meta itemprop="name" content="{{ config('app.name', 'Laravel') }}">
    <meta itemprop="description" content="{{ env('APP_DESCRIPTION') }}">
    <meta itemprop="image" content="{{ env('APP_URL') }}">

    <!-- Open Graph Metadata for Social Media (Facebook, Pinterest & LinkedIn) -->
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}">
    <meta property="og:description" content="{{ env('APP_DESCRIPTION') }}">
    <meta property="og:image"
        content="https://www.igroupsolution.net/wp-content/uploads/2024/06/Mapa-fondo-Inicio.png?id=9778">
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="website">

    <!-- Twitter Metadata -->
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="{{ config('app.name', 'Laravel') }}">
    <meta property="twitter:description" content="{{ env('APP_DESCRIPTION') }}">
    <meta property="twitter:image:src"
        content="https://www.igroupsolution.net/wp-content/uploads/2024/06/Mapa-fondo-Inicio.png?id=9778">


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

        @livewire('components.main-sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Content -->
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>

    @livewireScripts
</body>

</html>
