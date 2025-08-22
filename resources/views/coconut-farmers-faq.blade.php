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
                    <p class="text-base lg:text-lg text-green-900 mb-8 leading-relaxed text-center px-2">
                        Itinakda ng <span class="font-bold"> Batas Republika Blg. 11524</span> o <span
                            class="font-bold">"Coconut Farmers and Industry
                            Trust Fund (CFITF) Act"</span>ang pagkakaroon ng Coconut Farmers and Industry Development Plan
                        (CFIDP), na pinirmahan ni dating
                        Pangulong Rodrigo Duterte.
                        <br><br>
                        Layunin nitong gawing mas competitive ang mga magniniyog at mapaunlad ang industriya sa pamamagitan
                        ng rehabilitasyon at modernisasyon. Binibigyang-diin ng plano ang pagpapalakas sa kakayahan ng mga
                        magniniyog para sa katarungang panlipunan.
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center">
                        <a href="#programs"
                            class="pulse-btn inline-flex items-center justify-center text-white font-bold px-8 py-3 rounded-lg shadow-lg bg-green-500 hover:bg-green-600 transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            Mga Programa
                        </a>
                        <a href="#faq-section"
                            class="inline-flex items-center justify-center text-green-900 font-bold px-8 py-3 rounded-lg border-2 border-green-700 hover:bg-white/10 transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Alamin ang CFIDP
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CFIDP Programs Section -->
        <section id="programs" class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-5xl font-bold text-green-900 mb-4">
                        MGA <span style="color: #09ca59ff;">PROGRAMA SA ILALIM</span> NG CFIDP
                    </h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto ">
                        Alamin ang mga suportang mapapakinabangan ng mga magniniyog sa ilalim ng Republic Act 11524
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Social Protection -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                        <div class="h-2 bg-green-500"></div>
                        <div class="p-6">
                            <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Social Protection Program</h3>
                            <p class="text-gray-600 mb-3">Mga nakarehistrong magsasaka ng niyog sa NCFRS na may benepisyo
                                tulad ng libreng pagpapagamot, insurance, scholarship, at training.</p>
                            <div class="bg-green-50 rounded-lg px-3 py-2 mb-3">
                                <p class="text-xs font-medium text-gray-700 mb-1">Implementing Agencies:</p>
                                <ul class="text-xs space-y-1 pl-1">
                                    <li class="flex items-start">
                                        <span class="inline-block w-12 font-semibold text-green-700">PCA</span>
                                        <span class="text-gray-600 pl-16">Health and Medical Program (10%)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="inline-block w-12 font-semibold text-green-700">PCIC</span>
                                        <span class="text-gray-600 pl-15">Crop Insurance (4%)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="inline-block w-12 font-semibold text-green-700">CHED</span>
                                        <span class="text-gray-600 pl-15">Scholarships (8%)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="inline-block w-12 font-semibold text-green-700">ATI/TESDA</span>
                                        <span class="text-gray-600 pl-15">Trainings/Farm Schools (8%)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Farm Improvement -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                        <div class="h-2 bg-green-500"></div>
                        <div class="p-6">
                            <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Farmers Organization and Development</h3>
                            <p class="text-gray-600 mb-3">Hybridization o pagpaparami at pamamahagi ng mga hybrid na binhi
                                ng niyog.</p>
                            <div class="bg-green-50 rounded-lg px-3 py-2 mb-3">
                                <p class="text-xs text-gray-600 font-medium">Implementing Agency: <span
                                        class="text-green-700">CDA</span></p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-1 mb-4">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Farmers Cooperatives Development
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Farmers Association Development
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Shared Facilities -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                        <div class="h-2 bg-green-500"></div>
                        <div class="p-6">
                            <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Hybridization</h3>
                            <p class="text-gray-600 mb-3">Community-based enterprises kasama ang intercropping, at
                                pag-aalaga ng manok, livestock at dairy animals sa mga niyugan.</p>
                            <div class="bg-green-50 rounded-lg px-3 py-2 mb-3">
                                <p class="text-xs text-gray-600 font-medium">Implementing Agencies: <span
                                        class="text-green-700">PCA, DA</span></p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-1 mb-4">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                   Hybridization <span class="text-xs ">(DA)</span> 
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                   Hybridization Research (PCAARRD-DOST)
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Scholarship -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                        <div class="h-2 bg-green-500"></div>
                        <div class="p-6">
                            <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Community-Based Farm Enterprise and Development</h3>
                            <p class="text-gray-600 mb-3">Programa ng Scholarship para sa mga Magsasaka at kanilang pamilya
                                para sa mas magandang kinabukasan.</p>
                            <div class="bg-green-50 rounded-lg px-3 py-2 mb-3">
                                <p class="text-xs text-gray-600 font-medium">Implementing Agency: <span
                                        class="text-green-700">CHED</span></p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-1 mb-4">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Pagsuporta sa edukasyon ng mga anak ng magniniyog
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Programang pang-edukasyon para sa magagaling na estudyante
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Health and Medical -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                        <div class="h-2 bg-green-500"></div>
                        <div class="p-6">
                            <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Integrated Coconut Processing and Downstream Products</h3>
                            <p class="text-gray-600 mb-3">Integrated processing ng mga produkto at downstream products na
                                naglalayong patasin ang kita ng mga magniniyog.</p>
                            <div class="bg-green-50 rounded-lg px-3 py-2 mb-3">
                                <p class="text-xs text-gray-600 font-medium">Implementing Agencies: <span
                                        class="text-green-700">PCA, DTI</span></p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-1 mb-4">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Pasilidad para sa pag-proseso gamit ang modernong makinarya
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Pagdaragdag ng halaga sa mga produkto ng niyog
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Credit and Insurance -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                        <div class="h-2 bg-green-500"></div>
                        <div class="p-6">
                            <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Support Services</h3>
                            <p class="text-gray-600 mb-3">Pagsasagawa ng mga makabagong pananaliksik at aplikasyon nito sa
                                pagpoproseso, produksyon, at distribusyon ng niyog upang mapalago ang lokal na industriya.
                            </p>
                            <div class="bg-green-50 rounded-lg px-3 py-2 mb-3">
                                <p class="text-xs text-gray-600 font-medium">Implementing Agencies: <span
                                        class="text-green-700">PCA, DOST</span></p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-1 mb-4">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Pagtatag at pagpapatibay ng mga kooperatiba at samahan
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Pananaliksik, marketing at pagsulong sa industriya
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Credit and Insurance -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                        <div class="h-2 bg-green-500"></div>
                        <div class="p-6">
                            <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Innovative Researches & Its Practical Application on Production & Distribution</h3>
                            <p class="text-gray-600 mb-3">Pagsasagawa ng mga makabagong pananaliksik at aplikasyon nito sa
                                pagpoproseso, produksyon, at distribusyon ng niyog upang mapalago ang lokal na industriya.
                            </p>
                            <div class="bg-green-50 rounded-lg px-3 py-2 mb-3">
                                <p class="text-xs text-gray-600 font-medium">Implementing Agencies: <span
                                        class="text-green-700">PCA, DOST</span></p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-1 mb-4">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Pagtatag at pagpapatibay ng mga kooperatiba at samahan
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Pananaliksik, marketing at pagsulong sa industriya
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Credit and Insurance -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-green-100">
                        <div class="h-2 bg-green-500"></div>
                        <div class="p-6">
                            <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Program Management, Coordination and M&E</h3>
                            <p class="text-gray-600 mb-3">Pagsasagawa ng mga makabagong pananaliksik at aplikasyon nito sa
                                pagpoproseso, produksyon, at distribusyon ng niyog upang mapalago ang lokal na industriya.
                            </p>
                            <div class="bg-green-50 rounded-lg px-3 py-2 mb-3">
                                <p class="text-xs text-gray-600 font-medium">Implementing Agencies: <span
                                        class="text-green-700">PCA, DOST</span></p>
                            </div>
                            <ul class="text-sm text-gray-600 space-y-1 mb-4">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Pagtatag at pagpapatibay ng mga kooperatiba at samahan
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Pananaliksik, marketing at pagsulong sa industriya
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Learn More Button -->
                <div class="text-center mt-10">
                    <a href="#faq-section"
                        class="inline-block text-white font-bold px-6 py-3 rounded-md shadow-md hover:shadow-lg transition-all duration-300"
                        style="background-color: #09ca59ff;">
                        Alamin Pa Ang Tungkol sa CFIDP
                    </a>
                </div>
            </div>
        </section>

        <!-- Eligibility Section -->
        <section id="eligibility" class="py-16 bg-slate-50">
            <div class="container mx-auto px-4">
                <div class="max-w-8xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-4">
                            Sino ang <span style="color: #09ca59ff;">Makikinabang</span> sa CFIDP?
                        </h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                            Alamin kung kayo ay kwalipikado sa mga programa ng Coconut Farmers and Industry Development Plan
                        </p>
                    </div>

                    <!-- Eligibility Banner from RA 11524 -->
                    <div class="bg-green-600 text-white p-4 rounded-lg mb-8 shadow-md">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-1">Ayon sa Republic Act 11524:</h4>
                                <p class="text-white/90">Ang mga makikinabang sa batas na ito ay mga "coconut farmers" o
                                    magniniyog na may lupa na hindi hihigit sa limang ektarya alinsunod sa depinisyon ng RA
                                    11524.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-8">
                        <div class="flex items-center mb-8 pb-4 border-b border-gray-200">
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-green-900">Ang "Coconut Farmer" o Magniniyog ay ang mga
                                Sumusunod:</h3>
                        </div>

                        <div class="space-y-6 mb-10">
                            <!-- First Category -->
                            <div class="bg-green-50 rounded-lg p-6 border border-green-100">
                                <div class="flex items-start">
                                    <div
                                        class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center flex-shrink-0 mr-4 mt-1">
                                        <span class="text-white font-bold">1</span>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-green-800 mb-3">Nagmamay-ari ng lupain/niyugan
                                            na hindi hihigit sa limang (5) ektarya na:</h4>
                                        <div class="ml-6 space-y-4">
                                            <div class="flex items-start">
                                                <div class="min-w-[20px] mt-1 mr-2">a.</div>
                                                <p class="text-gray-700">Siya ay nag-lilinang ng kanyang lupa o tinuturing
                                                    na "owner-cultivator"; o</p>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="min-w-[20px] mt-1 mr-2">b.</div>
                                                <p class="text-gray-700">Hindi siya ang naglilinang ng lupa, nguni't siya
                                                    ang may kontrol o namamahala nito;</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Second Category -->
                            <div class="bg-green-50 rounded-lg p-6 border border-green-100">
                                <div class="flex items-start">
                                    <div
                                        class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center flex-shrink-0 mr-4 mt-1">
                                        <span class="text-white font-bold">2</span>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-green-800 mb-3">Nangungupahan ng hindi hihigit
                                            sa limang (5) ektaryang niyugan o nangungupahan upang mag-linang o mangasigwa sa
                                            pag-lilinan ng niyugan; o</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Third Category -->
                            <div class="bg-green-50 rounded-lg p-6 border border-green-100">
                                <div class="flex items-start">
                                    <div
                                        class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center flex-shrink-0 mr-4 mt-1">
                                        <span class="text-white font-bold">3</span>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-green-800 mb-3">Manggagawa sa niyugan,
                                            maaaring pamanahon na mga manggagawa (seasonal worker) o itinerant, na
                                            nag-sasaka ng niyog at nag-proproseso ng kopra bilang kanilang pangunahing
                                            kabuhayan.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-amber-50 p-6 rounded-xl border border-amber-200">
                            <div class="flex items-start">
                                <div
                                    class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Mahalagang Paalala:</h4>
                                    <p class="text-gray-700"><span class="font-bold text-green-700">Tandaan:</span> Ang
                                        lahat ng uri ng coconut farmers na ito ay dapat may lupang <span
                                            class="font-bold">hindi hihigit sa limang (5) ektarya</span> alinsunod sa
                                        depinisyon ng RA 11524.</p>
                                    <p class="text-gray-700 mt-2">Lahat ng benepisyaryo ay kailangang nakalista sa
                                        <strong>National Coconut Farmers Registry System (NCFRS)</strong> ng Philippine
                                        Coconut Authority. Ang NCFRS ay isang database ng mga kuwalipikadong magniniyog sa
                                        buong bansa.
                                    </p>
                                    <p class="text-gray-700 mt-2">Kung hindi pa kayo nakarehistro, mangyaring bumisita sa
                                        pinakamalapit na PCA Office sa inyong lugar upang magparehistro.</p>
                                    <div class="mt-4">
                                        <a href="#registration"
                                            class="text-green-600 font-medium hover:text-green-800 transition-colors inline-flex items-center">
                                            Alamin kung paano magparehistro
                                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
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
    <section id="faq-section" class="py-16 relative overflow-hidden"
        style="background: linear-gradient(to bottom right, rgb(230, 253, 212), rgb(200, 245, 180));">
        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-5 pattern-dots-sm"
            style="background-image: radial-gradient(rgb(16, 128, 67) 2px, transparent 2px); background-size: 30px 30px;">
        </div>

        <div class="container mx-auto px-4 text-center relative z-10 max-w-8xl">
            <div class="flex flex-col items-center justify-center text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-6">
                    Mga Madalas na Katanungan <span style="color: #09ca59ff;">Tungkol sa </span> CFIDP
                </h2>
                <p class="text-base text-gray-600 mb-8 max-w-2xl mx-auto px-4">
                    Narito ang mga madalas na tanong tungkol sa Coconut Farmers and Industry Development Plan.
                </p>
            </div>

            <div class="space-y-4 text-left bg-white p-8 rounded-xl shadow-md text-justify">
                <!-- FAQ 1 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button id="faq-button-1"
                        class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">1. Ano ang Coconut Farmers and Industry Development
                            Plan (CFIDP)?</span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7">
                            </path>
                        </svg>
                    </button>
                    <div class="px-10 py-4 text-gray-600 text-sm lg:text-base bg-green-50/50">
                        <p>Isa sa nakasaad sa RA 11524 ay ang tungkulin ng PCA na magpanukala at bumuo ng Coconut
                            Farmers and Industry Development Plan (CFIDP) na aaprubahan ng Pangulo ng Pilipinas. Ang
                            CFIDP ang magiging batayan at gabay sa mga programa na gagamit ng “Trust Fund” para
                            mapaunlad ng industriya ng niyog sa loob ng limampung taon (50 years).</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button id="faq-button-2"
                        class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">2. Sino-sino ang tinutukoy na "Coconut Farmer" o
                            magniniyog ayon sa batas?</span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="px-10 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Ang "Coconut Farmer" o magniniyog ay ang mga sumusunod:</p>
                        <ol class="list-decimal list-outside ml-6 mt-3 space-y-3">
                            <li>
                                <p>Nagmamay-ari ng lupain/niyugan na hindi hihigit sa limang (5) ektarya na:</p>
                                <ul class="list-disc list-outside ml-6 mt-1 space-y-1">
                                    <li>Siya ay nag-lilinang ng kanyang lupa o tinuturing na "owner-cultivator"; o</li>
                                    <li>Hindi siya ang naglilinang ng lupa, nguni't siya ang may kontrol o namamahala
                                        nito;</li>
                                </ul>
                            </li>
                            <li>
                                <p>Nangungupahan ng hindi hihigit sa limang (5) ektaryang niyugan o nangungupahan upang
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
                        class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">3. Anu-ano ang mga benepisyong maaaring matanggap ng
                            coconut farmers sa ilalim ng RA 11524?</span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="px-10 py-4 text-gray-600 bg-green-50/50">
                        <p>Ilan sa mga benepisyong matatanggap mula sa RA 11524 ay ang mga programang pangkalusugan at
                            medikal, pangkabuhayan, pang-edukasyon, "crop insurance", programa sa pagpapahiram ng
                            kapital, pag-organisa o pagpapabuti sa mga organisasyon ng mga magniniyog, at pagsasanay sa
                            mga magniniyog at mga manggagawa sa niyugan upang mas mapalawak ang kanilang kaalaman at
                            kasanayan sa larangan ng pagniniyugan.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button id="faq-button-4"
                        class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">4. Saan ba kami lalapit kung gusto namin maging
                            benepisyaryo ng mga proyektong ito?</span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="px-10 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Bilang panimula at paghahanda sa mga ilulunsad na mga proyekto, ang PCA ay gumawa ng sistema
                            ng pagpapalista para sa mga magiging benepisyaryo. Ito ay tinatawag ding National Coconut
                            Farmers Registry System o NCFRS. Maaaring lumapit sa mga PCA Regional and Provincial Offices
                            upang magparehistro.</p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button id="faq-button-5"
                        class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">5. Paano masisiguro ng PCA na maipapamahagi o
                            maisasagawa ang mga program/proyekto para sa kapakanan ng bawat
                            <span class="ml-0 lg:ml-5">magniniyog sa bansa?</span></span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="px-10 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Mayroon apat (4) na paraan upang masiguro na maayos ang implementasyon ng mga proyekto tulad
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
                        class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800 mr-3">6. Ano ang dapat gawin kung mayroong lupa at
                            gusto
                            mapasama sa Hybridization Project mula sa CFIDP pero hindi
                            rehistrado sa <span class="ml-0 lg:ml-5"> NCFRS?</span> </span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="px-10 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Kailangan magparehistro sa NCFRS upang maisama sa listahan ng mga benepisyaryo ng anumang
                            proyekto o programa ng CFIDP.</p>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button id="faq-button-6"
                        class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">8. Kung buong pamilya, (nanay, tatay at magkakapatid
                            o mga anak) ay coconut farmers, maaari bang lahat ay maging
                            kabahagi ng <span class="ml-0 lg:ml-5">proyektong
                                nakapaloob sa RA 11524 at CFIDP?</span>
                        </span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="px-10 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Kung ang bawat miyembro ng pamilya ay rehistrado sa NCFRS, maaaring makasama ang lahat sa mga
                            proyekto o programang saklaw ng RA 11524 at CFIDP.
                        </p>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button id="faq-button-6"
                        class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">8. Kung buong pamilya, (nanay, tatay at magkakapatid
                            o mga anak) ay coconut farmers, maaari bang lahat ay maging
                            kabahagi ng <span class="ml-0 lg:ml-5"> proyektong
                                nakapaloob sa RA 11524 at CFIDP?</span>
                        </span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="px-10 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Kung ang bawat miyembro ng pamilya ay rehistrado sa NCFRS, maaaring makasama ang lahat sa mga
                            proyekto o programang saklaw ng RA 11524 at CFIDP.
                        </p>
                    </div>
                </div>

                <!-- FAQ 9 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button id="faq-button-6"
                        class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">9. May limitasyon ba ang pagtanggap ng benepisyo sa
                            mga programa?</span>
                        </span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="px-10 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Walang nakasaad na polisiya ng batas na nagbabawal na maging benepisyaryo ang Coconut farmer
                            ng higit sa isang proyekto. Gayunpaman, ayon ng PCA na ang kapakanan ng bawat miyembro sa
                            talaan ay mabibigyan ng pansin kaya't mas bibigyang ng prioridad ang mga magniniyog na hindi
                            pa nakakatanggap ng kahit isang programa. Bukod dito, isinasaalang-alang din ang
                            kwalipikasyon sa pagpili ng mga benepisyaryo sa iba’t ibang programa.
                        </p>
                    </div>
                </div>

                <!-- FAQ 10 -->
                <div class="bg-white rounded-lg border border-green-100 overflow-hidden">
                    <button id="faq-button-6"
                        class="faq-toggle w-full px-6 py-4 text-left flex justify-between items-center hover:bg-green-50 transition-colors">
                        <span class="font-semibold text-slate-800">10. Kung miyembro na ng mga asosasyon at kooperatiba,
                            kailangan ba muling magpa-miyembro sa panibagong organisasyon
                            <span class="ml-0 lg:ml-5"> upang makasali sa mga
                                proyekto?</span>
                        </span>
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="px-10 py-4 text-gray-600 hidden bg-green-50/50">
                        <p>Hindi na kailangan. Bagamat bahagi ng pagpapatupad ng mga programa ang pakikipag-ugnayan sa
                            iba’t ibang asosasyon at kooperatiba para sa mga magniniyog sa implementasyon, kinakailangan
                            pa rin na magpalista o magparehistro sa opisyal na talaan ng PCA na tinatawag na National
                            Coconut Farmers Registry System o NCFRS.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-8">
        <div class="container mx-auto px-4">
            <div class="text-center text-green-700">
                <h2 class="text-lg md:text-2xl font-bold mb-4">
                    Kailangan pa ng Karagdagang Impormasyon?
                </h2>
                <p class="text-sm lg:text-base text-green-700 max-w-2xl mx-auto">
                    Makipag-ugnayan sa Philippine Coconut Authority (PCA) para sa mga tanong tungkol sa CFIDP at paano
                    mapakinabangan ang mga programa nito
                </p>
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