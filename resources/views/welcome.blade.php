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
        
        .nav-link.active {
            color: #09CA16 !important;
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
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Navigation -->
            <nav id="nav-links"
                class="hidden sm:flex flex-col sm:flex-row items-center w-full sm:w-auto space-y-3 sm:space-y-0">
                <a href="{{ url('/') }}" id="nav-home" class="nav-link text-sm px-3 sm:px-5 py-2 hover:underline w-full sm:w-auto text-center{{ Request::is('/') ? ' active' : '' }}"
                    style="transition: color 0.1s;">Home</a>
                <a href="#track-section" id="nav-track" class="nav-link text-sm px-3 sm:px-5 py-2 hover:underline w-full sm:w-auto text-center"
                    style="transition: color 0.1s;">Track
                    Application</a>
                <a href="{{ url('/about') }}" id="nav-about" class="nav-link text-sm px-3 sm:px-5 py-2 hover:underline w-full sm:w-auto text-center{{ Request::is('about') ? ' active' : '' }}"
                    style="transition: color 0.1s;">About Us</a>
            </nav>
        </div>
    </header>

    <!-- Mobile menu toggle script and smooth scroll -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const navLinks = document.getElementById('nav-links');

            if (mobileMenuButton && navLinks) {
                mobileMenuButton.addEventListener('click', function () {
                    navLinks.classList.toggle('hidden');
                });
            }
            
            // Handle navigation link active styles
            const navItems = document.querySelectorAll('.nav-link');
            
            // Apply initial active styling based on classes
            navItems.forEach(link => {
                if (link.classList.contains('active')) {
                    link.style.color = '#09CA16';
                } else {
                    link.style.color = 'inherit';
                }
                
                // Add hover and mouseout events
                link.addEventListener('mouseover', function() {
                    this.style.color = '#09CA16';
                });
                
                link.addEventListener('mouseout', function() {
                    if (this.classList.contains('active')) {
                        this.style.color = '#09CA16';
                    } else {
                        this.style.color = 'inherit';
                    }
                });
            });
            
            // Special handling for anchor links (like Track Application)
            const anchorLinks = document.querySelectorAll('a[href^="#"]');
            
            anchorLinks.forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    // Set all nav links to inactive
                    navItems.forEach(link => {
                        link.classList.remove('active');
                        link.style.color = 'inherit';
                    });
                    
                    // Set this link to active
                    this.classList.add('active');
                    this.style.color = '#09CA16';
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        // Close mobile menu if it's open
                        if (navLinks && !navLinks.classList.contains('hidden') && window.innerWidth < 640) {
                            navLinks.classList.add('hidden');
                        }
                        
                        // Scroll to the target with smooth behavior
                        window.scrollTo({
                            top: targetElement.offsetTop - 70, // Offset for header height
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Make Track Application link active when scrolled to that section
            const trackSection = document.getElementById('track-section');
            const trackNavLink = document.getElementById('nav-track');
            
            if (trackSection && trackNavLink) {
                window.addEventListener('scroll', function() {
                    const trackSectionTop = trackSection.getBoundingClientRect().top;
                    const trackSectionBottom = trackSection.getBoundingClientRect().bottom;
                    
                    // Check if track section is in viewport
                    if (trackSectionTop < window.innerHeight/2 && trackSectionBottom > 0) {
                        // Set all nav links to inactive
                        navItems.forEach(link => {
                            link.classList.remove('active');
                            link.style.color = 'inherit';
                        });
                        
                        // Set track link to active
                        trackNavLink.classList.add('active');
                        trackNavLink.style.color = '#09CA16';
                    } else if (window.scrollY < 100) {
                        // At the top of the page, activate the home link
                        navItems.forEach(link => {
                            link.classList.remove('active');
                            link.style.color = 'inherit';
                        });
                        
                        const homeLink = document.getElementById('nav-home');
                        if (homeLink && window.location.pathname === '/' || window.location.pathname === '') {
                            homeLink.classList.add('active');
                            homeLink.style.color = '#09CA16';
                        }
                    }
                });
            }
        });
    </script>

    <!-- Initialize active nav item on page load -->
    <script>
        // Run this after the page is fully loaded
        window.addEventListener('load', function() {
            // Set initial active state for navigation based on current URL
            const currentPath = window.location.pathname;
            const navItems = document.querySelectorAll('.nav-link');
            let activeNavFound = false;
            
            // Check if we have a hash in the URL (for anchor links)
            const currentHash = window.location.hash;
            
            navItems.forEach(link => {
                // For regular route links
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                    link.style.color = '#09CA16';
                    activeNavFound = true;
                }
                // For anchor links
                else if (currentHash && link.getAttribute('href') === currentHash) {
                    link.classList.add('active');
                    link.style.color = '#09CA16';
                    activeNavFound = true;
                }
            });
            
            // If no active link is found and we're on the home page, activate the home nav
            if (!activeNavFound && (currentPath === '/' || currentPath === '')) {
                const homeLink = document.getElementById('nav-home');
                if (homeLink) {
                    homeLink.classList.add('active');
                    homeLink.style.color = '#09CA16';
                }
            }
            
            // Set up click handler for hero Track Application button
            const trackBtn = document.querySelector('.track-btn');
            if (trackBtn) {
                trackBtn.addEventListener('click', function() {
                    // Set all nav links to inactive
                    navItems.forEach(link => {
                        link.classList.remove('active');
                        link.style.color = 'inherit';
                    });
                    
                    // Set track link to active
                    const trackNavLink = document.getElementById('nav-track');
                    if (trackNavLink) {
                        trackNavLink.classList.add('active');
                        trackNavLink.style.color = '#09CA16';
                    }
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
                <a href="#track-section" class="track-btn inline-block text-white font-bold px-6 py-2 rounded ml-16"
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
    <section id="track-section" class="py-16 relative overflow-hidden" style="background-color:rgb(230, 253, 212);">
        <!-- Decorative leaf images for background -->
        <div class="absolute left-0 top-0 opacity-20">
            <img src="/images/leaf-left.svg" alt="" class="h-100 mr-20">
        </div>
        <div class="absolute right-0 bottom-0 opacity-20">
            <img src="/images/leaf-right.svg" alt="" class="h-100">
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-4xl font-bold mb-3" style="color: #09CA16;">PCAppTrack Application Tracking</h2>
            <p class="text-sm text-gray-600 mb-8 max-w-2xl mx-auto">
                Ilagay lamang ang iyong natatanging tracking number sa itinakdang field o pumunta
                sa seksyong 'Subaybayan ang Aking Panukala.'
            </p>

            <div class="flex max-w-md mx-auto text-sm">
                <input type="text" placeholder="Ilagay ang iyong reference ID"
                    class="flex-grow px-4 py-2 rounded-l border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-xs placeholder:text-xs">
                <button type="submit" class="px-6 py-2 rounded-r text-white font-medium"
                    style="background-color: #09CA16;">
                    Track
                </button>
            </div>
        </div>
    </section>

    <!-- CFIDP Introduction -->
    <section class="container mx-auto px-10 py-20">
        <h2 class="text-xl md:text-3xl font-bold text-green-900 mb-1 ml-5">ANO ANG <span
                style="color: #09CA16;">CFIDP?</span></h2>
        <div class="flex flex-col md:flex-row items-center text-sm text-justify gap-9 ml-5 mr-4">
            <div class="flex-1">
                <p>Ang Coconut Farmers and Industry Development Plan (CFIDP) 
                    ay isang pangunahing programa ng pamahalaan sa ilalim ng 
                    Republic Act No. 11524, na idinisenyo upang tugunan ang pangangailangan ng mga magniniyog at palaguin
                    ang industriya ng niyog sa Pilipinas. Layunin ng CFIDP na 
                    paunlarin ang kabuhayan ng 2.5 milyong magniniyog sa pamamagitan ng pagtaas ng kita, pagbibigay ng
                    seguro sa pananim, at pag-aaral para sa kanilang mga anak.
                    Kasama rin dito ang modernisasyon ng sektor sa tulong ng makabagong teknolohiya, pananaliksik, at
                    sustainable farming practices tulad ng replanting ng mga puno at intercropping
                    (hal. pagtatanim ng kape o cacao kasama ng niyog). Pinopondohan ang programang ito mula sa Coconut Levy
                    Trust Fund.</p>
                <a href="https://ati2.da.gov.ph/ati-4b/content/sites/default/files/2022-12/faqs_coconut_farmers_and_industry_development_plan.pdf" 
                   target="_blank" 
                   class="inline-block mt-3 text-sm font-medium" 
                   style="color: #09CA16; transition: color 0.2s;" 
                   onmouseover="this.style.color='#079510'" 
                   onmouseout="this.style.color='#09CA16'">
                    Read more <span class="ml-1">→</span>
                </a>
            </div>
            <img src="/images/cfidpgp.png" alt="CFIDP Group Photo" class="w-3/5 h-auto md:w-2/5">
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