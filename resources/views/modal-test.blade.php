@extends('layouts.public')

@push('head')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Manrope:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body,
        html {
            font-family: 'Poppins', sans-serif !important;
        }
    </style>
@endpush

@section('content')

    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-br from-green-50 via-white to-green-50">
        <div class="w-full max-w-7xl mx-auto flex flex-col md:flex-row items-center px-4 sm:px-6 lg:px-8">
            <!-- Text Section -->
            <div class="text-sm w-full md:w-1/2 text-left md:pr-8 mb-6 md:mb-0 -mt-6">
                <h1 class="text-5xl md:text-7xl font-extrabold mb-3 mt-0">
                    <span style="color: #09ca59ff;">Modal</span><span class="text-green-900"> Design Test</span>
                </h1>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-700 mb-5">
                    Application Modal Testing
                </h2>
                <p class="text-sm lg:text-base text-justify mb-6 leading-relaxed">
                    <span class="font-light text-gray-800">
                        This is a test page to design and preview the application modal with dummy data. Click the button
                        below to view the modal.
                    </span>
                </p>
                <button id="openModalBtn"
                    class="inline-flex items-center justify-center gap-2 text-white font-semibold text-base px-8 py-3 rounded-lg shadow-md transition-colors duration-200"
                    style="background-color: #09ca59ff;" onmouseover="this.style.backgroundColor='#01cc41ff'"
                    onmouseout="this.style.backgroundColor='#09ca59ff'">
                    Open Application Modal
                </button>
            </div>
        </div>

        <!-- Application Details Modal -->
        <div id="applicationModal"
            class="fixed inset-0 z-50 hidden overflow-y-auto transition-opacity duration-300 ease-out">
            <!-- Modal Backdrop -->
            <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity duration-300 backdrop-blur-sm"></div>

            <!-- Modal Content -->
            <div class="flex items-center justify-center min-h-screen p-2 sm:p-4">
                <div
                    class="relative bg-white rounded-xl shadow-2xl w-full max-w-2xl mx-auto max-h-[90vh] overflow-y-auto transform translate-y-[-1vh]">
                    <!-- Modal Header -->
                    <div
                        class="bg-gradient-to-r from-green-500 to-green-400 p-4 sm:p-6 rounded-t-xl relative overflow-hidden">
                        <!-- Decorative elements -->
                        <div
                            class="absolute top-0 right-0 w-24 sm:w-32 h-24 sm:h-32 bg-white opacity-10 rounded-full -mt-8 sm:-mt-12 -mr-8 sm:-mr-12">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-16 sm:w-24 h-16 sm:h-24 bg-white opacity-10 rounded-full -mb-8 sm:-mb-12 -ml-8 sm:-ml-12">
                        </div>
                        <div
                            class="absolute top-1/2 left-1/4 w-6 sm:w-8 h-6 sm:h-8 bg-white opacity-10 rounded-full transform -translate-y-1/2">
                        </div>

                        <div class="relative z-10 px-5 pt-2 pb-0">
                            <!-- Truly centered heading -->
                            <div class="text-center">
                                <h2 class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold text-white mb-0.5">
                                    Application Tracking Details</h2>
                                <p class="text-white text-xs sm:text-sm opacity-80 mx-auto max-w-md -mb-1">
                                    Tingnan ang latest na update ng iyong application</p>
                            </div>

                            <!-- Close button - positioned at absolute right corner -->
                            <div class="absolute right-0 top-0 -mr-2 -mt-1">
                                <button id="closeModal"
                                    class="text-white hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 bg-green-600 hover:bg-green-700 rounded-full p-1 shadow-lg transition-all duration-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Body -->
                    <div class="p-6 sm:p-8">
                        <div class="space-y-6">
                            <!-- Application Information - Centered & Clean -->
                            <div class="mb-6 text-center">
                                <!-- Title and Status -->
                                <div class="flex flex-col items-center mb-3">
                                    <div id="modalApplicationTitle"
                                        class="text-base sm:text-lg font-semibold text-gray-900 mb-2.5 px-4">
                                        Rice Production Enhancement Project - Camarines Sur
                                    </div>
                                    <span id="modalCurrentStatusText"
                                        class="text-xs font-semibold bg-yellow-100 text-yellow-800 px-3.5 py-1.5 rounded-full shadow-sm">
                                        Under Review
                                    </span>
                                </div>

                                <!-- Subtle Info: App ID, Proponent, Date -->
                                <div
                                    class="flex flex-wrap items-center justify-center gap-x-3 gap-y-1 text-xs text-gray-400 mt-3">
                                    <span id="modalReferenceId" class="font-mono text-[11px]">APP-2024-001</span>
                                    <span class="hidden sm:inline text-gray-300">•</span>
                                    <span id="modalProponent" class="text-[11px]">Juan Dela Cruz</span>
                                    <span class="hidden sm:inline text-gray-300">•</span>
                                    <span id="modalDateSubmitted" class="text-[11px]">September 15, 2024</span>
                                </div>
                            </div>

                            <!-- Application History (No Label) -->
                            <div class="mt-2">
                                <div class="space-y-6 border-l-2 border-gray-200 ml-3.5">
                                    <!-- History Item 1 -->
                                    <div class="relative">
                                        <div
                                            class="absolute -left-[7px] top-1 h-3 w-3 rounded-full bg-green-500 border-2 border-white">
                                        </div>
                                        <div class="ml-8">
                                            <div class="flex items-center justify-between">
                                                <div
                                                    class="text-xs font-semibold text-green-800 bg-green-100 px-2.5 py-1 rounded-md">
                                                    Validation
                                                </div>
                                                <div class="text-xs text-gray-400">18 Sep, 02:20 PM</div>
                                            </div>
                                            <p class="text-sm text-gray-700 mt-2">Documents verified and approved.</p>
                                            <div class="text-xs text-gray-500 mt-1">by Maria Santos</div>
                                        </div>
                                    </div>

                                    <!-- History Item 2 -->
                                    <div class="relative">
                                        <div
                                            class="absolute -left-[7px] top-1 h-3 w-3 rounded-full bg-gray-300 border-2 border-white">
                                        </div>
                                        <div class="ml-8">
                                            <div class="flex items-center justify-between">
                                                <div
                                                    class="text-xs font-semibold text-blue-800 bg-blue-100 px-2.5 py-1 rounded-md">
                                                    Application Received
                                                </div>
                                                <div class="text-xs text-gray-400">15 Sep, 10:30 AM</div>
                                            </div>
                                            <p class="text-sm text-gray-700 mt-2">Application received and under initial
                                                review.</p>
                                            <div class="text-xs text-gray-500 mt-1">by Pedro Reyes</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Missing Documents Alert -->
                            <div class="mt-2 pt-4 border-t border-gray-100">
                                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                    <div class="flex items-start gap-3">
                                        <svg class="h-5 w-5 text-yellow-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div class="flex-1">
                                            <p class="text-sm font-semibold text-yellow-900 mb-2">Mahalagang Paalala:</p>
                                            <p class="text-sm text-yellow-800 mb-3">
                                                Kinakailangan pong maipasa ang mga kulang na dokumento sa opisina ng PCA
                                                para maiproseso ang inyong aplikasyon:
                                            </p>
                                            <ul class="space-y-1.5 text-sm text-yellow-900">
                                                <li class="flex items-start">
                                                    <span class="mr-2">•</span>
                                                    <span>Valid Government ID</span>
                                                </li>
                                                <li class="flex items-start">
                                                    <span class="mr-2">•</span>
                                                    <span>Financial Statement</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
    </section>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const openModalBtn = document.getElementById('openModalBtn');
            const closeModalBtn = document.getElementById('closeModal');
            const applicationModal = document.getElementById('applicationModal');

            // Open modal
            openModalBtn.addEventListener('click', function () {
                applicationModal.classList.remove('hidden');
                applicationModal.classList.add('opacity-0');
                setTimeout(() => {
                    applicationModal.classList.remove('opacity-0');
                }, 10);
            });

            // Close modal
            function closeModal() {
                applicationModal.classList.add('opacity-0');
                setTimeout(() => {
                    applicationModal.classList.add('hidden');
                    applicationModal.classList.remove('opacity-0');
                }, 300);
            }

            closeModalBtn.addEventListener('click', closeModal);

            // Close when clicking backdrop
            applicationModal.addEventListener('click', function (e) {
                if (e.target === applicationModal) {
                    closeModal();
                }
            });

            // Close with Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && !applicationModal.classList.contains('hidden')) {
                    closeModal();
                }
            });
        });
    </script>
@endpush