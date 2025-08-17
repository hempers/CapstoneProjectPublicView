@extends('layouts.public', ['title' => 'Ano Ang CFIDP?'])

@push('head')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'coconut-green': '#22C55E',
                        'coconut-green-dark': '#16A34A',
                        'coconut-yellow': '#FCD34D',
                        'coconut-blue': '#3B82F6',
                        'coconut-blue-dark': '#1E40AF'
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        body, html {
            font-family: 'Poppins', sans-serif !important;
            scroll-behavior: smooth;
        }
        
        .hero-bg {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.9) 0%, rgba(22, 163, 74, 0.9) 100%),
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="coconut" patternUnits="userSpaceOnUse" width="100" height="100"><circle cx="50" cy="50" r="30" fill="rgba(252,211,77,0.1)"/></pattern></defs><rect width="100%" height="100%" fill="url(%23coconut)"/></svg>');
            background-size: cover;
            background-position: center;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #22C55E 0%, #16A34A 100%);
            transition: all 0.3s ease;
        }
        
        /* Animation styles */
        section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        section.fade-in {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Delay animations in sequence */
        section:nth-child(2) {
            transition-delay: 0.1s;
        }
        
        section:nth-child(3) {
            transition-delay: 0.2s;
        }
        
        section:nth-child(4) {
            transition-delay: 0.3s;
        }
        
        section:nth-child(5) {
            transition-delay: 0.4s;
        }
        
        /* Custom styles for CFIDP page */
        .bg-coconut-brown {
            background-color: #8B4513;
        }
        
        .text-gradient {
            background: linear-gradient(90deg, #22C55E, #FCD34D);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .pulse-btn {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(34, 197, 94, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0);
            }
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #22C55E;
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #16A34A;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #16A34A 0%, #15803D 100%);
            transform: translateY(-1px);
        }
        
        .fade-in {
            animation: fadeIn 0.6s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
@endpush

@section('content')
<!-- Main Content Begin -->
<div class="bg-slate-50 text-slate-800 font-sans">

    <!-- Hero Section -->
    <section class="hero-bg py-24 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-20 left-10 w-20 h-20 rounded-full bg-white/10 animate-pulse"></div>
            <div class="absolute top-40 right-20 w-32 h-32 rounded-full bg-white/5 animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-20 left-1/4 w-16 h-16 rounded-full bg-white/10 animate-pulse" style="animation-delay: 1.5s;"></div>
        </div>
        
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between relative z-10">
            <!-- Text Section (left-side position) -->
            <div class="w-full md:w-1/2 text-left px-6 md:pr-12 mb-12 md:mb-0">
                <div class="inline-block py-1 px-3 rounded-full bg-white/20 text-white text-sm font-medium mb-4">
                    Republic Act 11524
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">
                    Coconut Farmers and <span class="text-coconut-yellow">Industry</span> Development Plan
                </h1>
                <div class="w-20 h-1.5 bg-coconut-yellow mb-6"></div>
                <p class="text-base lg:text-lg text-white/90 mb-8 leading-relaxed">
                    Ang CFIDP o Coconut Farmers and Industry Development Plan
                    ay isang komprehensibong <span class="font-bold">limang (5) taong plano</span> na binuo ng PCA para sa pag-unlad ng coconut industry 
                    at kabutihan ng mga magniniyog sa Pilipinas sa ilalim ng RA 11524 o "<span class="italic">Coconut Farmers and Industry Trust Fund Act</span>".
                    <br><br>
                    Nagbibigay ito ng suporta sa modernisasyon ng industriya at pagpapahusay ng pamumuhay ng mga magniniyog.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#programs" class="pulse-btn inline-flex items-center justify-center text-white font-bold px-8 py-3 rounded-lg shadow-lg bg-coconut-yellow hover:bg-yellow-400 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        Mga Programa
                    </a>
                    <a href="#faq-section" class="inline-flex items-center justify-center text-white font-bold px-8 py-3 rounded-lg border-2 border-white/30 hover:bg-white/10 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Alamin ang CFIDP
                    </a>
                </div>
            </div>

            <!-- Image Section (right-side position) -->
            <div class="w-full md:w-1/2 flex justify-center">
                <div class="relative">
                    <div class="absolute -inset-4 bg-white/20 rounded-full blur-xl"></div>
                    <img src="/images/img/coconut-farmers.svg" alt="Coconut Farmers" class="w-full h-auto max-w-lg relative z-10">
                </div>
            </div>
        </div>
        
        <!-- Wave SVG at bottom -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-16">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="#ffffff" opacity=".25"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" fill="#ffffff" opacity=".5"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="#ffffff"></path>
            </svg>
        </div>
    </section>

    <!-- CFIDP Programs Section -->
    <section id="programs" class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-4">
                    Mga <span style="color: #09ca59ff;">Programa sa Ilalim</span> ng CFIDP
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Alamin ang mga suportang mapapakinabangan ng mga magniniyog sa ilalim ng Republic Act 11524
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Social Protection -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                    <div class="h-2 bg-green-500"></div>
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                            <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Social Protection Program</h3>
                        <p class="text-gray-600 mb-3">Tulong-pinansyal para sa mga kuwalipikadong magniniyog, kasama ang life at accident insurance, cash grants, at social benefits.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Pension program para sa matatanda
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Cash grants at tulong medikal
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Farm Improvement -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                    <div class="h-2 bg-green-500"></div>
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                            <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Farm Improvement Program</h3>
                        <p class="text-gray-600 mb-3">Tulong para sa mga magniniyog upang mapahusay ang kanilang mga sakahan at mapataas ang kanilang ani.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Fertilizers at agricultural inputs
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Intercropping at livestock support
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Shared Facilities -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                    <div class="h-2 bg-green-500"></div>
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                            <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Shared Facilities Program</h3>
                        <p class="text-gray-600 mb-3">Pagtatayo ng mga pasilidad na makakatulong sa mga magniniyog sa processing at pagdaragdag ng halaga sa kanilang produkto.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Processing centers at makinang pangproseso
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Seed farms at nurseries para sa high-yielding varieties
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Scholarship -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                    <div class="h-2 bg-green-500"></div>
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                            <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Scholarship Program</h3>
                        <p class="text-gray-600 mb-3">Educational support para sa mga magniniyog at kanilang mga anak para sa kanilang pag-aaral at teknikal na pagsasanay.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Scholarships sa kolehiyo at graduate studies
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Technical at vocational training programs
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Health and Medical -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                    <div class="h-2 bg-green-500"></div>
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                            <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Health and Medical Program</h3>
                        <p class="text-gray-600 mb-3">Tulong medikal at health services para sa mga magniniyog at kanilang pamilya.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Medical assistance at health insurance
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Mobile clinics at health missions
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Credit and Insurance -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                    <div class="h-2 bg-green-500"></div>
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                            <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Credit and Insurance Program</h3>
                        <p class="text-gray-600 mb-3">Pagkakaloob ng credit facilities at crop insurance para sa mga magniniyog.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Low-interest loans para sa farm development
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Crop insurance at proteksyon sa mga kalamidad
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Learn More Button -->
            <div class="text-center mt-10">
                <a href="#faq-section" class="inline-block text-white font-bold px-6 py-3 rounded-md shadow-md hover:shadow-lg transition-all duration-300" style="background-color: #09ca59ff;">
                    Alamin Pa Ang Tungkol sa CFIDP
                </a>
            </div>
        </div>
    </section>

    <!-- Eligibility Section -->
    <section id="eligibility" class="py-16 bg-slate-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-4">
                        Sino ang <span style="color: #09ca59ff;">Makikinabang</span> sa CFIDP?
                    </h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Alamin kung kayo ay kwalipikado sa mga programa ng Coconut Farmers and Industry Development Plan
                    </p>
                </div>
                
                <div class="bg-white rounded-xl shadow-md p-8">
                    <div class="flex items-center mb-8 pb-4 border-b border-gray-200">
                        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-green-900">Mga Kuwalipikadong Benepisyaryo</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                        <div class="bg-green-50 rounded-lg p-6 border border-green-100">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0 mr-3">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-green-800">May-ari ng Lupain (Owner-Cultivator)</h4>
                            </div>
                            <p class="text-gray-700 ml-13">Mga magniniyog na nagmamay-ari ng lupang taniman ng niyog na hindi hihigit sa limang (5) ektarya at aktibong nagsasaka nito.</p>
                            
                            <div class="mt-4 ml-13">
                                <p class="text-sm text-gray-600 mb-2 font-semibold">Mga Dokumento:</p>
                                <ul class="text-sm text-gray-600 space-y-1 list-disc list-inside">
                                    <li>Land title o tax declaration</li>
                                    <li>Barangay certification bilang coconut farmer</li>
                                    <li>Valid ID</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="bg-green-50 rounded-lg p-6 border border-green-100">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0 mr-3">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-green-800">Nangungupahan (ARB/Lessee)</h4>
                            </div>
                            <p class="text-gray-700 ml-13">Mga nangungupahan ng lupang taniman ng niyog na hindi hihigit sa limang (5) ektarya, kabilang ang mga Agrarian Reform Beneficiary (ARB).</p>
                            
                            <div class="mt-4 ml-13">
                                <p class="text-sm text-gray-600 mb-2 font-semibold">Mga Dokumento:</p>
                                <ul class="text-sm text-gray-600 space-y-1 list-disc list-inside">
                                    <li>Kasunduan sa pagpapaupa o katibayan ng CLOA</li>
                                    <li>Barangay certification</li>
                                    <li>Pahintulot ng may-ari ng lupa (kung angkop)</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="bg-green-50 rounded-lg p-6 border border-green-100">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0 mr-3">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-green-800">Farm Worker</h4>
                            </div>
                            <p class="text-gray-700 ml-13">Mga manggagawa sa niyugan na ang pangunahing pinagkukunan ng kabuhayan ay ang paggawa sa mga sakahan ng niyog.</p>
                            
                            <div class="mt-4 ml-13">
                                <p class="text-sm text-gray-600 mb-2 font-semibold">Mga Dokumento:</p>
                                <ul class="text-sm text-gray-600 space-y-1 list-disc list-inside">
                                    <li>Certification mula sa coconut farm owner</li>
                                    <li>Barangay certification bilang coconut farm worker</li>
                                    <li>Valid ID</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="bg-green-50 rounded-lg p-6 border border-green-100">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0 mr-3">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-green-800">Katuwang sa Pagsasaka</h4>
                            </div>
                            <p class="text-gray-700 ml-13">Mga kasama o katulong na nagsasaka ng niyog na nakikipag-hatian sa may-ari o nangungupahan ng lupa sa ani o kita.</p>
                            
                            <div class="mt-4 ml-13">
                                <p class="text-sm text-gray-600 mb-2 font-semibold">Mga Dokumento:</p>
                                <ul class="text-sm text-gray-600 space-y-1 list-disc list-inside">
                                    <li>Kasunduan sa pagbabahagi ng ani o kita</li>
                                    <li>Barangay certification</li>
                                    <li>Pahintulot mula sa may-ari ng lupa</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-amber-50 p-6 rounded-xl border border-amber-200">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Mahalagang Paalala:</h4>
                                <p class="text-gray-700">Lahat ng benepisyaryo ay kailangang nakalista sa <strong>National Coconut Farmers Registry System (NCFRS)</strong> ng Philippine Coconut Authority. Ang NCFRS ay isang database ng mga kuwalipikadong magniniyog sa buong bansa.</p>
                                <p class="text-gray-700 mt-2">Kung hindi pa kayo nakarehistro, mangyaring bumisita sa pinakamalapit na PCA Office sa inyong lugar upang magparehistro.</p>
                                <div class="mt-4">
                                    <a href="#registration" class="text-green-600 font-medium hover:text-green-800 transition-colors inline-flex items-center">
                                        Alamin kung paano magparehistro
                                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Process -->
    <section id="registration" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-4">
                    Paano <span style="color: #09ca59ff;">Mag-register</span> sa NCFRS?
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Sundin ang mga hakbang na ito para maging registered coconut farmer at mapakinabangan ang mga programa ng CFIDP
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto">
                <div class="bg-white rounded-xl shadow-md p-8 mb-12">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Step 1 -->
                        <div class="bg-green-50 rounded-xl p-6 text-center relative">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mx-auto border-4 border-white shadow-md">
                                    <span class="text-xl font-bold text-white">1</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-green-900 mb-4 mt-6">Ihanda ang mga Dokumento</h3>
                            <div class="text-gray-700 text-left">
                                <ul class="space-y-2 list-disc list-inside">
                                    <li>Valid ID (Voter's ID, Passport, atbp.)</li>
                                    <li>Patunay ng pag-aari ng lupa o kasunduan (para sa nangungupahan)</li>
                                    <li>Certification mula sa Barangay</li>
                                    <li>2x2 ID Picture (2 kopya)</li>
                                </ul>
                                <div class="mt-4 text-center">
                                    <a href="#" class="text-sm text-green-600 hover:underline">Download ng Form</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="bg-green-50 rounded-xl p-6 text-center relative">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mx-auto border-4 border-white shadow-md">
                                    <span class="text-xl font-bold text-white">2</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-green-900 mb-4 mt-6">Bumisita sa PCA Office</h3>
                            <div class="text-gray-700 text-left">
                                <p class="mb-4">Pumunta sa pinakamalapit na Philippine Coconut Authority (PCA) office sa inyong lugar:</p>
                                <ol class="list-decimal list-inside space-y-2">
                                    <li>Isumite ang mga kinakailangang dokumento</li>
                                    <li>Punan ang NCFRS Registration Form</li>
                                    <li>Sasailalim sa interview ng PCA officer</li>
                                </ol>
                                <div class="mt-4 text-center">
                                    <a href="#" class="text-sm text-green-600 hover:underline">Hanapin ang PCA Office</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Step 3 -->
                        <div class="bg-green-50 rounded-xl p-6 text-center relative">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mx-auto border-4 border-white shadow-md">
                                    <span class="text-xl font-bold text-white">3</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-green-900 mb-4 mt-6">Makakuha ng NCFRS ID</h3>
                            <div class="text-gray-700 text-left">
                                <p class="mb-4">Pagkatapos ng verification process:</p>
                                <ul class="space-y-2 list-disc list-inside">
                                    <li>Makakakuha ng NCFRS ID Card</li>
                                    <li>Makakatanggap ng impormasyon tungkol sa mga available na programa</li>
                                    <li>Magagamit ang ID sa pag-apply para sa mga benepisyo sa ilalim ng CFIDP</li>
                                </ul>
                                <div class="mt-4 text-center">
                                    <a href="#faq-section" class="text-sm text-green-600 hover:underline">Mga Tanong sa Registration</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-10 p-6 bg-amber-50 rounded-lg border border-amber-200">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-amber-500 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h4 class="text-md font-semibold text-gray-800">Mahahalagang Impormasyon:</h4>
                                <p class="text-sm text-gray-700 mt-1">Ang registration sa NCFRS ay libre at walang bayad. Ang NCFRS ID ay kinakailangan bago maka-apply sa mga programa ng CFIDP. Siguraduhin na dalhin ang lahat ng kinakailangang dokumento para maiwasan ang pagkaantala.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <a href="#faq-section" class="inline-block text-white font-bold px-6 py-3 rounded-md shadow-md transition-all" style="background-color: #09ca59ff;">
                        Makipag-ugnayan Para sa Tulong sa Registration
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section id="faq-section" class="py-16 relative overflow-hidden" style="background-color:rgb(230, 253, 212);">
        <!-- Decorative leaf images for background -->
        <div class="absolute left-0 top-0 opacity-20">
            <img src="/images/img/leaf-left.svg" alt="left leaf" class="h-100 mr-20">
        </div>
        <div class="absolute right-0 bottom-0 opacity-20">
            <img src="/images/img/leaf-right.svg" alt="right leaf" class="h-100">
        </div>

        <div class="container mx-auto px-4 text-center relative z-10 max-w-5xl">
            <div class="flex flex-col items-center justify-center text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-6">
                    Mga Madalas na Tanong <span style="color: #09ca59ff;">Tungkol sa </span> CFIDP
                </h2>
                <p class="text-sm text-gray-600 mb-8 max-w-2xl mx-auto px-4">
                    Narito ang mga madalas na tanong tungkol sa Coconut Farmers and Industry Development Plan.
                </p>
            </div>
            
            <div class="space-y-4 text-left bg-white p-8 rounded-xl shadow-md">
                <!-- FAQ 1 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">1. Ano ang CFIDP?</span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="px-6 py-4 text-gray-600 bg-green-50/50">
                        <p>Ang CFIDP o Coconut Farmers and Industry Development Plan ay isang komprehensibong limang (5) taong plano na binuo ng Philippine Coconut Authority (PCA) para sa pag-unlad ng industriya ng niyog at pagsasaayos ng pamumuhay ng mga magniniyog sa ilalim ng RA 11524 o "Coconut Farmers and Industry Trust Fund Act".</p>
                    </div>
                </div>
                
                <!-- FAQ 2 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">2. Ano ang nilalaman ng RA 11524?</span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Ang RA 11524 o "Coconut Farmers and Industry Trust Fund (CFITF) Act" ay nagtatatag ng Coconut Farmers and Industry Trust Fund (CFITF) mula sa coco levy funds. Inaatasan nito ang PCA na bumuo ng CFIDP para mapakinabangan ng mga magniniyog ang pondo at mapaunlad ang industriya ng niyog sa Pilipinas.</p>
                    </div>
                </div>
                
                <!-- FAQ 3 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">3. Sino ang makikinabang sa CFIDP?</span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Ang mga makikinabang sa programa ay ang mga coconut farmers, farm workers, at owners ng mga lupang sakahan ng niyog na:</p>
                        <ul class="list-disc list-inside mt-2 ml-4 space-y-1">
                            <li>Nakalista sa National Coconut Farmers Registry System (NCFRS)</li>
                            <li>May sakahang hindi lalampas sa 5 ektarya</li>
                            <li>Naninirahan o nagsasaka sa barangay na sakop ng programa</li>
                        </ul>
                    </div>
                </div>
                
                <!-- FAQ 4 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">4. Anu-ano ang mga programa sa ilalim ng CFIDP?</span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Ang mga pangunahing programa sa ilalim ng CFIDP ay ang mga sumusunod:</p>
                        <ul class="list-disc list-inside mt-2 ml-4 space-y-1">
                            <li>Social Protection Program para sa mga magniniyog at kanilang pamilya</li>
                            <li>Farm Improvement through Farm Inputs Program</li>
                            <li>Shared Facilities Program</li>
                            <li>Scholarship Program para sa mga magniniyog at kanilang anak</li>
                            <li>Health and Medical Program</li>
                            <li>Credit and Insurance Support Program</li>
                            <li>Infrastructure Development Program</li>
                            <li>Research and Development Programs</li>
                        </ul>
                    </div>
                </div>
                
                <!-- FAQ 5 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">5. Paano ako makakapag-apply para sa mga benepisyo?</span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Sundin ang mga hakbang na ito:</p>
                        <ol class="list-decimal list-inside mt-2 ml-4 space-y-1">
                            <li>Magparehistro sa NCFRS sa pinakamalapit na PCA Office</li>
                            <li>Ihanda ang mga kinakailangang dokumento:
                                <ul class="list-disc list-inside ml-4 mt-1">
                                    <li>Valid ID</li>
                                    <li>Proof of land ownership o kasunduan sa pag-upa (para sa tenant)</li>
                                    <li>Certification mula sa Barangay</li>
                                </ul>
                            </li>
                            <li>Makipag-ugnayan sa PCA Office para sa tamang aplikasyon process batay sa programa.</li>
                        </ol>
                    </div>
                </div>
                
                <!-- FAQ 6 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">6. Magkano ang pondo para sa CFIDP?</span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Ang CFIDP ay pinondohan ng Coconut Farmers and Industry Trust Fund (CFITF) na humigit-kumulang P75 bilyon. Ito ay gagamitin sa loob ng 50 taon para sa mga programa at proyektong nakakapagpabuti sa kabuhayan ng mga magniniyog at pag-unlad ng industriya ng niyog.</p>
                    </div>
                </div>
                
                <!-- FAQ 7 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">7. Sino ang namamahala sa CFIDP?</span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Ang Philippine Coconut Authority (PCA) ang pangunahing ahensya na namamahala sa pagpapatupad ng CFIDP. Subalit, ang Trust Fund Management Committee (TFMC) ang responsible para sa pangangasiwa ng Coconut Farmers and Industry Trust Fund (CFITF).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16" style="background-color: #09ca59ff;">
        <div class="container mx-auto px-4">
            <div class="text-center text-white mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Kailangan pa ng Karagdagang Impormasyon?
                </h2>
                <p class="text-xl text-white/90 max-w-2xl mx-auto">
                    Makipag-ugnayan sa Philippine Coconut Authority (PCA) para sa mga tanong tungkol sa CFIDP at paano mapakinabangan ang mga programa nito
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-colors">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-white text-center">PCA Hotline</h3>
                    <div class="text-center">
                        <p class="text-white/90 text-lg font-semibold">+63 (02) 8928-4501</p>
                        <p class="text-white/80 text-sm mt-1">Lunes - Biyernes: 8:00 AM - 5:00 PM</p>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="tel:+6328928450" class="inline-block px-4 py-2 rounded-full bg-white/20 hover:bg-white/30 text-white text-sm transition-colors">
                            Tumawag Ngayon
                        </a>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-colors">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-white text-center">PCA Regional Offices</h3>
                    <div class="text-center">
                        <p class="text-white/90">May 15 PCA Regional Offices sa buong bansa</p>
                        <p class="text-white/80 text-sm mt-1">PCA Region V - Legaspi City</p>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="#" class="inline-block px-4 py-2 rounded-full bg-white/20 hover:bg-white/30 text-white text-sm transition-colors">
                            Hanapin ang Pinakamalapit
                        </a>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/20 transition-colors">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-white text-center">Email</h3>
                    <div class="text-center">
                        <p class="text-white/90 text-lg font-semibold">pca.cfidp@pca.gov.ph</p>
                        <p class="text-white/80 text-sm mt-1">24-48 oras ang response time</p>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="mailto:pca.cfidp@pca.gov.ph" class="inline-block px-4 py-2 rounded-full bg-white/20 hover:bg-white/30 text-white text-sm transition-colors">
                            Mag-email Ngayon
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="max-w-5xl mx-auto mt-12 p-6 bg-white/10 backdrop-blur-sm rounded-xl border border-white/20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-4">Nais Magtanong?</h3>
                        <p class="text-white/80 mb-6">Maaari kayong direktang bumisita sa aming opisina para sa mas detalyadong impormasyon tungkol sa CFIDP at iba pang programa ng PCA.</p>
                        <div class="space-y-2">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-white/70 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-white/90">Elliptical Road, Diliman, Quezon City</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-white/70 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <span class="text-white/90">+63 (02) 8928-4501 to 09</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-white/70 mr-2 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                <span class="text-white/90">pca.cfidp@pca.gov.ph</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img src="/images/IA logos/pca-logo.png" alt="PCA Logo" class="h-32">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-coconut-brown">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Handa Ka Na Bang Makibahagi sa CFIDP?</h2>
                <p class="text-xl text-white/90 mb-8">
                    Ikaw ba ay isang coconut farmer o stakeholder? Oras na para makiisa sa pagbabago ng industriya ng niyog sa Pilipinas!
                </p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#registration" class="px-8 py-3 bg-coconut-green hover:bg-green-600 text-white font-semibold rounded-lg shadow-lg transition-colors duration-300 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                        Mag-register Ngayon
                    </a>
                    <a href="#contact" class="px-8 py-3 bg-white/20 hover:bg-white/30 text-white font-semibold rounded-lg shadow-lg transition-colors duration-300 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Kumunsulta sa Eksperto
                    </a>
                </div>
                <p class="mt-8 text-white/70 text-sm">
                    Mahalaga ang iyong partisipasyon sa pagpapaunlad ng industriya ng niyog sa Pilipinas. Sama-sama tayo sa CFIDP!
                </p>
            </div>
        </div>
    </section>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        // Highlight the section when scrolled to
                        const allSections = document.querySelectorAll('section');
                        allSections.forEach(section => section.classList.remove('highlight-section'));
                        
                        // Add highlight class
                        setTimeout(() => {
                            target.classList.add('highlight-section');
                            setTimeout(() => {
                                target.classList.remove('highlight-section');
                            }, 1000);
                        }, 500);
                        
                        // Smooth scroll
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // FAQ toggle functionality with enhanced animation
            document.querySelectorAll('#faq-section button').forEach(button => {
                button.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('svg');
                    
                    // Hide all other content first with animation
                    document.querySelectorAll('#faq-section .bg-green-50/50').forEach(item => {
                        if(item !== content) {
                            if (!item.classList.contains('hidden')) {
                                // Animate height to zero before hiding
                                const currentHeight = item.scrollHeight;
                                item.style.height = currentHeight + 'px';
                                item.style.overflow = 'hidden';
                                item.style.transition = 'height 0.3s ease';
                                
                                // Trigger reflow
                                item.offsetHeight;
                                
                                // Collapse
                                item.style.height = '0px';
                                
                                // Hide after animation
                                setTimeout(() => {
                                    item.classList.add('hidden');
                                    item.style.height = '';
                                    item.style.overflow = '';
                                }, 300);
                            }
                            
                            // Rotate icon
                            const parentButton = item.previousElementSibling;
                            if (parentButton && parentButton.querySelector('svg')) {
                                parentButton.querySelector('svg').style.transform = 'rotate(0deg)';
                                parentButton.querySelector('svg').style.transition = 'transform 0.3s ease';
                            }
                        }
                    });
                    
                    // Toggle current content with animation
                    if (content.classList.contains('hidden')) {
                        // Show element but with height 0
                        content.classList.remove('hidden');
                        content.style.height = '0px';
                        content.style.overflow = 'hidden';
                        content.style.transition = 'height 0.3s ease';
                        
                        // Trigger reflow
                        content.offsetHeight;
                        
                        // Expand to full height
                        const targetHeight = content.scrollHeight;
                        content.style.height = targetHeight + 'px';
                        
                        // Clean up after animation
                        setTimeout(() => {
                            content.style.height = '';
                            content.style.overflow = '';
                        }, 300);
                        
                        // Rotate icon
                        icon.style.transform = 'rotate(180deg)';
                        icon.style.transition = 'transform 0.3s ease';
                    } else {
                        // Animate height to zero before hiding
                        const currentHeight = content.scrollHeight;
                        content.style.height = currentHeight + 'px';
                        content.style.overflow = 'hidden';
                        content.style.transition = 'height 0.3s ease';
                        
                        // Trigger reflow
                        content.offsetHeight;
                        
                        // Collapse
                        content.style.height = '0px';
                        
                        // Hide after animation
                        setTimeout(() => {
                            content.classList.add('hidden');
                            content.style.height = '';
                            content.style.overflow = '';
                        }, 300);
                        
                        // Rotate icon back
                        icon.style.transform = 'rotate(0deg)';
                    }
                });
            });

            // Enhanced fade-in animation on scroll
            const observerOptions = {
                threshold: 0.15,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Staggered animation for child elements
                        entry.target.classList.add('fade-in');
                        
                        // Find cards or list items to animate sequentially
                        const animatableChildren = entry.target.querySelectorAll('.card-hover, .grid > div, li');
                        if (animatableChildren.length > 0) {
                            animatableChildren.forEach((child, index) => {
                                setTimeout(() => {
                                    child.classList.add('fade-in');
                                    child.style.opacity = '1';
                                    child.style.transform = 'translateY(0)';
                                }, 100 * index);
                            });
                        }
                    }
                });
            }, observerOptions);

            // Apply initial styles to animatable elements
            document.querySelectorAll('.card-hover, .grid > div, li').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            });

            // Observe all sections
            document.querySelectorAll('section').forEach(section => {
                observer.observe(section);
            });
            
            // Add active state to navigation links when scrolling
            const navLinks = document.querySelectorAll('a[href^="#"]');
            const sections = document.querySelectorAll('section[id]');
            
            window.addEventListener('scroll', () => {
                let current = '';
                const scrollPosition = window.scrollY + 100;
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    
                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        current = '#' + section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active-nav');
                    if (link.getAttribute('href') === current) {
                        link.classList.add('active-nav');
                    }
                });
            });
        });
    </script>
    
    <style>
        /* Additional dynamic styles */
        .highlight-section {
            animation: highlight-pulse 1s ease;
        }
        
        @keyframes highlight-pulse {
            0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
            50% { box-shadow: 0 0 20px 10px rgba(34, 197, 94, 0.4); }
            100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
        }
        
        .active-nav {
            color: #22C55E !important;
            font-weight: bold;
        }
    </style>
@endpush

@endsection

