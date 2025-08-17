@extends('layouts.public', ['title' => 'Ano Ang CFIDP?'])

@push('head')
    <script src="https://cdn.tailwindcss.com"></script>
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
                    }
                }
            }
        }
    </script>
    <style>
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
<div class="bg-slate-50 text-slate-800">

    <!-- Hero Section -->
    <section id="home" class="hero-bg py-20 lg:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center fade-in">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Tulong para sa mga<br>
                    <span class="text-coconut-yellow">Magniniyog</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Coconut Farmers and Industry Development Plan (CFIDP) - Ang inyong gabay sa mas magandang kinabukasan
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <button class="btn-primary text-white px-8 py-4 rounded-lg font-semibold text-lg shadow-lg">
                        Mag-register Ngayon
                    </button>
                    <button class="bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-lg font-semibold text-lg border border-white/20 hover:bg-white/20 transition-all">
                        Alamin ang RA 11524
                    </button>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 border border-white/20">
                        <div class="text-3xl font-bold text-coconut-yellow mb-2">50 Taon</div>
                        <div class="text-white/90">Program Duration</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 border border-white/20">
                        <div class="text-3xl font-bold text-coconut-yellow mb-2">5 Ektarya</div>
                        <div class="text-white/90">Maximum Farm Size</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 border border-white/20">
                        <div class="text-3xl font-bold text-coconut-yellow mb-2">8 Programs</div>
                        <div class="text-white/90">Available Benefits</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                    Mga Benepisyong Makukuha
                </h2>
                <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                    Alamin ang iba't ibang tulong na makakamit ninyo sa ilalim ng CFIDP
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Health & Medical -->
                <div class="card-hover bg-gradient-to-br from-coconut-blue/5 to-coconut-blue/10 rounded-xl p-6 border border-coconut-blue/20">
                    <div class="w-16 h-16 bg-coconut-blue rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3V8zM4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Health & Medical</h3>
                    <p class="text-slate-600">Libreng medical services at health programs para sa mga magniniyog at kanilang pamilya</p>
                </div>
                
                <!-- Crop Insurance -->
                <div class="card-hover bg-gradient-to-br from-coconut-green/5 to-coconut-green/10 rounded-xl p-6 border border-coconut-green/20">
                    <div class="w-16 h-16 bg-coconut-green rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,2A3,3 0 0,1 15,5V11A3,3 0 0,1 12,14A3,3 0 0,1 9,11V5A3,3 0 0,1 12,2M19,11C19,14.53 16.39,17.44 13,17.93V21H11V17.93C7.61,17.44 5,14.53 5,11H7A5,5 0 0,0 12,16A5,5 0 0,0 17,11H19Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Crop Insurance</h3>
                    <p class="text-slate-600">Proteksyon sa inyong pananim laban sa natural disasters at iba pang panganib</p>
                </div>
                
                <!-- Education -->
                <div class="card-hover bg-gradient-to-br from-coconut-yellow/5 to-coconut-yellow/10 rounded-xl p-6 border border-coconut-yellow/20">
                    <div class="w-16 h-16 bg-coconut-yellow rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,3L1,9L12,15L21,9V10H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Scholarship</h3>
                    <p class="text-slate-600">Educational assistance at training programs para sa mga anak ng magniniyog</p>
                </div>
                
                <!-- Financial Support -->
                <div class="card-hover bg-gradient-to-br from-green-500/5 to-green-500/10 rounded-xl p-6 border border-green-500/20">
                    <div class="w-16 h-16 bg-green-500 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7,15H9C9,16.08 10.37,17 12,17C13.63,17 15,16.08 15,15C15,13.9 13.96,13.5 11.76,12.97C9.64,12.44 7,11.78 7,9C7,7.21 8.47,5.69 10.5,5.18V3H13.5V5.18C15.53,5.69 17,7.21 17,9H15C15,7.92 13.63,7 12,7C10.37,7 9,7.92 9,9C9,10.1 10.04,10.5 12.24,11.03C14.36,11.56 17,12.22 17,15C17,16.79 15.53,18.31 13.5,18.82V21H10.5V18.82C8.47,18.31 7,16.79 7,15Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Financial Support</h3>
                    <p class="text-slate-600">Loans, grants, at financial assistance para sa farm development</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Eligibility Section -->
    <section id="eligibility" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                        Sino ang Makakakuha ng Tulong?
                    </h2>
                    <p class="text-xl text-slate-600">
                        Tingnan kung kwalipikado kayo sa mga programa ng CFIDP
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-slate-800 mb-6">Mga Kwalipikasyon:</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-coconut-green rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-slate-800 mb-2">May-ari ng Lupain (Owner-Cultivator)</h4>
                                <p class="text-slate-600">Nagmamay-ari ng niyugan na hindi hihigit sa 5 ektarya at sariling nag-aalaga</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-coconut-green rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-slate-800 mb-2">Nangungupahan ng Lupa</h4>
                                <p class="text-slate-600">Nangungupahan ng niyugan na hindi hihigit sa 5 ektarya para sa pagsasaka</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-coconut-green rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-slate-800 mb-2">Farm Worker</h4>
                                <p class="text-slate-600">Manggagawa sa niyugan na ang pangunahing hanapbuhay ay paggawa sa coconut farm</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 p-6 bg-coconut-yellow/10 rounded-lg border border-coconut-yellow/20">
                        <h4 class="text-lg font-semibold text-slate-800 mb-2">Mahalagang Paalala:</h4>
                        <p class="text-slate-600">Kailangan kayong maging registered sa National Coconut Farmers Registry System (NCFRS) ng PCA para makakuha ng mga benepisyo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Process -->
    <section id="registration" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                    Paano Mag-register?
                </h2>
                <p class="text-xl text-slate-600">
                    Sundin ang mga hakbang na ito para maging miyembro ng NCFRS
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Step 1 -->
                    <div class="text-center">
                        <div class="w-20 h-20 bg-coconut-blue rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-white">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-4">Ihanda ang Dokumento</h3>
                        <ul class="text-slate-600 space-y-2">
                            <li>• Valid ID</li>
                            <li>• Proof of land ownership</li>
                            <li>• Barangay certification</li>
                            <li>• Tax declaration</li>
                        </ul>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="text-center">
                        <div class="w-20 h-20 bg-coconut-green rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-white">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-4">Pumunta sa PCA Office</h3>
                        <p class="text-slate-600">
                            Bisitahin ang pinakamalapit na PCA office sa inyong lugar para sa registration
                        </p>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="text-center">
                        <div class="w-20 h-20 bg-coconut-yellow rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-white">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-4">Makakuha ng Benefits</h3>
                        <p class="text-slate-600">
                            Kapag naging registered na kayo, makakakuha na kayo ng mga benepisyo ng CFIDP
                        </p>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <button class="btn-primary text-white px-8 py-4 rounded-lg font-semibold text-lg shadow-lg">
                        Hanapin ang PCA Office
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section id="faqs" class="py-20 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                    Mga Madalas na Tanong
                </h2>
                <p class="text-xl text-slate-600">
                    Sagot sa mga tanong tungkol sa CFIDP at RA 11524
                </p>
            </div>
            
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-sm border border-slate-200">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-800">Ano ang RA 11524?</span>
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 text-slate-600">
                        Ang RA 11524 o "Coconut Farmers and Industry Trust Fund (CFITF) Act" ay isang batas na nilagdaan ni President Duterte noong Pebrero 26, 2021. Ito ay naglalayong tulungan ang mga magniniyog sa pamamagitan ng iba't ibang programa.
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm border border-slate-200">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-800">Magkano ang makukuhang tulong?</span>
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm border border-slate-200">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-800">Kailan magsisimula ang programa?</span>
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm border border-slate-200">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-slate-50 transition-colors">
                        <span class="font-semibold text-slate-800">Saan pwedeng mag-apply?</span>
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-coconut-green">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Kailangan ng Tulong?
                </h2>
                <p class="text-xl text-white/90 mb-8">
                    Makipag-ugnayan sa amin para sa mga tanong at suporta
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 border border-white/20">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Hotline</h3>
                        <p class="text-white/90">8888 (24/7)</p>
                    </div>
                    
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 border border-white/20">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">PCA Offices</h3>
                        <p class="text-white/90">Nationwide</p>
                    </div>
                    
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6 border border-white/20">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C0,4.89 21.1,4 20,4Z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Email</h3>
                        <p class="text-white/90">cfidp@da.gov.ph</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@push('scripts')
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // FAQ toggle functionality
        document.querySelectorAll('#faqs button').forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('svg');
                
                if (content && content.style.display !== 'block') {
                    content.style.display = 'block';
                    icon.style.transform = 'rotate(180deg)';
                } else if (content) {
                    content.style.display = 'none';
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });

        // Add fade-in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>
@endpush

@endsection

