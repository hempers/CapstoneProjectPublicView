<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'PCAppTrack Online Tracking' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cdefs%3E%3ClinearGradient id='bg' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%2387CEEB;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%234682B4;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3C!-- Sky background --%3E%3Ccircle cx='16' cy='16' r='15' fill='url(%23bg)' stroke='%23ffffff' stroke-width='1'/%3E%3C!-- Ground --%3E%3Cellipse cx='16' cy='28' rx='12' ry='4' fill='%2332CD32'/%3E%3C!-- Coconut tree trunk --%3E%3Cpath d='M15 28 Q15 20 16 12 Q17 20 17 28' fill='%23D2691E' stroke='%23A0522D' stroke-width='0.5'/%3E%3C!-- Palm fronds --%3E%3Cpath d='M16 12 Q12 8 8 10' stroke='%2332CD32' stroke-width='1.5' fill='none'/%3E%3Cpath d='M16 12 Q20 8 24 10' stroke='%2332CD32' stroke-width='1.5' fill='none'/%3E%3Cpath d='M16 12 Q14 6 12 4' stroke='%2332CD32' stroke-width='1.5' fill='none'/%3E%3Cpath d='M16 12 Q18 6 20 4' stroke='%2332CD32' stroke-width='1.5' fill='none'/%3E%3Cpath d='M16 12 Q16 6 16 3' stroke='%2332CD32' stroke-width='1.5' fill='none'/%3E%3C!-- Coconuts --%3E%3Ccircle cx='14' cy='14' r='1.5' fill='%23654321'/%3E%3Ccircle cx='18' cy='15' r='1.5' fill='%23654321'/%3E%3Ccircle cx='16' cy='16' r='1.5' fill='%23654321'/%3E%3C/svg%3E">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <style>
        body,
        html {
            font-family: 'Montserrat', sans-serif !important;
            scroll-behavior: smooth;
            margin: 0;
            padding: 0;
            overflow-x: hidden; 
        }

        /* Custom scrollbar - subtle and thin */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(34, 197, 94, 0.3);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(34, 197, 94, 0.5);
        }

        /* Firefox scrollbar */
        * {
            scrollbar-width: thin;
            scrollbar-color: rgba(34, 197, 94, 0.3) transparent;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional head content -->
    @stack('head')
</head>

<body class="bg-white text-gray-800 font-sans">
    <!-- Header -->
    <x-header />

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Additional scripts -->
    @stack('scripts')

    <!-- Footer -->
    <x-footer />
</body>

</html>