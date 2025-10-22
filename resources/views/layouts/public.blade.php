<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Google Search Console Verification (replace with your actual verification code) -->
    <!-- SEO Meta Tags -->
    <title>{{ $title ?? 'PCAppTrack - Application Tracking System ng PCA Region V | Track CFIDP Applications' }}</title>
    <meta name="description" content="{{ $description ?? 'PCAppTrack ay online application tracking system ng CFIDP sa PCA Region V. Track ang status ng inyong CFIDP application gamit ang Application ID - walang login na kailangan.' }}">
    <meta name="keywords" content="{{ $keywords ?? 'PCAppTrack, PCA Region V, CFIDP tracking, coconut farmers, application status, Philippine Coconut Authority, CFIDP programs, magniniyog, coconut industry Philippines' }}">
    <meta name="author" content="PCA Region V - Philippine Coconut Authority">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $ogTitle ?? $title ?? 'PCAppTrack - Application Tracking System ng PCA Region V' }}">
    <meta property="og:description" content="{{ $ogDescription ?? $description ?? 'Track ang status ng inyong CFIDP application sa PCA Region V. Mabilis, simple, at walang login na kailangan.' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/img/front.svg') }}">
    <meta property="og:site_name" content="PCAppTrack">
    <meta property="og:locale" content="tl_PH">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $twitterTitle ?? $title ?? 'PCAppTrack - Application Tracking System ng PCA Region V' }}">
    <meta name="twitter:description" content="{{ $twitterDescription ?? $description ?? 'Track ang status ng inyong CFIDP application sa PCA Region V. Mabilis, simple, at walang login na kailangan.' }}">
    <meta name="twitter:image" content="{{ $twitterImage ?? asset('images/img/front.svg') }}">

    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#09ca59ff">
    <meta name="msapplication-TileColor" content="#09ca59ff">
    <meta name="application-name" content="PCAppTrack">
    <meta name="apple-mobile-web-app-title" content="PCAppTrack">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <!-- Structured Data for Organization -->
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'GovernmentOrganization',
            'name' => 'Philippine Coconut Authority Region V',
            'alternateName' => 'PCA Region V',
            'url' => config('app.url'),
            'logo' => asset('images/img/front.svg'),
            'description' => 'PCAppTrack ay online application tracking system ng CFIDP sa ilalim ng PCA Region V para sa pagsubaybay ng mga application sa rehiyon.',
            'areaServed' => [
                '@type' => 'Place',
                'name' => 'Bicol Region, Philippines'
            ],
            'serviceType' => 'Government Application Tracking Service',
            'sameAs' => [
                'https://pca.gov.ph'
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <!-- Structured Data for Website -->
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => 'PCAppTrack',
            'url' => config('app.url'),
            'description' => 'Application Tracking System ng CFIDP sa PCA Region V',
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => [
                    '@type' => 'EntryPoint',
                    'urlTemplate' => config('app.url') . '/?application_id={search_term_string}'
                ],
                'query-input' => 'required name=search_term_string'
            ],
            'publisher' => [
                '@type' => 'GovernmentOrganization',
                'name' => 'Philippine Coconut Authority Region V'
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <!-- Favicon -->
  
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

    <style>
        /* Add padding to account for fixed header */
        main {
            padding-top: 60px;
            /* Adjust based on header height */
        }

        @media (min-width: 640px) {
            main {
                padding-top: 68px;
            }
        }

        @media (min-width: 768px) {
            main {
                padding-top: 76px;
            }
        }

        @media (min-width: 1024px) {
            main {
                padding-top: 84px;
            }
        }
    </style>
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