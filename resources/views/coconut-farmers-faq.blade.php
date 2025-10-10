@extends('layouts.public', ['title' => 'Ano Ang CFIDP?'])

@push('head')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
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
        body,
        html {
            font-family: 'Poppins', sans-serif !important;
            scroll-behavior: smooth;
        }



        .card-hover {
            transition: all 0.3s ease;
        }

        .float-element {
            animation: floating 3s ease-in-out infinite;
        }

        .float-element-slow {
            animation: floating 4s ease-in-out infinite;
        }

        .float-element-slower {
            animation: floating 5s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .pulse-btn {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .pulse-btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(-100%);
            transition: transform 0.5s ease;
        }

        .pulse-btn:hover:before {
            transform: translateX(0);
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
    </style>
@endpush

@section('content')
    <!-- Main Content Begin -->
    <div class="bg-slate-50 text-slate-800 font-sans">

        <!-- Back to Programs Floating Button -->
        <div id="back-to-programs-btn"
            class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 lg:bottom-8 lg:right-8 z-50 opacity-0 transition-all duration-300 pointer-events-none">
            <a href="#programs"
                class="flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 lg:w-12 lg:h-12 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:scale-110 group"
                style="background-color: #09ca59ff;">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 transform group-hover:-translate-y-1 transition-transform duration-300"
                    viewBox="0 0 24 24" fill="none">
                    <path d="M12 4L12 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18 10L12 4L6 10" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
        </div>

        <!-- Hero Section -->
        <section class="bg-green-50 py-12 relative overflow-hidden">
            <!-- Animated background elements -->
            <div class="absolute inset-0 z-0">
                <div class="absolute top-20 left-10 w-20 h-20 rounded-full bg-white/10 float-element"></div>
                <div class="absolute top-40 right-20 w-32 h-32 rounded-full bg-white/5 float-element-slow"></div>
                <div class="absolute bottom-20 left-1/4 w-16 h-16 rounded-full bg-white/10 float-element-slower"></div>
                <div class="absolute top-32 left-1/3 w-24 h-24 rounded-full bg-white/5 float-element"></div>
                <div class="absolute bottom-40 right-1/4 w-28 h-28 rounded-full bg-white/10 float-element-slow"></div>
                <div class="absolute top-3/4 right-10 w-12 h-12 rounded-full bg-white/10 float-element-slower"></div>
            </div>

            <div class="container mx-auto px-8 flex flex-col items-center justify-center text-center relative z-10">
                <!-- Content Section (centered) -->
                <div class="w-full max-w-4xl mb-12">
                    <div class="inline-block py-1 px-3 rounded-full bg-green-500 text-white text-sm font-medium mb-4">
                        Republic Act 11524
                    </div>
                    <h1
                        class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-green-900 mb-6 leading-tight text-center">
                        Coconut Farmers and<br>
                        <span style="color: #09ca59ff;">Industry Development</span> Plan
                    </h1>
                    <div class="w-20 h-1.5 bg-green-900 mx-auto mb-6"></div>
                    <p class="text-base lg:text-lg text-green-900 mb-2 leading-relaxed text-left px-2">
                        Itinakda ng <span class="font-bold"> Batas Republika Blg. 11524</span> o <span
                            class="font-bold">"Coconut Farmers and Industry
                            Trust Fund (CFITF) Act"</span>ang pagkakaroon ng Coconut Farmers and Industry Development Plan
                        (CFIDP), na pinirmahan ni dating
                        Pangulong Rodrigo Duterte.
                        <br><br>
                        Layunin nitong gawing mas competitive ang mga magniniyog at mapaunlad ang industriya sa pamamagitan
                        ng rehabilitasyon at modernisasyon. Binibigyang-diin ng plano ang pagpapalakas sa kakayahan ng mga
                        magniniyog para sa katarungang panlipunan.
                </div>
            </div>
        </section>

        <!-- CFIDP Programs Section -->
        <section id="programs" class="py-16 sm:py-20 bg-gradient-to-br from-green-50 via-white to-green-50">
            <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="text-center mb-12">
                    <div class="inline-block">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-green-900 mb-2">
                            Mga <span style="color: #09ca59ff;">Programa sa Ilalim</span> ng PCA-CFIDP
                        </h2>
                        <p class="text-sm md:text-base text-gray-600 mt-2 font-normal">
                            Alamin ang mga suportang mapapakinabangan ng mga magniniyog sa ilalim ng Republic Act 11524
                        </p>
                        <div class="mt-4 h-1 bg-gradient-to-r from-transparent via-green-500 to-transparent rounded-full">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 max-w-6xl mx-auto">
                    <!-- Social Protection -->
                    <div
                        class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Social Protection Program</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">Isang programa na nagsusulong ng seguridad
                                at
                                tulong para sa mga magsasaka at kanilang pamilya laban sa mga panganib tulad ng kalamidad,
                                kahirapan, at iba pang suliraning panlipunan.</p>
                            <div
                                class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl px-4 py-3 mb-4">
                                <p class="text-xs text-gray-700"><span class="font-semibold">Implementing Agencies:</span>
                                    <span class="text-green-700">PCA, PCIC, CHED, ATI and TESDA</span>
                                </p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Health and Medical Program
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Crop Insurance
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Scholarships
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Trainings/Farm Schools
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Farm Improvement -->
                    <div
                        class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Farmers Organization and Development</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">Pagbuo at pagpapalakas ng mga samahan ng
                                mga
                                magsasaka upang mapahusay ang kanilang kakayahan, kooperasyon, at pag-unlad sa sektor ng
                                agrikultura.</p>
                            <div
                                class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl px-4 py-3 mb-4">
                                <p class="text-xs text-gray-700"><span class="font-semibold">Implementing Agency:</span>
                                    <span class="text-green-700">CDA</span>
                                </p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Farmers Cooperatives Development
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Farmers Association Development
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Hybridization -->
                    <div
                        class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Hybridization</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">Proseso ng pagpapalitan ng pollen mula sa
                                iba't ibang uri ng halaman upang makabuo ng mga hybrid na puno ng niyog na may mas mataas na
                                ani at kalidad.</p>
                            <div
                                class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl px-4 py-3 mb-4">
                                <p class="text-xs text-gray-700"><span class="font-semibold">Implementing Agencies:</span>
                                    <span class="text-green-700">PCA, PCAARRD-DOST</span>
                                </p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Hybridization
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Hybridization Research
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Community-Based Farm Enterprise -->
                    <div
                        class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Community-Based Farm Enterprise and Development
                                </h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">Pagsasaayos at pagpapaunlad ng mga sakahan
                                sa
                                pamamagitan ng pagkilos ng komunidad upang mapataas ang produksiyon at mapagaan ang pasanin
                                ng mga magsasaka.</p>
                            <div
                                class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl px-4 py-3 mb-4">
                                <p class="text-xs text-gray-700"><span class="font-semibold">Implementing Agencies:</span>
                                    <span class="text-green-700">HCVDP, NDA, BAI</span>
                                </p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Coconut-based Farming System/Diversification
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Integrated Coconut Processing -->
                    <div
                        class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Integrated Coconut Processing and Downstream
                                    Products</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">Pagsasama-sama ng iba't ibang proseso ng
                                pagpoproseso ng niyog para makagawa ng mga produktong may mataas na halaga at dagdag na kita
                                para sa mga magsasaka.</p>
                            <div
                                class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl px-4 py-3 mb-4">
                                <p class="text-xs text-gray-700"><span class="font-semibold">Implementing Agencies:</span>
                                    <span class="text-green-700">PhilMech</span>
                                </p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Shared Processing Facilities
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Support Services -->
                    <div
                        class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Support Services</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">Pagbibigay ng teknikal, pinansyal, at iba
                                pang tulong upang masuportahan ang mga gawain at proyekto ng mga magsasaka sa produksyon at
                                pamamahagi.</p>
                            <div
                                class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl px-4 py-3 mb-4">
                                <p class="text-xs text-gray-700"><span class="font-semibold">Implementing Agencies:</span>
                                    <span class="text-green-700">DBP/LBP, DPWH</span>
                                </p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Credit Programs
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Marketing and Assistance, Research and Market Promotion
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Infrastructure
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Innovative Researches -->
                    <div
                        class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Innovative Researches & Its Practical
                                    Application on Production & Distribution</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">Pagsasagawa ng makabagong pananaliksik at
                                paggamit nito sa aktwal na produksyon at pamamahagi upang mapabuti ang sektoral na kahusayan
                                at kita.</p>
                            <div
                                class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl px-4 py-3 mb-4">
                                <p class="text-xs text-gray-700"><span class="font-semibold">Implementing Agencies:</span>
                                    <span class="text-green-700">PCA, DOST</span>
                                </p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Policies and Regulations
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Research Coordination, Collaboration, Integration and Utilization thru GAA funding of
                                    PCA, SCUs and DOST
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Program Management -->
                    <div
                        class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Program Management, Coordination and M&E</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">Organisadong pamamahala, koordinasyon, at
                                pagsusuri upang matiyak ang epektibo at maayos na pagpapatupad ng mga programa at proyekto
                                ng PCA-CFIDP.</p>
                            <div
                                class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl px-4 py-3 mb-4">
                                <p class="text-xs text-gray-700"><span class="font-semibold">Implementing Agencies:</span>
                                    <span class="text-green-700">PCA, DOST</span>
                                </p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-600 mr-2 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Creation of Office
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Eligibility Section -->
        <section id="eligibility" class="py-16 sm:py-20 bg-gradient-to-br from-green-50 via-white to-green-50">
            <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header Section -->
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-green-900 mb-2">
                        Sino ang <span style="color: #09ca59ff;">Makikinabang</span> sa CFIDP?
                    </h2>
                    <p class="text-sm md:text-base text-gray-600 mt-2 font-normal">
                        Alamin kung kayo ay kwalipikado sa mga programa ng Coconut Farmers and Industry Development Plan
                    </p>
                    <div class="mt-4 h-1 bg-gradient-to-r from-transparent via-green-500 to-transparent rounded-full"></div>
                </div>

                <!-- Eligibility Content -->
                <div class="max-w-5xl mx-auto">
                    <!-- Main Content Container -->
                    <div class="bg-white rounded-xl shadow-lg p-8 md:p-10">
                        <!-- Legal Reference -->
                        <div class="mb-8 p-5 border border-gray-200 rounded-lg bg-gray-50">
                            <p class="text-sm md:text-base text-gray-700 leading-relaxed">
                                <strong class="text-gray-900">Republic Act 11524:</strong> Ang mga makikinabang sa batas na
                                ito ay mga "coconut
                                farmers" o magniniyog na may lupa na hindi hihigit sa limang (5) ektarya.
                            </p>
                        </div>

                        <!-- Definition -->
                        <div class="mb-8">
                            <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-6">Ang "Coconut Farmer" o Magniniyog
                                ay:</h3>

                            <ol class="space-y-6">
                                <li class="flex items-start">
                                    <span
                                        class="flex-shrink-0 w-8 h-8 bg-gray-100 border border-gray-300 rounded-full flex items-center justify-center font-semibold text-gray-700 text-sm mr-4">1</span>
                                    <div>
                                        <p class="text-base font-semibold text-gray-900 mb-2">Nagmamay-ari ng lupain/niyugan
                                            na hindi
                                            hihigit sa limang (5) ektarya na:</p>
                                        <ul class="ml-4 space-y-1 text-sm text-gray-700">
                                            <li>• Nag-lilinang ng kanyang lupa (owner-cultivator); o</li>
                                            <li>• May kontrol o namamahala ng lupa</li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="flex items-start">
                                    <span
                                        class="flex-shrink-0 w-8 h-8 bg-gray-100 border border-gray-300 rounded-full flex items-center justify-center font-semibold text-gray-700 text-sm mr-4">2</span>
                                    <p class="text-sm md:text-base text-gray-700 leading-relaxed">Nangungupahan ng hindi
                                        hihigit sa limang (5) ektaryang niyugan
                                        upang mag-linang</p>
                                </li>

                                <li class="flex items-start">
                                    <span
                                        class="flex-shrink-0 w-8 h-8 bg-gray-100 border border-gray-300 rounded-full flex items-center justify-center font-semibold text-gray-700 text-sm mr-4">3</span>
                                    <p class="text-sm md:text-base text-gray-700 leading-relaxed">Manggagawa sa niyugan
                                        (seasonal o itinerant) na ang pangunahing
                                        kabuhayan ay pag-sasaka ng niyog at pag-proproseso ng kopra</p>
                                </li>
                            </ol>
                        </div>

                        <!-- Registration Notice -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-5">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Kailangan ng Rehistrasyon:</h4>
                            <p class="text-sm md:text-base text-gray-700 mb-3 leading-relaxed">
                                Lahat ng benepisyaryo ay kailangang nakalista sa <strong class="text-gray-900">National
                                    Coconut Farmers Registry
                                    System (NCFRS)</strong> ng Philippine Coconut Authority.
                            </p>
                            <p class="text-sm text-gray-600">
                                Hindi pa nakarehistro? <a href="#registration" class="font-semibold underline"
                                    style="color: #09ca59ff;">Mag-register dito →</a>
                            </p>
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
                        Paano <span style="color: #09ca59ff;">Mag-Register</span> sa NCFRS?
                    </h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Sundin ang mga hakbang na ito para maging registered coconut farmer at mapakinabangan ang mga
                        programa ng CFIDP
                    </p>
                </div>

                <div class="max-w-8xl mx-auto">
                    <!-- Introduction to Registration Methods -->
                    <div class="bg-white rounded-xl shadow-md p-8 mb-8">
                        <h3 class="text-2xl font-bold text-green-900 mb-6 text-center">Iba't ibang paraan ng pagrehistrong
                            NCFRS</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                            <!-- Option A -->
                            <div class="bg-green-50 rounded-lg p-5 border border-green-200">
                                <div class="flex items-center mb-3">
                                    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-xl font-bold text-white">A</span>
                                    </div>
                                    <h4 class="text-lg font-bold text-green-800">Mass Registration</h4>
                                </div>
                                <p class="text-gray-700 text-sm">Sa nakatakdang iskedyul sa inyong mga barangay o
                                    munisipalidad</p>
                            </div>

                            <!-- Option B -->
                            <div class="bg-green-50 rounded-lg p-5 border border-green-200">
                                <div class="flex items-center mb-3">
                                    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-xl font-bold text-white">B</span>
                                    </div>
                                    <h4 class="text-lg font-bold text-green-800">Walk-in Registration</h4>
                                </div>
                                <p class="text-gray-700 text-sm">Sa PCA regional/provincial office at sa mga authorized
                                    partners (i.e. LGUs)</p>
                            </div>

                            <!-- Option C -->
                            <div class="bg-green-50 rounded-lg p-5 border border-green-200">
                                <div class="flex items-center mb-3">
                                    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-xl font-bold text-white">C</span>
                                    </div>
                                    <h4 class="text-lg font-bold text-green-800">Form Download</h4>
                                </div>
                                <p class="text-gray-700 text-sm">I-download ang form sa: <a
                                        href="https://bit.ly/ncrscocolevyy" class="text-green-600 hover:underline"
                                        target="_blank">bit.ly/ncrscocolevyy</a></p>
                            </div>

                            <!-- Option D -->
                            <div class="bg-green-50 rounded-lg p-5 border border-green-200">
                                <div class="flex items-center mb-3">
                                    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-xl font-bold text-white">D</span>
                                    </div>
                                    <h4 class="text-lg font-bold text-green-800">Online Registration</h4>
                                </div>
                                <p class="text-gray-700 text-sm">Sa link na ito: <a href="https://bit.ly/ncrscocolevyy"
                                        class="text-green-600 hover:underline" target="_blank">bit.ly/ncrscocolevyy</a></p>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-green-900 mb-4">Ano ang NCFRS?</h3>
                            <p class="text-gray-700 mb-4">Ang National Coconut Farmers Registry System o NCFRS ay opisyal na
                                talaan ng pamahalaan upang mabigyaan ng pagkakakilanlan ang mga magniniyog na Pilipino. Ito
                                ang magiging batayan para sa pagtanggap ng mga benepisyo mula sa CFIDP.</p>
                        </div>

                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-green-900 mb-4">Mga Kailangang Dokumento</h3>
                            <div class="bg-green-50 p-5 rounded-lg">
                                <ol class="space-y-3">
                                    <li class="flex items-center">
                                        <div
                                            class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center mr-3">
                                            <span class="text-sm font-bold text-white">1</span>
                                        </div>
                                        <span class="text-gray-700">Latest 2x2 ID picture</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div
                                            class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center mr-3">
                                            <span class="text-sm font-bold text-white">2</span>
                                        </div>
                                        <span class="text-gray-700">Kopya ng government-issued ID</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div
                                            class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center mr-3">
                                            <span class="text-sm font-bold text-white">3</span>
                                        </div>
                                        <span class="text-gray-700">Kopya ng titulo ng lupa o kasunduan ng renta sa may-ari
                                            ng lupa - o anumang legal na dokumentong patunay sa pagmamay-ari ng lupa</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Registration Methods -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                        <!-- Online/Download Registration -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="bg-green-600 py-3 px-6">
                                <h3 class="text-xl font-bold text-white">Online Registration/Form Download</h3>
                            </div>
                            <div class="p-6">
                                <ol class="space-y-6">
                                    <li class="flex">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                            <span class="text-lg font-bold text-green-800">01</span>
                                        </div>
                                        <div>
                                            <p class="text-gray-800 font-medium">I-download ang NCFRS form: <a
                                                    href="https://bit.ly/ncrscocolevyy"
                                                    class="text-green-600 hover:underline"
                                                    target="_blank">bit.ly/ncrscocolevyy</a></p>
                                        </div>
                                    </li>
                                    <li class="flex">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                            <span class="text-lg font-bold text-green-800">02</span>
                                        </div>
                                        <div>
                                            <p class="text-gray-800 font-medium">Sagutan ang NCFRS Form at ihanda ang iba
                                                pang dokumento</p>
                                        </div>
                                    </li>
                                    <li class="flex">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                            <span class="text-lg font-bold text-green-800">03</span>
                                        </div>
                                        <div>
                                            <p class="text-gray-800 font-medium">I-scan o kuhaan ng picture ang mga
                                                dokumento at i-send sa email: <a href="mailto:ncfrs@pca.gov.ph"
                                                    class="text-green-600 hover:underline">ncfrs@pca.gov.ph</a> (para sa
                                                form download) o i-attach sa online form</p>
                                        </div>
                                    </li>
                                    <li class="flex">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                            <span class="text-lg font-bold text-green-800">04</span>
                                        </div>
                                        <div>
                                            <p class="text-gray-800 font-medium">Maari ring dalhin o ipasa sa pinakamalapit
                                                na PCA Office (para sa form download) o pindutin ang Submit Button (para sa
                                                online)</p>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <!-- Walk-in Registration -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="bg-green-600 py-3 px-6">
                                <h3 class="text-xl font-bold text-white">Walk-in Registration</h3>
                            </div>
                            <div class="p-6">
                                <ol class="space-y-6">
                                    <li class="flex">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                            <span class="text-lg font-bold text-green-800">01</span>
                                        </div>
                                        <div>
                                            <p class="text-gray-800 font-medium">Kumuha ng NCFRS Form (kung pen & paper) o
                                                umupo sa available na computer (kung computer-aided)</p>
                                        </div>
                                    </li>
                                    <li class="flex">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                            <span class="text-lg font-bold text-green-800">02</span>
                                        </div>
                                        <div>
                                            <p class="text-gray-800 font-medium">Sagutan ang NCFRS Form.</p>
                                        </div>
                                    </li>
                                    <li class="flex">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                            <span class="text-lg font-bold text-green-800">03</span>
                                        </div>
                                        <div>
                                            <p class="text-gray-800 font-medium">Kung computer aided, kuhaan ng picture ang
                                                mga dokumento na dala at i-attach sa online form</p>
                                        </div>
                                    </li>
                                    <li class="flex">
                                        <div
                                            class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                            <span class="text-lg font-bold text-green-800">04</span>
                                        </div>
                                        <div>
                                            <p class="text-gray-800 font-medium">Kung pen & paper, ibigay ang nasagutang
                                                form kasama ang mga dokumentong kailangan sa PCA Authorized representative
                                            </p>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Registration Information -->
                    <div class="bg-white rounded-xl shadow-md p-8 mb-12">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                            <!-- Who can register -->
                            <div>
                                <h3 class="text-xl font-bold text-green-900 mb-4">Sino ang pwedeng magparehistrong NCFRS?
                                </h3>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-center">
                                        <div class="w-1.5 h-1.5 rounded-full bg-green-600 mr-2"></div>
                                        <span>Farmowner</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="w-1.5 h-1.5 rounded-full bg-green-600 mr-2"></div>
                                        <span>Owner-Tiller</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="w-1.5 h-1.5 rounded-full bg-green-600 mr-2"></div>
                                        <span>Grower</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="w-1.5 h-1.5 rounded-full bg-green-600 mr-2"></div>
                                        <span>Tenant/Tenant-worker</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="w-1.5 h-1.5 rounded-full bg-green-600 mr-2"></div>
                                        <span>Farm worker/Laborer</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Benefits -->
                            <div>
                                <h3 class="text-xl font-bold text-green-900 mb-4">Ano ang benepisyo ng pagrehistrong NCFRS?
                                </h3>
                                <div class="mb-4">
                                    <p class="text-gray-700 font-medium mb-2">A. Para sa nagmamay-ari ng hindi lalampas sa 5
                                        ektarya na lupa, tenant, tiller, grower, tenant, o farm worker:</p>
                                    <ol class="ml-6 list-decimal text-gray-700 space-y-2">
                                        <li>Makakuha ng mga benepisyo na nakasaad sa RA 11524, o Coconut Farmers and
                                            Industry Trust Fund Act</li>
                                        <li>Makalahok sa pagpili ng magiging farmer-representatives sa PCA Board</li>
                                    </ol>
                                </div>
                                <div>
                                    <p class="text-gray-700 font-medium mb-2">B. Para sa nagmamay-ari ng lupa na higit sa 5
                                        ektarya:</p>
                                    <p class="text-gray-700 ml-6">Upang makasali sa iba pang programa ng pamahalaan</p>
                                </div>
                            </div>
                        </div>

                        <!-- How to check registration -->
                        <div class="mt-8">
                            <h3 class="text-xl font-bold text-green-900 mb-4">Kumpirmasyon ng rehistrong NCFRS</h3>
                            <div class="bg-green-50 p-5 rounded-lg">
                                <ul class="space-y-3 text-gray-700">
                                    <li><strong>Para sa pen-and-paper registration:</strong> Makakatatanggap ka ng text
                                        message na naglalaman ng iyong reference number.</li>
                                    <li><strong>Para sa online registration:</strong> Makakatatanggap ka ng email
                                        notification na naglalaman ng iyong reference number sa email address na iyong
                                        inilagay sa form.</li>
                                    <li><strong class="text-green-800">PAALALA:</strong> Itago ang reference/control number
                                        upang magamit sa anumang transaksyon sa PCA o sa pag-update ng iyong impormasyon sa
                                        NCFRS.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Important Notes -->
                    <div class="mt-10 p-6 bg-amber-50 rounded-lg border border-amber-200">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-amber-500 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h4 class="text-sm lg:text-base font-semibold text-gray-800 mt-1.5 mb-2">Mahalagang
                                    Impormasyon:</h4>
                                <ul class="space-y-2 list-disc list-inside">
                                    <li>Libre ang pagpaparehistro sa NCFRS</li>
                                    <li>Ang pag-update ng listahan ay ginagawa kada taon</li>
                                    <li>Maaaring magtungo sa alinmang PCA Offices sa inyong lugar</li>
                                    <li>Para sa iba pang impormasyon, makipag-ugnayan sa PCA regional o provincial office sa
                                        inyong lugar, o i-message ang kanilang Facebook page</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    <!-- Scroll to Programs Button -->
    <div id="scroll-to-programs-btn"
        class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 lg:bottom-8 lg:right-8 z-50 opacity-0 transition-all duration-300 ease-in-out pointer-events-none">
        <button
            class="flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 lg:w-12 lg:h-12 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 group"
            style="background-color: #09ca59ff;">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 transform group-hover:-translate-y-1 transition-transform duration-300" viewBox="0 0 24 24"
                fill="none">
                <path d="M12 4L12 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M18 10L12 4L6 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span
                class="absolute -top-12 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                Tingnan ang mga Programa
            </span>
        </button>
    </div>

    <!-- FAQs Section -->
    <section id="faq-section" class="py-16 sm:py-20 bg-gradient-to-br from-green-50 via-white to-green-50">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <div class="inline-block">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-green-900 mb-2">
                        Mga Madalas na Katanungan <span style="color: #09ca59ff;">Tungkol sa</span> CFIDP
                    </h2>
                    <p class="text-sm md:text-base text-gray-600 mt-2 font-normal">
                        Narito ang mga madalas na tanong tungkol sa Coconut Farmers and Industry Development Plan
                    </p>
                    <div class="mt-4 h-1 bg-gradient-to-r from-transparent via-green-500 to-transparent rounded-full">
                    </div>
                </div>
            </div>

            <!-- FAQ Content -->
            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
                    <div class="space-y-4">
                        <!-- FAQ 1 -->
                        <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                            <button id="faq-button-1"
                                class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-start hover:bg-green-50 transition-colors min-h-[60px]">
                                <span class="font-semibold text-slate-800 pr-4 flex-1 leading-relaxed">1. Ano ang Coconut
                                    Farmers and Industry Development Plan (CFIDP)?</span>
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7">
                                    </path>
                                </svg>
                            </button>
                            <div class="px-6 py-4 text-gray-600 text-sm lg:text-base bg-green-50/50">
                                <p>Isa sa nakasaad sa RA 11524 ay ang tungkulin ng PCA na magpanukala at bumuo ng Coconut
                                    Farmers and Industry Development Plan (CFIDP) na aaprubahan ng Pangulo ng Pilipinas. Ang
                                    CFIDP ang magiging batayan at gabay sa mga programa na gagamit ng “Trust Fund” para
                                    mapaunlad ng industriya ng niyog sa loob ng limampung taon (50 years).</p>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                            <button id="faq-button-2"
                                class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-start hover:bg-green-50 transition-colors min-h-[60px]">
                                <span class="font-semibold text-slate-800 pr-4 flex-1 leading-relaxed">2. Sino-sino ang
                                    tinutukoy na "Coconut Farmer" o magniniyog ayon sa batas?</span>
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                                <p>Ang "Coconut Farmer" o magniniyog ay ang mga sumusunod:</p>
                                <ol class="list-decimal list-outside ml-6 mt-3 space-y-3">
                                    <li>
                                        <p>Nagmamay-ari ng lupain/niyugan na hindi hihigit sa limang (5) ektarya na:</p>
                                        <ul class="list-disc list-outside ml-6 mt-1 space-y-1">
                                            <li>Siya ay nag-lilinang ng kanyang lupa o tinuturing na "owner-cultivator"; o
                                            </li>
                                            <li>Hindi siya ang naglilinang ng lupa, nguni't siya ang may kontrol o
                                                namamahala
                                                nito;</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p>Nangungupahan ng hindi hihigit sa limang (5) ektaryang niyugan o nangungupahan
                                            upang
                                            mag-linang o mangasigwa sa pag-lilinan ng niyugan; o</p>
                                    </li>
                                    <li>
                                        <p>Manggagawa sa niyugan, maaaring pamanahon na mga manggagawa (seasonal worker) o
                                            itinerant, na nag-sasaka ng niyog at nag-proproseso ng kopra bilang kanilang
                                            pangunahing kabuhayan.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                            <button id="faq-button-3"
                                class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-start hover:bg-green-50 transition-colors min-h-[60px]">
                                <span class="font-semibold text-slate-800 pr-4 flex-1 leading-relaxed">3. Anu-ano ang mga
                                    benepisyong maaaring matanggap ng coconut farmers sa ilalim ng RA 11524?</span>
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div class="px-6 py-4 text-gray-600 bg-green-50/50">
                                <p>Ilan sa mga benepisyong matatanggap mula sa RA 11524 ay ang mga programang pangkalusugan
                                    at
                                    medikal, pangkabuhayan, pang-edukasyon, "crop insurance", programa sa pagpapahiram ng
                                    kapital, pag-organisa o pagpapabuti sa mga organisasyon ng mga magniniyog, at pagsasanay
                                    sa
                                    mga magniniyog at mga manggagawa sa niyugan upang mas mapalawak ang kanilang kaalaman at
                                    kasanayan sa larangan ng pagniniyugan.</p>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                            <button id="faq-button-4"
                                class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-start hover:bg-green-50 transition-colors min-h-[60px]">
                                <span class="font-semibold text-slate-800 pr-4 flex-1 leading-relaxed">4. Saan ba kami
                                    lalapit kung gusto namin maging benepisyaryo ng mga proyektong ito?</span>
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                                <p>Bilang panimula at paghahanda sa mga ilulunsad na mga proyekto, ang PCA ay gumawa ng
                                    sistema
                                    ng pagpapalista para sa mga magiging benepisyaryo. Ito ay tinatawag ding National
                                    Coconut
                                    Farmers Registry System o NCFRS. Maaaring lumapit sa mga PCA Regional and Provincial
                                    Offices
                                    upang magparehistro.</p>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                            <button id="faq-button-5"
                                class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-start hover:bg-green-50 transition-colors min-h-[60px]">
                                <span class="font-semibold text-slate-800 pr-4 flex-1 leading-relaxed">5. Paano masisiguro
                                    ng PCA na maipapamahagi o maisasagawa ang mga program/proyekto para sa kapakanan ng
                                    bawat magniniyog sa bansa?</span>
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                                <p>Mayroon apat (4) na paraan upang masiguro na maayos ang implementasyon ng mga proyekto
                                    tulad
                                    ng:</p>
                                <ol class="list-decimal list-inside mt-2 ml-4 space-y-1">
                                    <li>Qualification criteria per project component;</li>
                                    <li>Inter-agency coordination mechanism upang masubaybayan ang wastong pagbabahagi ng
                                        benepisyo at pagpapatupad ng mga programa/proyekto;
                                    </li>
                                    <li>National Coconut Farmers Registry System (NCFRS) na magiging opisyal na batayan ng
                                        impormasyon ng mga miyembro; at</li>
                                    <li>Monitoring ng mga programa kada quarter at taunang ebalwasyon.</li>
                                </ol>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                            <button id="faq-button-6"
                                class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-start hover:bg-green-50 transition-colors min-h-[60px]">
                                <span class="font-semibold text-slate-800 pr-4 flex-1 leading-relaxed">6. Ano ang dapat
                                    gawin kung mayroong lupa at gusto mapasama sa Hybridization Project mula sa CFIDP pero
                                    hindi rehistrado sa NCFRS?</span>
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                                <p>Kailangan magparehistro sa NCFRS upang maisama sa listahan ng mga benepisyaryo ng anumang
                                    proyekto o programa ng CFIDP.</p>
                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                            <button id="faq-button-7"
                                class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-start hover:bg-green-50 transition-colors min-h-[60px]">
                                <span class="font-semibold text-slate-800 pr-4 flex-1 leading-relaxed">7. Kung buong
                                    pamilya, (nanay, tatay at magkakapatid o mga anak) ay coconut farmers, maaari bang lahat
                                    ay maging kabahagi ng proyektong nakapaloob sa RA 11524 at CFIDP?</span>
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                                <p>Kung ang bawat miyembro ng pamilya ay rehistrado sa NCFRS, maaaring makasama ang lahat sa
                                    mga
                                    proyekto o programang saklaw ng RA 11524 at CFIDP.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ 8 -->
                        <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                            <button id="faq-button-8"
                                class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-start hover:bg-green-50 transition-colors min-h-[60px]">
                                <span class="font-semibold text-slate-800 pr-4 flex-1 leading-relaxed">8. Kung buong
                                    pamilya, (nanay, tatay at magkakapatid o mga anak) ay coconut farmers, maaari bang lahat
                                    ay maging kabahagi ng proyektong nakapaloob sa RA 11524 at CFIDP?</span>
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                                <p>Kung ang bawat miyembro ng pamilya ay rehistrado sa NCFRS, maaaring makasama ang lahat sa
                                    mga
                                    proyekto o programang saklaw ng RA 11524 at CFIDP.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ 9 -->
                        <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                            <button id="faq-button-9"
                                class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-start hover:bg-green-50 transition-colors min-h-[60px]">
                                <span class="font-semibold text-slate-800 pr-4 flex-1 leading-relaxed">9. May limitasyon ba
                                    ang pagtanggap ng benepisyo sa mga programa?</span>
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                                <p>Walang nakasaad na polisiya ng batas na nagbabawal na maging benepisyaryo ang Coconut
                                    farmer
                                    ng higit sa isang proyekto. Gayunpaman, ayon ng PCA na ang kapakanan ng bawat miyembro
                                    sa
                                    talaan ay mabibigyan ng pansin kaya't mas bibigyang ng prioridad ang mga magniniyog na
                                    hindi
                                    pa nakakatanggap ng kahit isang programa. Bukod dito, isinasaalang-alang din ang
                                    kwalipikasyon sa pagpili ng mga benepisyaryo sa iba’t ibang programa.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ 10 -->
                        <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                            <button id="faq-button-10"
                                class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-start hover:bg-green-50 transition-colors min-h-[60px]">
                                <span class="font-semibold text-slate-800 pr-4 flex-1 leading-relaxed">10. Kung miyembro na
                                    ng mga asosasyon at kooperatiba, kailangan ba muling magpa-miyembro sa panibagong
                                    organisasyon upang makasali sa mga proyekto?</span>
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div class="px-6 py-4 text-gray-600 hidden bg-green-50/50">
                                <p>Hindi na kailangan. Bagamat bahagi ng pagpapatupad ng mga programa ang pakikipag-ugnayan
                                    sa
                                    iba’t ibang asosasyon at kooperatiba para sa mga magniniyog sa implementasyon,
                                    kinakailangan
                                    pa rin na magpalista o magparehistro sa opisyal na talaan ng PCA na tinatawag na
                                    National
                                    Coconut Farmers Registry System o NCFRS.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    </section>


    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // FAQ accordion functionality
                const faqButtons = document.querySelectorAll('#faq-section .faq-toggle');

                // Function to close all FAQs
                function closeAllFaqs() {
                    document.querySelectorAll('#faq-section .faq-toggle').forEach(btn => {
                        btn.classList.add('collapsed');
                    });
                    document.querySelectorAll('#faq-section .faq-toggle + div').forEach(content => {
                        content.classList.add('hidden');
                    });
                    document.querySelectorAll('#faq-section .faq-toggle svg').forEach(svg => {
                        svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
                    });
                }

                // Function to open specific FAQ
                function openFaq(button) {
                    button.classList.remove('collapsed');
                    const content = button.nextElementSibling;
                    content.classList.remove('hidden');
                    const svg = button.querySelector('svg');
                    svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>';
                }

                faqButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        // Get the content div that follows this button
                        const content = button.nextElementSibling;

                        // If it's already visible, just close it
                        if (!content.classList.contains('hidden')) {
                            content.classList.add('hidden');
                            const svg = button.querySelector('svg');
                            svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
                            return;
                        }

                        // Close all FAQs
                        closeAllFaqs();

                        // Open this FAQ
                        openFaq(button);
                    });
                });

                // Make the first FAQ item visible by default
                if (faqButtons.length > 0) {
                    closeAllFaqs();
                    openFaq(faqButtons[0]);
                }
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
                    button.addEventListener('click', function () {
                        const content = this.nextElementSibling;
                        const icon = this.querySelector('svg');

                        // Hide all other content first with animation
                        document.querySelectorAll('#faq-section .bg-green-50/50').forEach(item => {
                            if (item !== content) {
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

                const observer = new IntersectionObserver(function (entries) {
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

                    // Back to Programs floating button control
                    const registrationSection = document.getElementById('registration');
                    const backToProgramsBtn = document.getElementById('back-to-programs-btn');

                    if (registrationSection) {
                        const registrationTop = registrationSection.offsetTop;
                        const programsSection = document.getElementById('programs');
                        const programsTop = programsSection ? programsSection.offsetTop : 0;

                        // Show button when scrolled past registration section
                        if (scrollPosition >= registrationTop) {
                            backToProgramsBtn.classList.add('show-floating-button');
                            backToProgramsBtn.classList.remove('opacity-0', 'pointer-events-none');
                        } else {
                            backToProgramsBtn.classList.remove('show-floating-button');
                            backToProgramsBtn.classList.add('opacity-0', 'pointer-events-none');
                        }
                    }
                });
            });
        </script>

        <style>
            /* Additional dynamic styles */
            .highlight-section {
                animation: highlight-pulse 1s ease;
            }

            @keyframes highlight-pulse {
                0% {
                    box-shadow: 0 0 0 0 rgba(34, 197, 94, 0);
                }

                50% {
                    box-shadow: 0 0 20px 10px rgba(34, 197, 94, 0.4);
                }

                100% {
                    box-shadow: 0 0 0 0 rgba(34, 197, 94, 0);
                }
            }

            .active-nav {
                color: #22C55E !important;
                font-weight: bold;
            }

            /* FAQ Accordion Styles */
            #faq-section .faq-toggle {
                transition: background-color 0.3s ease;
            }

            #faq-section .faq-toggle:hover {
                background-color: rgba(34, 197, 94, 0.1);
            }

            #faq-section .faq-toggle+div {
                max-height: 0;
                overflow: hidden;
                opacity: 0;
                transition: max-height 0.4s ease-in-out, opacity 0.3s ease-in, padding 0.3s ease;
            }

            #faq-section .faq-toggle+div:not(.hidden) {
                max-height: 800px;
                /* Adjust based on your content's maximum height */
                opacity: 1;
            }

            #faq-section .faq-toggle svg {
                transition: transform 0.3s ease;
            }

            #faq-section .faq-toggle:not(.collapsed) svg {
                transform: rotate(180deg);
            }

            /* Floating Button Shared Styles */
            .show-floating-button {
                opacity: 1 !important;
                pointer-events: auto !important;
            }

            /* Pulse animation for both buttons */
            @keyframes pulse-shadow {
                0% {
                    box-shadow: 0 0 0 0 rgba(9, 202, 89, 0.7);
                }

                70% {
                    box-shadow: 0 0 0 10px rgba(9, 202, 89, 0);
                }

                100% {
                    box-shadow: 0 0 0 0 rgba(9, 202, 89, 0);
                }
            }

            /* Scroll to Programs Button Styles */
            #scroll-to-programs-btn.show {
                opacity: 1;
                pointer-events: auto;
            }

            #scroll-to-programs-btn button {
                position: relative;
                overflow: hidden;
                animation: pulse-shadow 2s infinite;
                border: 2px solid white;
            }

            /* Back to Programs Floating Button Styles */
            #back-to-programs-btn.show {
                opacity: 1;
                pointer-events: auto;
            }

            #back-to-programs-btn a {
                position: relative;
                overflow: hidden;
                animation: pulse-shadow 2s infinite;
                border: 2px solid white;
            }

            /* Hover effect for tooltip */
            #back-to-programs-btn .group:hover span,
            #scroll-to-programs-btn .group:hover span {
                opacity: 1;
            }
        </style>
    @endpush

@endsection