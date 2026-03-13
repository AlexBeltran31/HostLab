<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'HostLab') }}</title>
    <meta name="description" content="{{ __('landing.meta_description') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

    <nav class="fixed top-0 right-0 z-50 p-4">
        @include('landing.components.language-switcher')
    </nav>

    {{-- Flash message --}}
    @if (session('success'))
        <div class="fixed top-16 left-1/2 -translate-x-1/2 z-50 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg whitespace-nowrap">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</body>
</html>