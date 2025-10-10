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
            <!-- Text Section (moved first for left-side position) -->
            <div class="text-sm w-full md:w-1/2 text-left md:pr-8 mb-6 md:mb-0 -mt-6">
                <h1 class="text-5xl md:text-7xl font-extrabold mb-3 mt-0">
                    <span style="color: #09ca59ff;">PCA</span><span class="text-green-900">ppTrack</span>
                </h1>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-700 mb-5">
                    Application Tracking System
                </h2>
                <p class="text-sm lg:text-base text-justify mb-6 leading-relaxed">
                    <span class="font-light text-gray-800">
                        Ang PCAppTrack ay isang online system ng CFIDP sa ilalim ng PCA Region V na ginawa para sa
                        pagsubaybay ng mga application sa rehiyon.
                        Sa pamamagitan ng application ID, madali mong makikita ang status ng iyong application — hindi na
                        kailangan ng login.
                    </span>
                    <br><br>
                    <span class="font-medium text-gray-600 italic">Mabilis. Organisado. Para sa mga magniniyog na
                        Pilipino.</span>
                </p>
                <a href="#track-section"
                    class="track-btn inline-flex items-center justify-center gap-2 text-white font-semibold text-base px-8 py-3 rounded-lg shadow-md transition-colors duration-200"
                    style="background-color: #09ca59ff;" onmouseover="this.style.backgroundColor='#01cc41ff'"
                    onmouseout="this.style.backgroundColor='#09ca59ff'">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    Track Application
                </a>
            </div>

            <!-- Image Section (now second for right-side position) -->
            <div class="w-full md:w-1/2  md:-mt-4">
                <img src="/images/img/front.svg" alt="Application Tracking System" class="w-full h-auto max-h-xl ml-30">
            </div>
        </div>
    </section>

    <!-- Tracking Form Section -->
    <section id="track-section" class="py-20 relative overflow-hidden"
        style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);">
        <!-- Decorative leaf images for background - more subtle -->
        <div class="absolute left-0 top-0 opacity-10">
            <img src="/images/img/leaf-left.svg" alt="decorative leaf" class="h-80 md:h-96">
        </div>
        <div class="absolute right-0 bottom-0 opacity-10">
            <img src="/images/img/leaf-right.svg" alt="decorative leaf" class="h-80 md:h-96">
        </div>

        <!-- Subtle pattern overlay -->
        <div class="absolute inset-0 opacity-5"
            style="background-image: radial-gradient(circle, #22c55e 1px, transparent 1px); background-size: 20px 20px;">
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <!-- Header Section -->
            <div class="max-w-3xl mx-auto mb-10">
                <h2 class="text-2xl md:text-4xl font-bold text-green-900 mb-3">
                    <span style="color: #09ca59ff;">Track</span>
                    <span class="">your application</span>
                </h2>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                    Ilagay ang natatanging Application ID sa input field.
                </p>
            </div>


            <!-- Search Form -->
            <div class="max-w-xl mx-auto">
                <div class="bg-white rounded-xl shadow-lg p-5 md:p-6 border border-gray-100">
                    <div class="flex flex-col sm:flex-row gap-2">
                        <input type="text" id="referenceIdInput" placeholder="Halimbawa: FADXUQAWUN"
                            class="flex-grow px-4 py-3 rounded-lg border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent text-sm transition-all duration-200"
                            style="font-family: 'Montserrat', sans-serif;">
                        <button id="trackButton" type="button"
                            class="px-6 py-3 rounded-lg text-white font-semibold flex items-center justify-center gap-2 transition-colors duration-200 shadow-md text-sm"
                            style="background-color: #09ca59ff; min-width: 110px;"
                            onmouseover="this.style.backgroundColor='#01cc41ff'"
                            onmouseout="this.style.backgroundColor='#09ca59ff'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <span class="hidden sm:inline">Search</span>
                        </button>
                    </div>

                    <!-- Helper text -->
                    <div class="mt-3 flex items-start gap-2 text-left text-xs text-gray-500">
                        <svg class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p>Ang Application Reference ID ay makikita sa text-message na natanggap ninyo matapos
                            mag-submit ng aplikasyon.</p>
                    </div>
                </div>
            </div>

            <!-- Loading Modal -->
            <div id="loadingSpinner"
                class="fixed inset-0 z-50 hidden overflow-y-auto transition-opacity duration-300 ease-out">
                <!-- Modal Backdrop -->
                <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity duration-300 backdrop-blur-sm"></div>

                <!-- Modal Content -->
                <div class="flex items-center justify-center min-h-screen p-4">
                    <div class="relative bg-white rounded-xl shadow-2xl max-w-md mx-auto transform translate-y-0">
                        <!-- Loading Content -->
                        <div class="p-8 text-center">
                            <div class="flex flex-col items-center justify-center space-y-4">
                                <!-- Animated Spinner -->
                                <div class="relative">
                                    <svg class="animate-spin h-12 w-12 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                            stroke-width="4">
                                        </circle>
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                        </path>
                                    </svg>
                                    <!-- Pulsing ring around spinner -->
                                    <div
                                        class="absolute inset-0 rounded-full border-2 border-green-200 animate-ping opacity-20">
                                    </div>
                                </div>

                                <!-- Loading Text -->
                                <div class="space-y-2">
                                    <h3 class="text-lg font-semibold text-gray-800">Searching Application</h3>
                                    <p class="text-sm text-green-700 font-medium">Please wait while we search for your
                                        application details...</p>
                                    <div class="flex justify-center space-x-1 mt-3">
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-bounce"></div>
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-bounce"
                                            style="animation-delay: 0.1s"></div>
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-bounce"
                                            style="animation-delay: 0.2s"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Error Modal -->
            <div id="errorMessage"
                class="fixed inset-0 z-50 hidden overflow-y-auto transition-opacity duration-300 ease-out">
                <!-- Modal Backdrop -->
                <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity duration-300 backdrop-blur-sm"></div>

                <!-- Modal Content -->
                <div class="flex items-center justify-center min-h-screen p-4">
                    <div class="relative bg-white rounded-xl shadow-2xl max-w-md mx-auto transform translate-y-0">
                        <!-- Error Content -->
                        <div class="p-8 text-center">
                            <div class="flex flex-col items-center justify-center space-y-4">
                                <!-- Error Icon -->
                                <div class="relative">
                                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center">
                                        <svg class="w-8 h-8 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <!-- Pulsing ring around error icon -->
                                    <div
                                        class="absolute inset-0 rounded-full border-2 border-red-200 animate-ping opacity-20">
                                    </div>
                                </div>

                                <!-- Error Text -->
                                <div class="space-y-3">
                                    <h3 class="text-lg font-semibold text-gray-800">Application Search Error</h3>
                                    <div id="errorText" class="text-sm text-red-700 font-medium px-2"></div>

                                    <!-- Suggestions -->
                                    <div class="text-base text-gray-600 mt-3 space-y-1">
                                        <p>Mangyaring icheck muli:</p>
                                        <ul class="text-left text-sm list-disc list-inside space-y-1 text-gray-500">
                                            <li>Ang iyong Application ID ay tama</li>
                                            <li>Ang iyong koneksyon sa internet ay matatag</li>
                                            <li>Subukan muli sa ilang sandali</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Close Button -->
                                <button id="closeErrorModal"
                                    class="mt-4 px-6 py-2 bg-red-500 hover:bg-red-600 text-white font-medium rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-red-300">
                                    Subukan Muli
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
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

                        <div class="flex items-center justify-between relative z-10">
                            <!-- Left spacer - smaller on mobile -->
                            <div class="w-6 sm:w-10"></div>

                            <!-- Center content - better responsive sizing -->
                            <div class="flex-1 text-center px-1 sm:px-4">
                                <h2 class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold text-white mt-2 sm:mt-4">
                                    Application Tracking Details</h2>
                                <div class="w-12 sm:w-16 h-0.5 sm:h-1 bg-white opacity-70 rounded mx-auto"></div>
                            </div>

                            <!-- Close button - better positioning and sizing -->
                            <div class="flex justify-end">
                                <button id="closeModal"
                                    class="text-white hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 bg-green-600 hover:bg-green-700 rounded-full p-1.5 shadow-lg transition-all duration-200">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Description Text - improved responsive padding -->
                        <div class="mt-3 sm:mt-4 text-xs sm:text-sm text-white leading-relaxed px-2 sm:px-6 relative z-10">
                            <p class="mb-2 text-center text-white text-opacity-90">
                                Ang sumusunod na impormasyon ay tumutukoy sa kasalukuyang estado ng inyong aplikasyon
                                para sa PCA-CFIDP Program. Maaari itong gamitin bilang gabay upang malaman ang progreso
                                o anumang aksyon na isinasagawa.
                            </p>
                        </div>
                    </div>

                    <!-- Modal Body -->
                    <div class="py-4 sm:py-6 px-4 sm:px-6 lg:px-8">
                        <!-- Application Information Section -->
                        <div class="mb-8 mt-1 pt-1">
                            <div class="flex items-center mb-4 space-x-2">
                                <div
                                    class="w-8 h-8 rounded-full flex items-center justify-center bg-green-50 text-green-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-base font-bold text-gray-900">Application Information</h3>
                            </div>

                            <div class="mb-6"> <!-- Clean card container -->
                                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                                    <!-- Current Status - Centered green pill at top -->
                                    <div class="flex justify-center mb-2 mt-2">
                                        <div
                                            class="border border-green-100 bg-green-100 text-green-600 px-4 py-2 rounded-full text-xs">
                                            Current Status: <span id="modalCurrentStatusText"
                                                class="text-sm font-semibold">-</span>
                                        </div>
                                    </div>

                                    <!-- Reference ID - Centered below status -->
                                    <div class="flex justify-center mb-6">
                                        <div class="border border-green-200 rounded-full px-4 py-1">
                                            <span class="text-xs text-green-600">Application ID: </span>
                                            <span id="modalReferenceId" class="text-xs font-medium text-green-600">-</span>
                                        </div>
                                    </div>

                                    <!-- Two column layout for details -->
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <!-- Application Title -->
                                        <div class="sm:col-span-2">
                                            <p class="text-gray-600 text-xs font-medium mb-1">Application Title</p>
                                            <div id="modalApplicationTitle" class="bg-green-50 rounded-md p-3 text-sm">-
                                            </div>
                                        </div>

                                        <!-- Contact Person -->
                                        <div>
                                            <p class="text-gray-600 text-xs font-medium mb-1">Contact Person</p>
                                            <div id="modalProponent" class="bg-green-50 rounded-md p-3 text-sm ">
                                                -</div>
                                        </div>

                                        <!-- Date Submitted -->
                                        <div>
                                            <p class="text-gray-600 text-xs font-medium mb-1">Date Submitted</p>
                                            <div id="modalDateSubmitted" class="bg-green-50 rounded-md p-3 text-sm">-</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Application History -->
                        <div class="mb-8">
                            <div class="flex items-center mb-4 space-x-2">
                                <div
                                    class="w-8 h-8 rounded-full flex items-center justify-center bg-green-50 text-green-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-base font-bold text-gray-900">Application History</h3>
                            </div>

                            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-sm bg-white p-4">
                                <!-- Timeline view for application history -->
                                <div class="relative" id="historyTimelineContainer">
                                    <!-- Timeline line -->
                                    <div class="absolute top-0 bottom-0 left-6 w-0.5 bg-green-100" aria-hidden="true">
                                    </div>

                                    <!-- Timeline entries will be populated dynamically -->
                                    <div id="modalHistoryTable" class="space-y-3 relative">
                                        <!-- History items will be populated dynamically -->
                                    </div>
                                </div>

                                <!-- Empty state message (initially hidden) -->
                                <div id="emptyHistoryState" class="hidden text-center py-6">
                                    <div class="inline-flex items-center justify-center bg-gray-100 rounded-full p-2 mb-2">
                                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="block text-gray-500 font-medium text-[11px]">No history records
                                            found</span>
                                        <p class="text-gray-400 text-[9px] mt-0.5">Application history will appear here
                                            once available</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Requirements Status -->
                        <div class="mb-4">
                            <div class="flex items-center mb-4 space-x-2">
                                <div
                                    class="w-8 h-8 rounded-full flex items-center justify-center bg-green-50 text-green-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2M9 12h6m-6 4h6">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-base font-bold text-gray-900">Requirements Information</h3>
                            </div>
                            <div id="modalRequirements"
                                class="bg-white rounded-lg border border-gray-200 overflow-hidden p-4">
                                <p class="text-sm text-gray-500" id="noRequirementsMsg">No requirements submitted yet
                                </p>
                                <!-- Requirements will be populated dynamically -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <!-- JavaScript for Modal and API Functionality -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const trackButton = document.getElementById('trackButton');
                const closeModalBtn = document.getElementById('closeModal');
                const applicationModal = document.getElementById('applicationModal');
                const referenceIdInput = document.getElementById('referenceIdInput');
                const loadingSpinner = document.getElementById('loadingSpinner');
                const errorMessage = document.getElementById('errorMessage');
                const errorText = document.getElementById('errorText');
                // Get API URL from environment variable
                const API_BASE_URL = '{{ env("EXTERNAL_API_URL", "http://127.0.0.1:8001") }}';

                // Stage mapping for display purposes
                const stageDisplayNames = {
                    'Registration': 'Application Received',
                    'Validation': 'Validation',
                    'Visitation': 'Site Visitation',
                    'Inspection': 'Compliance Inspection',
                    'Generation': 'Endorsement Generation',
                    'Compliance': 'Compliant',
                    'Mark_Received': 'Received by Regional',
                    'Member_Listing': 'Listing of Members',
                    'Compliance_Check': 'Compliance Check',
                    'Additional_Requirement': 'Additional Documents',
                    'Visitation_Regional': 'Regional Level Visitation',
                    'Qualification': 'Qualification Verification',
                    'Monitoring': 'Under Monitoring',
                    'Verification': 'Verification',
                    'Certification': 'Application Certification',
                    'Assigned_for_Review': 'Assigned for Review'
                };

                // Stage color mapping for visual distinction
                const stageColorMapping = {
                    'Registration': 'bg-blue-50 text-blue-600',
                    'Validation': 'bg-indigo-50 text-indigo-600',
                    'Visitation': 'bg-purple-50 text-purple-600',
                    'Inspection': 'bg-yellow-50 text-yellow-600',
                    'Generation': 'bg-red-50 text-red-600',
                    'Compliance': 'bg-purple-50 text-purple-600',
                    'Mark_Received': 'bg-blue-50 text-blue-600',
                    'Member_Listing': 'bg-yellow-50 text-yellow-600',
                    'Compliance_Check': 'bg-red-50 text-red-600',
                    'Additional_Requirement': 'bg-orange-50 text-orange-600',
                    'Visitation_Regional': 'bg-yellow-50 text-yellow-600',
                    'Qualification': 'bg-red-50 text-red-600',
                    'Monitoring': 'bg-blue-50 text-blue-600',
                    'Verification': 'bg-violet-50 text-violet-600',
                    'Certification': 'bg-yellow-50 text-yellow-600',
                    'Assigned_for_Review': 'bg-yellow-50 text-yellow-600'
                };

                // Helper function to print all top-level keys in an object
                function debugObject(obj, label = 'Object keys') {
                    if (obj && typeof obj === 'object') {
                        console.log(`${label}:`, Object.keys(obj));
                        // Print a sample of each field's value
                        Object.keys(obj).forEach(key => {
                            const value = obj[key];
                            if (value !== null && value !== undefined) {
                                if (Array.isArray(value)) {
                                    console.log(`${key} (array):`, value.length > 0 ? value[0] : 'empty array');
                                } else if (typeof value === 'object') {
                                    console.log(`${key} (object):`, Object.keys(value));
                                } else {
                                    console.log(`${key} (${typeof value}):`, value);
                                }
                            } else {
                                console.log(`${key}: null or undefined`);
                            }
                        });
                    } else {
                        console.log(`${label}: Not an object or null`);
                    }
                }

                // Function to fetch application data from your other Laravel project
                async function fetchApplicationData(applicationId) {
                    try {
                        // Get API URL from environment variable or use default
                        const API_BASE_URL = '{{ env("EXTERNAL_API_URL", "http://127.0.0.1:8001") }}';

                        console.log(`Fetching application data from: ${API_BASE_URL}/api/v1/applications/${applicationId}`);

                        const response = await fetch(`${API_BASE_URL}/api/v1/applications/${applicationId}`, {
                            method: 'GET',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                                // Add authentication if your other API requires it
                                // 'Authorization': 'Bearer your-token-here'
                            }
                        });

                        if (!response.ok) {
                            if (response.status === 404) {
                                throw new Error('Application not found. Please check your Application ID.');
                            } else {
                                throw new Error(`API Error: ${response.status} - ${response.statusText}`);
                            }
                        }

                        const responseData = await response.json();
                        console.log('Full API Response:', responseData);

                        // Use our debug function to print detailed information about the response
                        debugObject(responseData, 'API Response Keys');

                        // If the data is nested in a 'data' property, debug that too
                        if (responseData.data) {
                            debugObject(responseData.data, 'Nested Data Keys');
                        }

                        return responseData;
                    } catch (error) {
                        console.error('API Error:', error);
                        throw error;
                    }
                }

                // Function to populate modal with application data
                function populateModal(data) {
                    // Log the received data to debug
                    console.log('Data for modal:', data);

                    // Based on the API structure from ApplicationController.php
                    // logging the exact field names we're looking for
                    console.log('Title field check:', {
                        application_title: data.application_title
                    });
                    console.log('ID field check:', {
                        application_id: data.application_id
                    });
                    console.log('Contact person check:', data.contact_person);

                    // Update the modal with the received data using the exact field names from the API
                    document.getElementById('modalApplicationTitle').textContent = data.application_title || '-';
                    document.getElementById('modalReferenceId').textContent = data.application_id || '-';

                    // Get contact person name from the nested object
                    let contactPersonName = data.contact_person || '-';
                    document.getElementById('modalProponent').textContent = contactPersonName;

                    // Format date if available
                    document.getElementById('modalDateSubmitted').textContent =
                        data.date_submitted ? new Date(data.date_submitted).toLocaleDateString('en-US', {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        }) : '-';

                    // Update status with color coding
                    const statusTextElement = document.getElementById('modalCurrentStatusText');

                    // Log the status field
                    console.log('Status field check:', {
                        application_status: data.application_status
                    });

                    // Use the exact field name from the API
                    const statusCode = data.application_status || 'Unknown';

                    // Use the more readable display name if available, or fall back to the status code
                    const displayStatus = stageDisplayNames[statusCode] || statusCode;

                    // Update the status text directly
                    if (statusTextElement) {
                        statusTextElement.textContent = displayStatus;
                    }

                    // Populate history timeline
                    const historyTimeline = document.getElementById('modalHistoryTable');
                    const emptyHistoryState = document.getElementById('emptyHistoryState');
                    historyTimeline.innerHTML = '';

                    // Log the stage history field from the API
                    console.log('History field check:', {
                        stage_history: data.stage_history
                    });

                    // Use the exact stage_history field from the API
                    const historyData = data.stage_history || [];
                    console.log('Using history data:', historyData);

                    if (historyData && historyData.length > 0) {
                        // Hide the empty state
                        if (emptyHistoryState) {
                            emptyHistoryState.classList.add('hidden');
                        }

                        // Sort the history data by date in reverse chronological order (newest first)
                        const sortedHistoryData = [...historyData].sort((a, b) => {
                            if (!a.date) return 1;
                            if (!b.date) return -1;
                            return new Date(b.date) - new Date(a.date); // This sorts newest first
                        });

                        // Add a visual label for the most recent activity
                        let firstItem = true;

                        sortedHistoryData.forEach((item, index) => {
                            // Debug each history item to check for conducted_by field
                            console.log(`History item ${index}:`, item, 'Has conducted_by:', item.hasOwnProperty('conducted_by'));

                            const timelineItem = document.createElement('div');
                            timelineItem.className = 'flex gap-4 relative mb-6';

                            // Format the date and time if available
                            let formattedDate = '-';
                            let formattedDay = '-';
                            let formattedTime = '-';
                            let dateColor = 'text-gray-400';
                            if (item.date) {
                                const dateObj = new Date(item.date);
                                formattedDay = dateObj.getDate();
                                const monthStr = dateObj.toLocaleDateString('en-PH', {
                                    month: 'short'
                                });
                                const timeStr = dateObj.toLocaleTimeString('en-PH', {
                                    hour: '2-digit',
                                    minute: '2-digit'
                                });
                                formattedDate = monthStr;
                                formattedTime = timeStr;
                                dateColor = 'text-gray-700';
                            }

                            // Determine the timeline dot color based on status - highlight the most recent activity
                            let dotColor = 'bg-gray-300';
                            let dotBorder = 'border-white';
                            // Default stage class if no mapping exists
                            let stageClass = 'bg-yellow-50 text-yellow-600';
                            let lineColor = 'bg-gray-300';

                            // Get stage-specific color if available
                            if (item.stage && stageColorMapping[item.stage]) {
                                stageClass = stageColorMapping[item.stage];
                            }

                            // Override colors for the most recent activity (first item)
                            if (firstItem) {
                                dotColor = 'bg-green-500';
                                dotBorder = 'border-green-100';
                                stageClass = 'bg-green-100 text-green-700'; // Always green for most recent
                                lineColor = 'bg-green-200';
                                firstItem = false;
                            }

                            timelineItem.innerHTML = `
                                                                                                                                                                                                                                                                                                                                        <!-- Timeline line and dot -->
                                                                                                                                                                                                                                                                                                                                        <div class="relative flex flex-col items-center mr-4">
                                                                                                                                                                                                                                                                                                                                            <div class="h-full w-0.5 ${lineColor} absolute"></div>
                                                                                                                                                                                                                                                                                                                                            <div class="border-2 ${dotBorder} z-10 h-3 w-3 rounded-full ${dotColor} shadow-sm"></div>
                                                                                                                                                                                                                                                                                                                                        </div>

                                                                                                                                                                                                                                                                                                                                        <!-- Content on the right -->
                                                                                                                                                                                                                                                                                                                                        <div class="flex-1 bg-white rounded-xl shadow-sm border border-gray-100 p-4">
                                                                                                                                                                                                                                                                                                                                            <!-- Status badge at top -->
                                                                                                                                                                                                                                                                                                                                            <div class="${stageClass} inline-block text-xs font-medium px-3 py-1 rounded-xl mb-2">
                                                                                                                                                                                                                                                                                                                                                ${stageDisplayNames[item.stage] || item.stage || 'Unknown Stage'}
                                                                                                                                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                                                                                                                                            <!-- Main content -->
                                                                                                                                                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                                                                                                                                                ${item.remarks ? `<p class="text-sm text-gray-800 font-medium mb-2">${item.remarks}</p>` : ''}

                                                                                                                                                                                                                                                                                                                                                <!-- Person and date/time with icons -->
                                                                                                                                                                                                                                                                                                                                                <div class="flex items-center mt-2">
                                                                                                                                                                                                                                                                                                                                                    <!-- Person icon and name -->
                                                                                                                                                                                                                                                                                                                                                    <div class="flex items-center text-xs text-gray-600 mr-4">
                                                                                                                                                                                                                                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                                                                                                                                                                                                                                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                                                                                                                                                                                                                                                                                                                        </svg>
                                                                                                                                                                                                                                                                                                                                                        <span>${item.conducted_by || 'Unknown Staff'}</span>
                                                                                                                                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                                                                                                                                    <!-- Time/date icon and info -->
                                                                                                                                                                                                                                                                                                                                                    <div class="flex items-center text-xs text-gray-600">
                                                                                                                                                                                                                                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                                                                                                                                                                                                                                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                                                                                                                                                                                                                                                                                                        </svg>
                                                                                                                                                                                                                                                                                                                                                        <span>${formattedDay} ${formattedDate}, ${formattedTime}</span>
                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                    `;

                            historyTimeline.appendChild(timelineItem);
                        });
                    } else {
                        // Show the empty state
                        if (emptyHistoryState) {
                            emptyHistoryState.classList.remove('hidden');
                        }
                    }

                    // Populate requirements
                    const requirementsContainer = document.getElementById('modalRequirements');
                    requirementsContainer.innerHTML = '';

                    // Log the requirements field from the API
                    console.log('Requirements check:', {
                        requirements: data.requirements
                    });

                    const requirementsData = data.requirements || [];
                    console.log('Requirements data:', requirementsData);

                    // Get the no requirements message element
                    const noRequirementsMsg = document.getElementById('noRequirementsMsg');

                    if (requirementsData && requirementsData.length > 0) {
                        // Find missing requirements
                        const missingRequirements = requirementsData.filter(req => {
                            const reqStatus = (req.status || '').toLowerCase();
                            return reqStatus === 'missing' || reqStatus === 'kulang' || reqStatus === 'hindi kumpleto';
                        });

                        if (missingRequirements.length > 0) {
                            // Hide the no requirements message
                            if (noRequirementsMsg) {
                                noRequirementsMsg.style.display = 'none';
                            }

                            // Add warning header
                            const warningHeader = document.createElement('div');
                            warningHeader.className = 'bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4';
                            warningHeader.innerHTML = `
                                                                                                                                                                                                                                                                                                                                                                <div class="flex items-center">
                                                                                                                                                                                                                                                                                                                                                                    <div class="flex-shrink-0">
                                                                                                                                                                                                                                                                                                                                                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                                                                                                                                                                                                                                                                                                                                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                                                                                                                                                                                                                                                                                                                                        </svg>
                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                    <div class="ml-3">
                                                                                                                                                                                                                                                                                                                                                                        <p class="text-sm text-yellow-700 font-medium">
                                                                                                                                                                                                                                                                                                                                                                            Paalala! Ang mga sumusunod na kinakailangang dokumento ay hindi pa kumpleto o kulang sa inyong aplikasyon.
                                                                                                                                                                                                                                                                                                                                                                        </p>
                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                            `;
                            requirementsContainer.appendChild(warningHeader);

                            // Create a list for missing requirements
                            const list = document.createElement('ul');
                            list.className = 'space-y-2 mb-4';
                            requirementsContainer.appendChild(list);

                            // Add each missing requirement to the list
                            missingRequirements.forEach(req => {
                                const reqName = req.requirement_name || 'Unknown Requirement';

                                const listItem = document.createElement('li');
                                listItem.className = 'flex items-center text-sm py-2 px-1 border-b border-gray-100';
                                listItem.innerHTML = `
                                                                                                                                                                                                                                                                                                                                                                    <svg class="h-4 w-4 text-red-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                                                                                                                                                                                                                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                                                                                                                                                                                                                                                                                                                    </svg>
                                                                                                                                                                                                                                                                                                                                                                    <span class="text-gray-800">${reqName}</span>
                                                                                                                                                                                                                                                                                                                                                                `;
                                list.appendChild(listItem);
                            });

                            // Add note in Tagalog with icon
                            const noteElement = document.createElement('div');
                            noteElement.className = 'mt-4 text-sm text-gray-600 pt-3 border-t border-gray-100 bg-gray-50 rounded-lg p-4';
                            noteElement.innerHTML = `
                                                                                                                                                                                                                                                                                                                                                                <div class="flex items-start">
                                                                                                                                                                                                                                                                                                                                                                    <div class="flex-shrink-0 mt-1">
                                                                                                                                                                                                                                                                                                                                                                        <svg class="h-5 w-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                                                                                                                                                                                                                                                                                                                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                                                                                                                                                                                                                                                                                                                                                        </svg>
                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                    <div class="ml-3">
                                                                                                                                                                                                                                                                                                                                                                        <p class="mb-2 mt-1 font-medium">
                                                                                                                                                                                                                                                                                                                                                                            <span class="text-green-700">Mahalagang Paalala:</span>
                                                                                                                                                                                                                                                                                                                                                                        </p>
                                                                                                                                                                                                                                                                                                                                                                        <p class="mb-3">
                                                                                                                                                                                                                                                                                                                                                                            Kinakailangan pong maipasa ang mga kulang na dokumento para maiproseso nang mabilis ang inyong aplikasyon.
                                                                                                                                                                                                                                                                                                                                                                        </p>
                                                                                                                                                                                                                                                                                                                                                                        <p class="flex items-center italic">
                                                                                                                                                                                                                                                                                                                                                                            Maaari po ninyong ipasa ang mga kulang na dokumento sa opisina ng PCA.
                                                                                                                                                                                                                                                                                                                                                                        </p>
                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                            `;
                            requirementsContainer.appendChild(noteElement);
                        } else {
                            // All requirements are complete
                            if (noRequirementsMsg) {
                                noRequirementsMsg.style.display = 'none';
                            }

                            const completeMessage = document.createElement('div');
                            completeMessage.className = 'bg-green-50 border-l-4 border-green-400 p-4';
                            completeMessage.innerHTML = `
                                                                                                                                                                                                                                                                                                                                                                <div class="flex">
                                                                                                                                                                                                                                                                                                                                                                    <div class="flex-shrink-0">
                                                                                                                                                                                                                                                                                                                                                                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                                                                                                                                                                                                                                                                                                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                                                                                                                                                                                                                                                                                                                                        </svg>
                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                    <div class="ml-3">
                                                                                                                                                                                                                                                                                                                                                                        <p class="text-sm text-green-700">
                                                                                                                                                                                                                                                                                                                                                                            Lahat ng kinakailangang dokumento ay kumpleto na.
                                                                                                                                                                                                                                                                                                                                                                        </p>
                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                            `;
                            requirementsContainer.appendChild(completeMessage);
                        }
                    } else {
                        // No requirements data available
                        if (noRequirementsMsg) {
                            noRequirementsMsg.textContent = 'Hindi pa available ang listahan ng mga kinakailangang dokumento.';
                        }
                    }
                }

                // Close modal function
                function closeModalFunc() {
                    // First add the fadeout class
                    applicationModal.classList.add('opacity-0');
                    // Then after animation completes, hide it
                    setTimeout(() => {
                        applicationModal.classList.add('hidden');
                        applicationModal.classList.remove('opacity-0');
                        errorMessage.classList.add('hidden');
                        loadingSpinner.classList.add('hidden');
                    }, 300);
                }

                // Track button click handler
                trackButton.addEventListener('click', async function (e) {
                    e.preventDefault();

                    const applicationId = referenceIdInput.value.trim();

                    if (!applicationId) {
                        alert('Please enter an Application ID');
                        return;
                    }

                    // Show loading state
                    loadingSpinner.classList.remove('hidden');
                    errorMessage.classList.add('hidden');
                    trackButton.disabled = true;
                    // Save the original content
                    const originalButtonContent = trackButton.innerHTML;
                    trackButton.innerHTML = '<div class="animate-pulse">Searching...</div>';

                    try {
                        console.log('Attempting to fetch application:', applicationId);
                        const response = await fetchApplicationData(applicationId);

                        if (!response) {
                            throw new Error('No data received from API');
                        }

                        // Print the entire response structure to help with debugging
                        console.log('Full API response structure:', response);

                        // Based on the ApplicationController.php, the API response is:
                        // { success: true, message: "...", data: { ... } }
                        // So we need to extract the data property
                        let applicationData;

                        if (response.success === true && response.data) {
                            // The API is returning the expected format with a nested data object
                            applicationData = response.data;
                            console.log('Using nested data from response.data as expected');
                        } else {
                            // Fallback - use the response itself
                            applicationData = response;
                            console.log('WARNING: Unexpected API response format, using direct response data');
                        }

                        console.log('Processing data for modal display:', applicationData);
                        populateModal(applicationData);

                        // Show modal with animation
                        applicationModal.classList.remove('hidden');
                        applicationModal.classList.add('opacity-0');
                        setTimeout(() => {
                            applicationModal.classList.remove('opacity-0');
                        }, 10);
                    } catch (error) {
                        console.error('Error in track button handler:', error);
                        errorText.textContent = error.message;
                        errorMessage.classList.remove('hidden');
                    } finally {
                        loadingSpinner.classList.add('hidden');
                        trackButton.disabled = false;
                        // Restore the original SVG icon
                        trackButton.innerHTML = `
                                                                                                                                                                                                                                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                                                                                                                                                                                                                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                                                                                                                                                                                                                                                                                                            </svg>`;
                    }
                });

                // Close modal event listeners
                if (closeModalBtn) {
                    closeModalBtn.addEventListener('click', closeModalFunc);
                }

                // Add listener for the bottom close button
                const closeModalBtnBottom = document.getElementById('closeModalBtn');
                if (closeModalBtnBottom) {
                    closeModalBtnBottom.addEventListener('click', closeModalFunc);
                }

                // Close modal when clicking outside
                applicationModal.addEventListener('click', function (e) {
                    if (e.target === applicationModal) {
                        closeModalFunc();
                    }
                });

                // Close modal with Escape key
                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape' && !applicationModal.classList.contains('hidden')) {
                        closeModalFunc();
                    }
                });

                // Error modal close button event listener
                const closeErrorModalBtn = document.getElementById('closeErrorModal');
                if (closeErrorModalBtn) {
                    closeErrorModalBtn.addEventListener('click', function () {
                        errorMessage.classList.add('hidden');
                    });
                }

                // Clear error when user starts typing
                referenceIdInput.addEventListener('input', function () {
                    errorMessage.classList.add('hidden');
                });
            });
        </script>

        <!-- CFIDP Introduction -->
        <section class="py-16 sm:py-20 bg-gradient-to-br from-green-50 via-white to-green-50">
            <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header with decorative line -->
                <div class="text-center mb-12">
                    <div class="inline-block">
                        <h2 class="text-2xl md:text-4xl lg:text-5xl font-bold text-green-900 mb-2">
                            <span style="color: #09ca59ff;">CFIDP:</span> Para saan ito?
                        </h2>
                        <div class="h-1 bg-gradient-to-r from-transparent via-green-500 to-transparent rounded-full"></div>
                    </div>
                </div>

                <!-- Content Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <!-- Text Content -->
                    <div class="order-2 lg:order-1">
                        <p class="text-gray-700 text-sm lg:text-base leading-relaxed text-justify mb-6">
                            Ang Coconut Farmers and Industry Development Plan (CFIDP) ay isang pangunahing programa ng
                            pamahalaan sa ilalim ng Republic Act No. 11524.
                            Layunin nitong tugunan ang mga pangangailangan ng mga magniniyog at paunlarin ang industriya ng
                            niyog sa Pilipinas.
                            Sa pamamagitan ng CFIDP, inaasahang mapapataas ang kita ng mga magniniyog, mabibigyan sila ng crop
                            insurance, at maisusulong ang edukasyon ng kanilang mga anak.
                        </p>

                        <p class="text-gray-700 text-sm lg:text-base leading-relaxed text-justify mb-6">
                            Kasama rin sa programa ang modernisasyon ng sektor sa tulong ng makabagong teknolohiya, research, at
                            sustainable farming practices tulad ng replanting at intercropping (halimbawa: pagtatanim ng kape o
                            cacao kasabay ng niyog).
                            Pinopondohan ang programang ito mula sa Coconut Levy Trust Fund.
                        </p>


                        <!-- CTA Button -->
                        <a href="/coconut-farmers-faq" target="_blank"
                            class="inline-flex items-center gap-2 px-6 py-3 text-white font-semibold text-sm rounded-lg shadow-md hover:shadow-lg transition-all duration-200"
                            style="background-color: #09ca59ff;">
                            Alamin ang buong detalye
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6">
                                </path>
                            </svg>
                        </a>
                    </div>

                    <!-- Image Carousel -->
                    <div class="order-1 lg:order-2">
                        <div class="relative bg-white rounded-2xl shadow-xl p-3 border border-gray-100">
                            <!-- Carousel Container -->
                            <div class="relative overflow-hidden rounded-xl" style="aspect-ratio: 4/3;">
                                <!-- Carousel Images -->
                                <div class="carousel-images">
                                    <img src="/images/img/cfidpgp.png" alt="CFIDP Program"
                                        class="carousel-image active absolute inset-0 w-full h-full object-cover transition-opacity duration-700">
                                    <img src="/images/img/ca-1.jpg" alt="Health Program"
                                        class="carousel-image absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
                                    <img src="/images/img/ca-2.jpg" alt="CFIDP Activities"
                                        class="carousel-image absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
                                    <img src="/images/img/ca-3.jpg" alt="CFIDP Activities"
                                        class="carousel-image absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
                                    <img src="/images/img/ca-4.jpg" alt="CFIDP Activities"
                                        class="carousel-image absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
                                </div>

                                <!-- Navigation Arrows -->
                                <button
                                    class="carousel-btn prev absolute left-2 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 p-2 rounded-full shadow-lg transition-all duration-200 z-10 hover:scale-110">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                                <button
                                    class="carousel-btn next absolute right-2 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 p-2 rounded-full shadow-lg transition-all duration-200 z-10 hover:scale-110">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                        </path>
                                    </svg>
                                </button>

                                <!-- Dots Indicator -->
                                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                                    <button
                                        class="carousel-dot w-2.5 h-2.5 rounded-full bg-white shadow-md transition-all duration-200 hover:scale-125"
                                        data-index="0" style="background-color: #09ca59ff;"></button>
                                    <button
                                        class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/70 shadow-md transition-all duration-200 hover:scale-125"
                                        data-index="1"></button>
                                    <button
                                        class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/70 shadow-md transition-all duration-200 hover:scale-125"
                                        data-index="2"></button>
                                    <button
                                        class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/70 shadow-md transition-all duration-200 hover:scale-125"
                                        data-index="3"></button>
                                    <button
                                        class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/70 shadow-md transition-all duration-200 hover:scale-125"
                                        data-index="4"></button>
                                </div>
                            </div>

                            <!-- Image Caption -->
                            <div class="mt-3 text-center">
                                <p class="text-sm text-gray-600 font-medium carousel-caption">CFIDP: Empowering Coconut Farmers
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Application Programs Section -->
        <div class="relative py-16 sm:py-20 overflow-hidden bg-gradient-to-br from-green-50 via-white to-green-50">
            <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Title Section -->
                <div class="text-center mb-12">
                    <div class="inline-block">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-green-900 mb-2">
                            <span style="color: #09ca59ff;">Mga CFIDP Program</span> na maaaring matrack
                        </h2>
                        <p class="text-sm md:text-base text-gray-600 mt-2 font-normal">
                            Ito ang mga programang sakop at maaaring subaybayan sa pamamagitan ng PCAppTrack.
                        </p>
                        <div class="mt-4 h-1 bg-gradient-to-r from-transparent via-green-500 to-transparent rounded-full"></div>
                    </div>
                </div>

                <!-- Program Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Social Protection Program -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                        <!-- Image -->
                        <div class="relative h-48 overflow-hidden">
                            <img src="/images/img/pc-1.jpg" alt="Social Protection"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110 opacity-75">
                            <div class="absolute inset-0 bg-white/15 backdrop-blur-[1.2px]"></div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <!-- Title -->
                            <h3 class="text-xl font-bold text-gray-700 mb-3">
                                Social Protection
                            </h3>

                            <!-- Description -->
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                Nagbibigay ng benepisyo sa kalusugan, scholarship, at insurance para sa mga magsasaka ng niyog.
                            </p>

                            <!-- Button -->
                            <button onclick="document.getElementById('social-protection').scrollIntoView({behavior: 'smooth'})"
                                class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 text-sm font-semibold transition-colors duration-200">
                                Alamin Pa
                                <span class="text-lg">→</span>
                            </button>
                        </div>
                    </div>

                    <!-- Integrated Coconut Processing Program -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                        <!-- Image -->
                        <div class="relative h-48 overflow-hidden">
                            <img src="/images/img/pc-2.jpg" alt="Integrated Coconut Processing"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110 opacity-75">
                            <div class="absolute inset-0 bg-white/15 backdrop-blur-[1.2px]"></div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <!-- Title -->
                            <h3 class="text-xl font-bold text-gray-700 mb-3">
                                Integrated Coconut Processing
                            </h3>

                            <!-- Description -->
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                Nagpapahintulot sa mga magsasaka na iproseso ang niyog upang madagdagan ang kanilang kita.
                            </p>

                            <!-- Button -->
                            <button onclick="document.getElementById('integrated-coconut').scrollIntoView({behavior: 'smooth'})"
                                class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 text-sm font-semibold transition-colors duration-200">
                                Alamin Pa
                                <span class="text-lg">→</span>
                            </button>
                        </div>
                    </div>

                    <!-- Support Services Program -->
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 sm:col-span-2 lg:col-span-1">
                        <!-- Image -->
                        <div class="relative h-48 overflow-hidden">
                            <img src="/images/img/pc-3.jpg" alt="Support Services"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110 opacity-75">
                            <div class="absolute inset-0 bg-white/15 backdrop-blur-[1.2px]"></div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <!-- Title -->
                            <h3 class="text-xl font-bold text-gray-700 mb-3">
                                Support Services
                            </h3>

                            <!-- Description -->
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                Nagbibigay ng tulong pinansyal, kalsada, at serbisyo sa marketing upang suportahan ang mga
                                magsasaka.
                            </p>

                            <!-- Button -->
                            <button onclick="document.getElementById('credit-services').scrollIntoView({behavior: 'smooth'})"
                                class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 text-sm font-semibold transition-colors duration-200">
                                Alamin Pa
                                <span class="text-lg">→</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Requirements Section -->
        <div id="documents-needed" class="bg-white py-16 sm:py-20">
            <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <div class="inline-block">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-green-900 mb-2">
                            Mga Kailangan sa <span style="color: #09ca59ff;">CFIDP Application</span>
                        </h2>
                        <p class="text-sm md:text-base text-gray-600 mt-2 font-normal">
                            Gabay para sa mga magniniyog na Pilipino na nais mag-apply sa iba't-ibang CFIDP programs
                        </p>
                        <div class="mt-4 h-1 bg-gradient-to-r from-transparent via-green-500 to-transparent rounded-full"></div>
                    </div>
                </div>

                <!-- Components Grid - 2 columns on large screens -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Social Protection Section -->
                    <x-social-protection-section />

                    <!-- Integrated Coconut Processing Section -->
                    <x-integrated-coconut-section />

                    <!-- Credit Section -->
                    <x-credit-section />

                    <!-- Infrastructure Section -->
                    <x-infrastructure-section />
                </div>

            </div>
        </div>


        <!-- Scroll Animation Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Intersection Observer for scroll animations
                const observerOptions = {
                    threshold: 0.2,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver(function (entries) {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            // Add the animation classes when element comes into view
                            entry.target.classList.add('animate-in');
                            entry.target.classList.remove('opacity-0', 'translate-y-8');
                            entry.target.classList.add('opacity-100', 'translate-y-0');

                            // Animate all child elements simultaneously
                            const children = entry.target.querySelectorAll('h1, h2, p');
                            children.forEach((child) => {
                                child.classList.add('opacity-100', 'translate-y-0');
                                child.classList.remove('opacity-0', 'translate-y-4');
                            });
                        }
                    });
                }, observerOptions);

                // Observe all elements with scroll-animate class
                const animateElements = document.querySelectorAll('.scroll-animate');
                animateElements.forEach(element => {
                    observer.observe(element);
                });

                // Add initial styles to child elements
                const titleElements = document.querySelectorAll('.scroll-animate h1, .scroll-animate h2, .scroll-animate p');
                titleElements.forEach(element => {
                    element.classList.add('opacity-0', 'translate-y-4');
                });
            });
        </script>

        <!-- Additional CSS for enhanced animations -->
        <style>
            .scroll-animate {
                transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }

            .scroll-animate.animate-in {
                animation: floatUp 1s ease-out forwards;
            }

            @keyframes floatUp {
                0% {
                    opacity: 0;
                    transform: translateY(30px);
                }

                50% {
                    opacity: 0.7;
                    transform: translateY(-5px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .scroll-animate h1,
            .scroll-animate h2,
            .scroll-animate p {
                transition: all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }

            /* Hover effect enhancement */
            .scroll-animate:hover {
                transform: translateY(-2px);
            }
        </style>
        </div>
        </div>

        <section class="py-16 sm:py-20 bg-gradient-to-br from-green-50 via-white to-green-50">
            <!-- Title Section with container -->
            <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <div class="inline-block">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-green-900 mb-2">
                            Implementing Agencies ng<span style="color: #09ca59ff;"> CFIDP</span>
                        </h2>
                        <p class="text-sm md:text-base text-gray-600 mt-2 font-normal">
                            Mga ahensya ng gobyerno na tumutulong sa pagpapatupad ng CFIDP programs
                        </p>
                        <div class="mt-4 h-1 bg-gradient-to-r from-transparent via-green-500 to-transparent rounded-full"></div>
                    </div>
                </div>
            </div>

            <!-- Truly seamless, infinite scroll carousel - Full width, no padding -->
            <div class="logo-scroll-container overflow-hidden w-full relative">
                <!-- First logo track -->
                <div class="logo-track flex items-center py-4" id="logoTrack1">
                    <!-- Original set of logos -->
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center">
                            <img src="/images/IA logos/DA.svg" alt="DA Logo">
                        </div>
                        <p>Department of Agriculture</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/TESDA.svg" alt="TESDA Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Technical Education and Skills Development Authority</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/HVCDP.svg" alt="HVCDP Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>High-Value Crops Development Program</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/BAI.svg" alt="BAI Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Bureau of Animal Industry</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DTI.svg" alt="DTI Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Trade and Industry</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DOST.svg" alt="DOST Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Science and Technology</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/CHED.svg" alt="CHED Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Commission on Higher Education</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/CDA.svg" alt="CDA Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Cooperative Development Authority</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/PCIC.svg" alt="PCIC Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Philippine Crop Insurance Corporation</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/ATI.svg" alt="ATI Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Agricultural Training Institute</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/LBP.svg" alt="LBP Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Land Bank of the Philippines</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/NDA.svg" alt="NDA Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>National Dairy Authority</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DBP.svg" alt="DBP Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Development Bank of the Philippines</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DPWH.svg" alt="DPWH Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Public Works and Highways</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/PM.svg" alt="PhilMech Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>PhilMech</p>
                    </div>
                </div>

                <!-- Second logo track (duplicate for seamless effect) -->
                <div class="logo-track flex items-center py-4" id="logoTrack2">
                    <!-- Duplicate set of logos -->
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DA.svg" alt="DA Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Agriculture</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/TESDA.svg" alt="TESDA Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Technical Education and Skills Development Authority</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/HVCDP.svg" alt="HVCDP Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>High-Value Crops Development Program</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/BAI.svg" alt="BAI Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Bureau of Animal Industry</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DTI.svg" alt="DTI Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Trade and Industry</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DOST.svg" alt="DOST Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Science and Technology</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/CHED.svg" alt="CHED Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Commission on Higher Education</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/CDA.svg" alt="CDA Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Cooperative Development Authority</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/PCIC.svg" alt="PCIC Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Philippine Crop Insurance Corporation</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/ATI.svg" alt="ATI Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Agricultural Training Institute</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/LBP.svg" alt="LBP Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Land Bank of the Philippines</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/NDA.svg" alt="NDA Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>National Dairy Authority</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DBP.svg" alt="DBP Logo" class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Development Bank of the Philippines</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DPWH.svg" alt="DPWH Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Public Works and Highways</p>
                    </div>
                    <div class="logo-item">
                        <div class="logo-circle rounded-full bg-white p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/PM.svg" alt="PhilMech Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>PhilMech</p>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Floating Back to Programs Button -->
        <div id="back-to-top"
            class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 lg:bottom-8 lg:right-8 z-50 opacity-0 transition-all duration-300 pointer-events-none">
            <button onclick="scrollToPrograms()"
                class="flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 lg:w-12 lg:h-12 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:scale-110 group"
                style="background-color: #09ca59ff; border: 2px solid white;">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 transform group-hover:-translate-y-1 transition-transform duration-300" viewBox="0 0 24 24"
                    fill="none">
                    <path d="M12 4L12 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18 10L12 4L6 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>

        <script>
            // Back to programs functionality
            const backToTopButton = document.getElementById('back-to-top');
            const documentsSection = document.getElementById('documents-needed');

            // Function to scroll to Application Programs Section
            function scrollToPrograms() {
                // Find the Application Programs Section
                const programsSection = document.querySelector('div[style*="background-color:rgb(230, 253, 212)"]');
                if (programsSection) {
                    programsSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                } else {
                    // Fallback: scroll to top if section not found
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }
            }

            // Show/hide button based on scroll position
            function toggleBackToTopButton() {
                if (documentsSection) {
                    const rect = documentsSection.getBoundingClientRect();
                    const isVisible = rect.top <= window.innerHeight && rect.bottom >= 0;

                    if (isVisible || window.pageYOffset > documentsSection.offsetTop) {
                        backToTopButton.classList.add('show-floating-button');
                        backToTopButton.classList.remove('opacity-0', 'pointer-events-none');
                    } else {
                        backToTopButton.classList.remove('show-floating-button');
                        backToTopButton.classList.add('opacity-0', 'pointer-events-none');
                    }
                }
            }

            // Listen for scroll events with throttling for better performance
            let scrollTimeout;
            window.addEventListener('scroll', function () {
                if (scrollTimeout) {
                    clearTimeout(scrollTimeout);
                }
                scrollTimeout = setTimeout(toggleBackToTopButton, 10);
            });

            // Initial check
            document.addEventListener('DOMContentLoaded', toggleBackToTopButton);
        </script>

        <style>
            /* Floating button styles */
            .show-floating-button {
                opacity: 1 !important;
                pointer-events: auto !important;
            }

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

            #back-to-top button {
                animation: pulse-shadow 2s infinite;
            }
        </style>

        <!-- Tab Navigation Script -->
        <script>
            // Toggle tab with collapse/expand functionality
            function toggleTab(tabId) {
                // Find the parent section
                const clickedButton = event.currentTarget;
                const parentSection = clickedButton.closest('#social-protection, #integrated-coconut, #credit-services, #infrastructure-services');

                if (!parentSection) return;

                const targetTab = document.getElementById(tabId);
                const isCurrentlyVisible = !targetTab.classList.contains('hidden');

                // Both sections use green color scheme
                const activeColors = ['bg-green-50', 'text-green-600', 'border-green-200'];
                const inactiveColors = ['bg-white', 'text-gray-600', 'border-gray-200'];

                // If clicking the same tab that's already open, collapse it
                if (isCurrentlyVisible && clickedButton.classList.contains('active')) {
                    targetTab.classList.add('hidden');
                    clickedButton.classList.remove(...activeColors, 'active');
                    clickedButton.classList.add(...inactiveColors);
                    // Rotate arrow up (collapsed state)
                    clickedButton.querySelector('.tab-icon').style.transform = 'rotate(180deg)';
                    return;
                }

                // Hide all tabs in this section
                parentSection.querySelectorAll('.tab-content').forEach(tab => {
                    tab.classList.add('hidden');
                });

                // Remove active state from all buttons and rotate arrows up
                parentSection.querySelectorAll('.tab-button').forEach(button => {
                    button.classList.remove(...activeColors, 'active');
                    button.classList.add(...inactiveColors);
                    button.querySelector('.tab-icon').style.transform = 'rotate(180deg)';
                });

                // Show selected tab
                targetTab.classList.remove('hidden');

                // Add active state to clicked button
                clickedButton.classList.remove(...inactiveColors);
                clickedButton.classList.add(...activeColors, 'active');
                // Rotate arrow down (expanded state)
                clickedButton.querySelector('.tab-icon').style.transform = 'rotate(0deg)';
            }
        </script>
    @endpush

@endsection