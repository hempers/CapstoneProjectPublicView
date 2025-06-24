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
        <div class="container mx-auto flex justify-between items-center px-4 py-4">
            <img src="/images/PCAppTrack.png" alt="CFIDP Logo" class="h-10">
            <nav class="space-x-4">
                <a href="#" class="text-sm hover:underline" style="color: inherit; transition: color 0.1s;"
                    onmouseover="this.style.color='#09CA16'" onmouseout="this.style.color='inherit'">Home</a>
                <a href="#" class="text-sm hover:underline" style="color: inherit; transition: color 0.1s;"
                    onmouseover="this.style.color='#09CA16'" onmouseout="this.style.color='inherit'">Track
                    Application</a>
                <a href="#" class="text-sm hover:underline" style="color: inherit; transition: color 0.1s;"
                    onmouseover="this.style.color='#09CA16'" onmouseout="this.style.color='inherit'">About Us</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-green-50 py-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <!-- Text Section (moved first for left-side position) -->
            <div class="text-sm w-full md:w-1/2 text-left md:pr-8 mb-6 md:mb-0">
                <h1 class="text-2xl md:text-4xl font-extrabold text-green-900 mb-4 ml-5 mt-5">
                    Application <span style="color: #09CA16;">Tracking Monitoring</span> System
                </h1>
                <p class="text-sm mb-6 ml-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum nec
                    justo non lacinia. Duis finibus erat vel purus mattis, ac facilisis tortor porttitor.
                </p>
                <a href="#" class="inline-block text-white px-6 py-2 rounded ml-5" style="background-color: #09CA16; transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#079510'" onmouseout="this.style.backgroundColor='#09CA16'">
                    Track Application
                </a>
            </div>

            <!-- Image Section (now second for right-side position) -->
            <div class="w-full md:w-1/2 flex justify-center items-center" style="min-height: 300px;">
                <div class="relative w-2/3 h-full">
                    <img src="/images/header.svg" alt="Application Tracking System" class="object-contain w-3/4 h-3/4">
                </div>
            </div>
        </div>
    </section>


    <!-- CFIDP Introduction -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-xl md:text-3xl font-bold text-green-600 mb-4">ANO ANG CFIDP?</h2>
        <div class="flex flex-col md:flex-row items-center gap-8">
            <p class="flex-1">Ang Coconut Farmers and Industry Development Plan (CFIDP) ay isang long-term plan na
                ipinatupad ng pamahalaan upang mapabuti ang kabuhayan ng coconut farmers sa bansa sa pamamagitan ng
                iba't ibang interventions. Layunin nitong palakasin ang industriya ng niyog, mapaunlad ang kita ng mga
                magniniyog, at matiyak ang pangmatagalang sustainability.</p>
            <img src="/path-to-group-photo.jpg" alt="CFIDP Group Photo" class="w-full md:w-1/2 rounded shadow">
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