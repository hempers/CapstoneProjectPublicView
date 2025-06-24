<!-- resources/views/cfidp-proposal.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CFIDP Proposal Requirements</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center px-4 py-4">
            <div class="flex items-center justify-center sm:justify-start w-full sm:w-auto mb-4 sm:mb-0">
                <img src="/images/PCAppTrack.png" alt="CFIDP Logo" class="h-10 sm:h-12">
            </div>
            
            <!-- Mobile menu button (hidden on larger screens) -->
            <div class="sm:hidden w-full flex justify-end mb-2">
                <button id="mobile-menu-button" class="text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Navigation -->
            <nav id="nav-links" class="hidden sm:flex flex-col sm:flex-row items-center w-full sm:w-auto space-y-3 sm:space-y-0">
                <a href="{{ url('/') }}" class="text-sm px-3 sm:px-5 py-2 hover:underline w-full sm:w-auto text-center"
                    style="color: {{ Request::is('/') ? '#09CA16' : 'inherit' }}; transition: color 0.1s;"
                    onmouseover="this.style.color='#09CA16'"
                    onmouseout="this.style.color='{{ Request::is('/') ? '#09CA16' : 'inherit' }}'">Home</a>
                <a href="{{ url('/track') }}" class="text-sm px-3 sm:px-5 py-2 hover:underline w-full sm:w-auto text-center"
                    style="color: {{ Request::is('track') ? '#09CA16' : 'inherit' }}; transition: color 0.1s;"
                    onmouseover="this.style.color='#09CA16'"
                    onmouseout="this.style.color='{{ Request::is('track') ? '#09CA16' : 'inherit' }}'">Track
                    Application</a>
                <a href="{{ url('/about') }}" class="text-sm px-3 sm:px-5 py-2 hover:underline w-full sm:w-auto text-center"
                    style="color: {{ Request::is('about') ? '#09CA16' : 'inherit' }}; transition: color 0.1s;"
                    onmouseover="this.style.color='#09CA16'"
                    onmouseout="this.style.color='{{ Request::is('about') ? '#09CA16' : 'inherit' }}'">About Us</a>
            </nav>
        </div>
    </header>
    
    <!-- Mobile menu toggle script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const navLinks = document.getElementById('nav-links');
            
            if (mobileMenuButton && navLinks) {
                mobileMenuButton.addEventListener('click', function() {
                    navLinks.classList.toggle('hidden');
                });
            }
        });
    </script>

    <!-- Hero Section -->
    <section class="bg-green-50 py-8">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <!-- Text Section (moved first for left-side position) -->
            <div class="text-sm w-full md:w-1/2 text-left md:pr-8 mb-6 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-extrabold text-green-900 mb-5 ml-16 mt-0">
                    Application <span style="color: #09CA16;">Tracking Monitoring</span> System
                </h1>
                <p class="text-sm text-justify mb-6 ml-16 mr-9 mt-2 ">
                    <span class="font-light text-gray-800">Ang <span class="font-bold">PCAppTrack</span> ay isang online
                        na sistema ng programang CFIDP sa ilalim ng PCA Region V na tumutulong sa
                        pagsubaybay ng mga aplikasyon sa ilalim ng CFIDP. Gamit ang reference ID, mas madaling masilip
                        ang status
                        ng aplikasyon — walang login na kailangan

                        <br> <br>Mabilis. Organisado. Para sa mga magsasakang Pilipino.</span>


                </p>
                <a href="#" class="inline-block text-white font-bold px-6 py-2 rounded ml-16"
                    style="background-color: #09CA16; transition: background-color 0.2s;"
                    onmouseover="this.style.backgroundColor='#079510'"
                    onmouseout="this.style.backgroundColor='#09CA16'">
                    Track Application
                </a>
            </div>

            <!-- Image Section (now second for right-side position) -->
            <div class="w-3/4 md:w-1/2  md:mt-0">
                <img src="/images/header.svg" alt="Application Tracking System" class="w-3/4 h-auto max-w-xl ml-20">
            </div>
        </div>
    </section>

    <!-- Tracking Form Section -->
    <section class="py-16 relative overflow-hidden" style="background-color: #f0ffe4;">
        <!-- Decorative leaf images for background -->
        <div class="absolute left-0 top-0 opacity-20">
            <img src="/images/leaf-left.png" alt="" class="h-48">
        </div>
        <div class="absolute right-0 bottom-0 opacity-20">
            <img src="/images/leaf-bottom" alt="" class="h-48">
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-4xl font-bold mb-3" style="color: #09CA16;">CocoTrack Application Tracking</h2>
            <p class="text-sm text-gray-600 mb-8 max-w-2xl mx-auto">
                Ilagay lamang ang iyong natatanging tracking number sa itinakdang field o pumunta
                sa seksyong 'Subaybayan ang Aking Panukala.'
            </p>

            <div class="flex max-w-md mx-auto">
                <input type="text" placeholder="Enter a Tracking Number"
                    class="flex-grow px-4 py-2 rounded-l border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500">
                <button type="submit" class="px-6 py-2 rounded-r text-white font-medium"
                    style="background-color: #09CA16;">
                    Track
                </button>
            </div>
        </div>
    </section>

    <!-- CFIDP Introduction -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-xl md:text-3xl font-bold text-green-900 mb-4 ml-5">ANO ANG <span
                class="text-green-200">CFIDP?</span></h2>
        <div class="flex flex-col md:flex-row items-center text-justify gap-8 ml-5 mr-5">
            <p class="flex-1">Ang Coconut Farmers and Industry Development Plan (CFIDP) 
                ay isang pangunahing programa ng pamahalaan sa ilalim ng 
                Republic Act No. 11524, na idinisenyo upang tugunan ang pangangailangan ng mga magniniyog at palaguin
                ang industriya ng niyog sa Pilipinas. Layunin ng CFIDP na 
                paunlarin ang kabuhayan ng 2.5 milyong magniniyog sa pamamagitan ng pagtaas ng kita, pagbibigay ng
                seguro sa pananim, at pag-aaral para sa kanilang mga anak.
                Kasama rin dito ang modernisasyon ng sektor sa tulong ng makabagong teknolohiya, pananaliksik, at
                sustainable farming practices tulad ng replanting ng mga puno at intercropping
                (hal. pagtatanim ng kape o cacao kasama ng niyog). Pinopondohan ang programang ito mula sa Coconut Levy
                Trust Fund</p>
            <img src="/images/header.svg" alt="CFIDP Group Photo" class="w-2/3 h-1/2 md:w-1/2">
        </div>
    </section>

    <!-- Requirements Section -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            <h3 class="text-xl md:text-2xl font-bold text-center text-green-600 mb-8">MGA KAILANGANG IHANDA: MGA
                DOKUMENTO PARA SA <span class="text-green-700">CFIDP PROPOSAL</span></h3>

            <!-- Card Example -->
            <div class="grid gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h4 class="text-lg font-bold text-green-700 mb-4">Social Protection</h4>
                    <ul class="list-disc list-inside space-y-1 text-sm">
                        <li>Training and Farm Schools (TESDA, DA-ATI)</li>
                        <li>Enrollment and NutriBun/Snack Choice</li>
                        <li>Medical and Crop Tree (one-time)</li>
                        <li>Documentary Requirements</li>
                        <li>Operational Sample Steps</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h4 class="text-lg font-bold text-green-700 mb-4">Integrated Coconut Processing and Downstream
                        Products</h4>
                    <ul class="list-disc list-inside space-y-1 text-sm">
                        <li>Shared Processing Facilities (PhilMech)</li>
                        <li>Loan for Eligible Recipients</li>
                        <li>Proposal Format</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h4 class="text-lg font-bold text-green-700 mb-4">Support Services</h4>
                    <ul class="list-disc list-inside space-y-1 text-sm">
                        <li>Credit (LDP, DDP)</li>
                        <li>Documentary Requirements</li>
                        <li>Infrastructure (DPWH)</li>
                        <li>Checklist and Other Forms</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-4 text-center">
        <p class="mb-4 text-lg font-semibold">IMPLEMENTING AGENCIES</p>
        <div class="flex justify-center flex-wrap gap-6">
            <img src="/path-to-logo1.png" alt="Agency Logo" class="h-10">
            <img src="/path-to-logo2.png" alt="Agency Logo" class="h-10">
            <img src="/path-to-logo3.png" alt="Agency Logo" class="h-10">
            <img src="/path-to-logo4.png" alt="Agency Logo" class="h-10">
            <img src="/path-to-logo5.png" alt="Agency Logo" class="h-10">
        </div>
    </div>
    <!-- Implementing Agencies -->
    <footer class="bg-green-600 text-white py-6 mt-12">
        <p class="mt-4 text-xs">&copy; CocoTrack All Rights Reserved</p>

    </footer>
</body>

</html>
</body>