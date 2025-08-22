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
    <section class="bg-green-50 py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <!-- Text Section (moved first for left-side position) -->
            <div class="text-sm w-full md:w-1/2 text-left md:pr-8 mb-6 md:mb-0 -mt-6 px-10 lg:px-6">
                <h1 class="text-4xl md:text-6xl font-extrabold text-green-900 mb-5 mt-0">
                    Application <span style="color: #09ca59ff;">Tracking </span> System
                </h1>
                <p class="text-sm lg:text-base text-justify mb-6 mt-2">
                    <span class="font-light text-gray-800">Ang PCAppTrack
                        ay isang online
                        na sistema ng programang CFIDP sa ilalim ng PCA Region V na tumutulong sa
                        pagsubaybay ng mga aplikasyon sa ilalim ng CFIDP. Gamit ang reference ID, mas madaling masilip
                        ang status
                        ng aplikasyon — walang login na kailangan

                        <br> <br>Mabilis. Organisado. Para sa mga magniniyog na Pilipino.</span>


                </p>
                <a href="#track-section"
                    class="track-btn inline-block text-white font-bold px-6 py-2 rounded letter-spacing-wider"
                    style="background-color: #09ca59ff; transition: background-color 0.2s;"
                    onmouseover="this.style.backgroundColor='#01cc41ff'"
                    onmouseout="this.style.backgroundColor='#09ca59ff'">
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
    <section id="track-section" class="py-16 relative overflow-hidden" style="background-color:rgb(230, 253, 212);">
        <!-- Decorative leaf images for background -->
        <div class="absolute left-0 top-0 opacity-20">
            <img src="/images/img/leaf-left.svg" alt="left leaf" class="h-100 mr-20">
        </div>
        <div class="absolute right-0 bottom-0 opacity-20">
            <img src="/images/img/leaf-right.svg" alt="right leaf" class="h-100">
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img src="/images/img/PCAPPTRACK.svg" alt="PCAppTrack Logo"
                    class="w-full max-w-xs sm:max-w-lg md:max-w-md lg:max-w-lg xl:max-w-2xl h-auto mx-auto">
                <p class="text-sm text-gray-600 mb-8 max-w-2xl mx-auto px-4 -mt-2 md:-mt-6 lg:-mt-6">
                    Ilagay lamang ang iyong natatanging Reference ID sa itinakdang field.
                </p>
            </div>
            <div class="flex max-w-md mx-auto text-sm lg:text-base px-4 sm:px-8 md:px-2 lg:px-4">
                <input type="text" id="referenceIdInput" placeholder="Ilagay ang iyong reference ID"
                    class="flex-grow px-4 py-2 rounded-l border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm placeholder:text-xs">
                <button id="trackButton" type="button" class="px-6 py-2 rounded-r text-white font-semibold"
                    style="background-color: #09ca59ff;">
                    Track
                </button>
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
                                            <li>Ang iyong Reference ID ay tama</li>
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
                    <div class="bg-gradient-to-r from-green-500 to-green-400 p-4 sm:p-6 rounded-t-xl relative overflow-hidden">
                        <!-- Decorative elements -->
                        <div class="absolute top-0 right-0 w-24 sm:w-32 h-24 sm:h-32 bg-white opacity-10 rounded-full -mt-8 sm:-mt-12 -mr-8 sm:-mr-12">
                        </div>
                        <div class="absolute bottom-0 left-0 w-16 sm:w-24 h-16 sm:h-24 bg-white opacity-10 rounded-full -mb-8 sm:-mb-12 -ml-8 sm:-ml-12">
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
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                    </path>
                                </svg>
                                <h3 class="text-base font-bold text-gray-900">Application Information</h3>
                            </div>

                            <!-- Application Information Form -->
                            <div class="mb-6 space-y-4">
                                <div class="mb-3">
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Application
                                        Title</label>
                                    <div class="border border-gray-300 rounded-md p-2 bg-white text-sm text-gray-800"
                                        id="modalApplicationTitle">-</div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Reference
                                            ID</label>
                                        <div class="border border-gray-300 rounded-md p-2 bg-white text-sm text-gray-800"
                                            id="modalReferenceId">-</div>
                                    </div>

                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Date
                                            Submitted:</label>
                                        <div class="border border-gray-300 rounded-md p-2 bg-white text-sm text-gray-800"
                                            id="modalDateSubmitted">-</div>
                                    </div>

                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Contact
                                            Person</label>
                                        <div class="border border-gray-300 rounded-md p-2 bg-white text-sm text-gray-800"
                                            id="modalProponent">-</div>
                                    </div>


                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Application
                                            Status:</label>
                                        <div class="border border-gray-300 rounded-md p-2 bg-white text-sm text-gray-800"
                                            id="modalCurrentStatus">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Application History -->
                        <div class="mb-8">
                            <div class="flex items-center mb-4 space-x-2">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
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
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2M9 12h6m-6 4h6">
                                    </path>
                                </svg>
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
                        data.date_submitted ? new Date(data.date_submitted).toLocaleDateString() : '-';

                    // Update status with color coding
                    const statusElement = document.getElementById('modalCurrentStatus');

                    // Log the status field
                    console.log('Status field check:', {
                        application_status: data.application_status
                    });

                    // Use the exact field name from the API
                    const status = data.application_status || 'Unknown';
                    statusElement.textContent = status;

                    // Keep the border styling but update the text style
                    statusElement.className = 'border border-gray-300 rounded-md p-2 bg-white text-sm font-semibold text-green-700';

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
                            const timelineItem = document.createElement('div');
                            timelineItem.className = 'pl-10 relative';

                            // Format the date and time if available
                            let formattedDate = '-';
                            let dateColor = 'text-gray-400';
                            if (item.date) {
                                const dateObj = new Date(item.date);
                                const dateStr = dateObj.toLocaleDateString('en-PH', {
                                    year: 'numeric',
                                    month: 'short',
                                    day: 'numeric'
                                });
                                const timeStr = dateObj.toLocaleTimeString('en-PH', {
                                    hour: '2-digit',
                                    minute: '2-digit'
                                });
                                formattedDate = dateStr;
                                timeFormatted = timeStr;
                                dateColor = 'text-green-600';
                            }

                            // Determine the timeline dot color based on status - highlight the most recent activity
                            let dotColor = 'bg-gray-300';
                            let itemClass = '';

                            if (firstItem) {
                                dotColor = 'bg-green-500';
                                itemClass = 'border-green-100 bg-green-50';
                                firstItem = false;
                            }

                            timelineItem.innerHTML = `
                                                <!-- Timeline dot -->
                                                <div class="absolute left-0 top-1 mt-1">
                                                    <div class="border-2 border-white h-2 w-2 rounded-full ${dotColor} shadow-sm"></div>
                                                </div>

                                                <!-- Content -->
                                                <div class="rounded-lg border border-gray-200 ${itemClass} p-2 shadow-sm ${index === 0 ? 'relative' : ''}">
                                                    ${index === 0 ? `<div class="absolute -top-2 -right-2 bg-green-500 text-white text-xs px-2 py-0.5 rounded-full shadow-sm">Latest Update</div>` : ''}
                                                    <!-- Header with date and status -->
                                                    <div class="flex justify-between items-center mb-1 flex-wrap">
                                                        <div class="flex items-center ${dateColor} text-xs">
                                                            <svg class="w-2.5 h-2.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                            </svg>
                                                            <span>${formattedDate}</span>
                                                            <span class="mx-1 text-gray-300">•</span>
                                                            <span class="text-xs text-gray-400">${timeFormatted || ''}</span>
                                                        </div>
                                                        <div>
                                                            <span class="inline-flex items-center px-1.5 py-0.5 rounded text-sm font-medium bg-green-50 text-green-700">
                                                                ${item.stage || 'Unknown Stage'}
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <!-- Body content -->
                                                    <div class="space-y-1">
                                                        ${item.remarks ? `<p class="text-sm text-gray-800 font-medium px-6">${item.remarks}</p>` : ''}
                                                        ${item.action_taken ? `<p class="text-xs text-gray-600 px-6">Action: ${item.action_taken}</p>` : ''}
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
                                                        <p class="mb-2 font-medium">
                                                            <span class="font-bold text-green-700">Mahalaga:</span>
                                                        </p>
                                                        <p class="mb-3">
                                                            Kinakailangan pong maipasa ang mga kulang na dokumento para maiproseso nang mabilis ang inyong aplikasyon.
                                                        </p>
                                                        <p class="flex items-center">
                                                            <svg class="h-4 w-4 text-green-600 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                                            </svg>
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
                    trackButton.textContent = 'Searching...';

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
                        trackButton.textContent = 'Track';
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
        <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
            <h2 class="text-xl md:text-4xl font-bold text-green-900 mb-1 ml-5">ANO ANG <span
                    style="color: #09ca59ff;">CFIDP?</span></h2>
            <div class="flex flex-col md:flex-row items-center text-sm text-justify gap-9 ml-5 mr-4">
                <div class="flex-1">
                    <p class="text-gray-700 text-sm lg:text-base leading-relaxed mt-0 lg:mt-3 mr-5">Ang Coconut Farmers and
                        Industry Development
                        Plan (CFIDP)
                        ay isang pangunahing programa ng pamahalaan sa ilalim ng
                        Republic Act No. 11524, na idinisenyo upang tugunan ang pangangailangan ng mga magniniyog at
                        palaguin
                        ang industriya ng niyog sa Pilipinas. Layunin ng CFIDP na
                        paunlarin ang kabuhayan ng 2.5 milyong magniniyog sa pamamagitan ng pagtaas ng kita, pagbibigay ng
                        seguro sa pananim, at pag-aaral para sa kanilang mga anak.
                        Kasama rin dito ang modernisasyon ng sektor sa tulong ng makabagong teknolohiya, pananaliksik, at
                        sustainable farming practices tulad ng replanting ng mga puno at intercropping
                        (hal. pagtatanim ng kape o cacao kasama ng niyog). Pinopondohan ang programang ito mula sa Coconut
                        Levy
                        Trust Fund.</p>
                    <a href="/coconut-farmers-faq" target="_blank" class="inline-block mt-3 text-base font-medium"
                        style="color: #09ca59ff; transition: color 0.2s;" onmouseover="this.style.color='#079510'"
                        onmouseout="this.style.color='#09ca59ff'">
                        Read more <span class="ml-1">→</span>
                    </a>
                </div>
                <img src="/images/img/cfidpgp.png" alt="CFIDP Group Photo"
                    class="w-full h-auto sm:w-4/5 md:w-3/5 lg:w-full xl:w-1/2 2xl:w-3/5 max-w-lg mx-auto md:mx-0 mt-0 lg:-mt-10 sm:mt-0">
            </div>
        </section>

        <!-- Application Programs Section -->
        <div class="min-h-screen" style="background-color:rgb(230, 253, 212);">
            <div class="container mx-auto px-4 py-8">
                <!-- Title Section -->
                <div class="text-center mb-8 scroll-animate opacity-0 translate-y-8 transition-all duration-1000 ease-out">
                    <h1 class="text-2xl md:text-5xl font-bold text-green-800 mb-2 mt-10 transform transition-all duration-700">
                        APPLICATION BASED</h1>
                    <h2 class="text-2xl md:text-5xl font-bold text-green-800 mb-4 transform transition-all duration-700">
                        PROGRAMS OF PCA-CFIDP</h2>
                    <p class="text-xs md:text-base text-gray-600 transform transition-all duration-700">MGA PROGRAMANG
                        NAKABATAY SA APLIKASYON NG PCA-CFIDP</p>
                </div>

                <!-- Program Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8 mb-12 max-w-7xl mx-auto">
                    <!-- Social Protection Program -->
                    <div
                        class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 overflow-hidden group">
                        <div class="p-6 sm:p-8 flex flex-col h-full text-center">
                            <div class="flex items-center justify-center mb-4">
                                <div class="w-12 h-12 rounded-lg flex items-center justify-center"
                                    style="background-color:rgba(216, 247, 191, 1);">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 leading-tight">Social Protection</h3>
                            <p class="text-gray-600 text-sm mb-6 line-clamp-3 flex-grow">Nagbibigay ng benepisyo
                                sa kalusugan, scholarship, at insurance para sa mga magsasaka ng niyog.</p>
                            <button onclick="document.getElementById('social-protection').scrollIntoView({behavior: 'smooth'})"
                                class="w-full text-white px-6 py-3 rounded-lg text-sm sm:text-base font-semibold transition-all duration-200 transform group-hover:scale-105 mt-auto hover:opacity-90"
                                style="background-color: #09ca59ff;">
                                Alamin Pa
                                <svg class="w-4 h-4 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Integrated Coconut Processing Program -->
                    <div
                        class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 overflow-hidden group">
                        <div class="p-6 sm:p-8 flex flex-col h-full text-center">
                            <div class="flex items-center justify-center mb-4">
                                <div class="w-12 h-12 rounded-lg flex items-center justify-center"
                                    style="background-color:rgba(216, 247, 191, 1);">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 leading-tight">Integrated Coconut
                                Processing</h3>
                            <p class="text-gray-600 text-sm mb-6 line-clamp-3 flex-grow">Nagpapahintulot sa mga
                                magsasaka na iproseso ang niyog upang madagdagan ang kanilang kita.</p>
                            <button onclick="document.getElementById('integrated-coconut').scrollIntoView({behavior: 'smooth'})"
                                class="w-full text-white px-6 py-3 rounded-lg text-sm sm:text-base font-semibold transition-all duration-200 transform group-hover:scale-105 mt-auto hover:opacity-90"
                                style="background-color: #09ca59ff;">
                                Alamin Pa
                                <svg class="w-4 h-4 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Support Services Program -->
                    <div
                        class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 overflow-hidden group sm:col-span-2 lg:col-span-1">
                        <div class="p-6 sm:p-8 flex flex-col h-full text-center">
                            <div class="flex items-center justify-center mb-4">
                                <div class="w-12 h-12 rounded-lg flex items-center justify-center"
                                    style="background-color:rgba(216, 247, 191, 1);">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 leading-tight">Support Services</h2>
                            <p class="text-gray-600 text-sm mb-6 line-clamp-3 flex-grow">Nagbibigay ng tulong
                                pinansyal, kalsada, at serbisyo sa marketing upang suportahan ang mga magsasaka.</p>
                            <button onclick="document.getElementById('support-services').scrollIntoView({behavior: 'smooth'})"
                                class="w-full text-white px-6 py-3 rounded-lg text-sm sm:text-base font-semibold transition-all duration-200 transform group-hover:scale-105 mt-auto hover:opacity-90"
                                style="background-color: #09ca59ff;">
                                Alamin Pa
                                <svg class="w-4 h-4 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 md:p-8">
                <div class="text-center mb-8 mt-10">
                    <h2 class="text-2xl md:text-5xl font-bold text-green-800 mb-2">MGA KAILANGANG IHANDA:</h2>
                    <h3 class="text-lg md:text-3xl font-extrabold text-green-800 mb-4">MGA DOKUMENTO PARA SA <span
                            style="color: #09ca59ff">CFIDP PROPOSAL</span> </h3>
                    <p class="text-xs lg:text-sm text-gray-600">GABAY PARA SA MGA MAGNINIYOG NA PILIPINO NA NAIS MAG-APPLY
                        SA
                        IBA'T-IBANG CFIDP PROGRAMS</p>
                </div>

                <!-- Social Protection Section -->
                <div id="social-protection" class="mb-12">
                    <div class="bg-green-50 border border-gray-200 rounded-md p-6 md:p-8">
                        <div class="flex items-center justify-between mb-3 gap-2">
                            <div class="flex items-center flex-1 min-w-0">
                                <div
                                    class="w-8 h-8 sm:w-10 sm:h-10 bg-green-500 rounded-full flex items-center justify-center mr-2 sm:mr-4 flex-shrink-0">
                                    <svg class="w-4 h-4 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-xl lg:text-2xl font-bold text-gray-800 leading-tight">Social Protection
                                    </h3>
                                    <p class="text-xs lg:text-sm font-sm text-gray-600 leading-tight">Training and Farm
                                        Schools</p>
                                </div>
                            </div>
                            <div class="flex space-x-1 sm:space-x-3 flex-shrink-0">
                                <div
                                    class="w-8 h-8 sm:w-14 sm:h-14 flex items-center justify-center bg-white rounded-full border border-white shadow-md">
                                    <img src="/images/IA logos/ATI.svg" class="w-8 h-8 sm:w-12 sm:h-12 object-contain"
                                        alt="ATI Logo">
                                </div>
                                <div
                                    class="w-8 h-8 sm:w-14 sm:h-14 flex items-center justify-center bg-white rounded-full border border-white shadow-md">
                                    <img src="/images/IA logos/TESDA.svg" class="w-8 h-8 sm:w-12 sm:h-12 object-contain"
                                        alt="TESDA Logo">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-lg p-4 sm:p-6 mb-8 shadow-sm px-3 sm:px-6 lg:px-8">
                            <h4 class="font-bold text-md lg:text-lg text-gray-800 mb-4 mt-3">Coco-based Learning Site for
                                Agriculture
                                (CocoLSA) Certification</h4>
                            <p
                                class="text-sm lg:text-base text-justify text-gray-600 mb-6 leading-relaxed px-2 sm:px-4 lg:px-6">
                                Ang
                                Coco-LSA o Coco-based Learning Site
                                for Agriculture (CocoLSA) Certification ay isang sakahan na gumagamit ng angkop na
                                teknolohiya sa niyugan, nagsasagawa ng mabisang estratehiya sa pagsasaka, at matagumpay na
                                nakakapagpatakbo ng operasyon — kaya’t nararapat tularan.</p>

                            <div class="mb-6">
                                <h5 class="font-semibold text-md lg:text-lg text-gray-800 mb-3">Mga Layunin ng Programa:
                                </h5>
                                <ul class="text-sm lg:text-base text-gray-800 space-y-2 pl-4 text-justify px-2 sm:px-4 lg:px-6">
                                    <li class="flex items-start font-semibold"><span
                                            class="text-green-800 mr-2 font-semibold">1.</span>Palakasin ang
                                        Kakayahan</li>
                                    <li class="flex items-start pr-1.5 ml-5"><span
                                            class="text-green-600 mr-2">•</span>Pagandahin
                                        ang kakayahan at kapasidad ng mga miyembro ng pamayanang nagtatanim ng niyog sa
                                        produksyon, pagpoproseso, at pagnenegosyo na nakabatay sa niyog.</li>
                                    <li class="flex items-start font-semibold"><span
                                            class="text-green-800 mr-2 font-semibold">2.</span>Dagdagan ang
                                        Partisipasyon</li>
                                    <li class="flex items-start pr-1.5 ml-5"><span class="text-green-600 mr-2">•</span>Paramihin
                                        ang paglahok ng magniniyog at
                                        lider nila sa pagpapaunlad ng industriya sa pamamagitan ng pagsisilbing ahente ng
                                        coconut-based capacity-building.</li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h5 class="font-semibold text-sm lg:text-base text-gray-800 mb-4">Mga Benepisyo ng Programa:
                                </h5>
                                <div
                                    class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-1 sm:gap-3 px-2 sm:px-4 lg:px-6">
                                    <div
                                        class="bg-gray-50 p-2 sm:p-3 rounded-lg text-center hover:shadow-md transition-shadow duration-200">
                                        <div
                                            class="w-8 h-8 sm:w-9 sm:h-9 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-2 sm:mb-3">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="text-sm font-medium text-gray-700 leading-tight block">Training</span>
                                    </div>

                                    <div
                                        class="bg-gray-50 p-2 sm:p-3 rounded-lg text-center hover:shadow-md transition-shadow duration-200">
                                        <div
                                            class="w-8 h-8 sm:w-9 sm:h-9 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-2 sm:mb-3">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm font-medium text-gray-700 leading-tight block">Demonstration
                                            Services</span>
                                    </div>

                                    <div
                                        class="bg-gray-50 p-2 sm:p-3 rounded-lg text-center hover:shadow-md transition-shadow duration-200">
                                        <div
                                            class="w-8 h-8 sm:w-9 sm:h-9 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-2 sm:mb-3">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm font-medium text-gray-700 leading-tight block">Information
                                            Support</span>
                                    </div>

                                    <div
                                        class="bg-gray-50 p-2 sm:p-3 rounded-lg text-center hover:shadow-md transition-shadow duration-200">
                                        <div
                                            class="w-8 h-8 sm:w-9 sm:h-9 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-2 sm:mb-3">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm font-medium text-gray-700 leading-tight block">Technical
                                            Assistance</span>
                                    </div>

                                    <div
                                        class="bg-gray-50 p-2 sm:p-3 rounded-lg text-center hover:shadow-md transition-shadow duration-200">
                                        <div
                                            class="w-8 h-8 sm:w-9 sm:h-9 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-2 sm:mb-3">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="text-sm font-medium text-gray-700 leading-tight block">Complementary
                                            Projects</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-md p-3 sm:p-4 mb-6 px-3 sm:px-6 lg:px-8">
                            <div class="bg-white rounded-lg p-4 mb-4">
                                <h5 class="text-2xl font-semibold text-gray-800 mb-2 mt-5 text-center">Mga Kailangan Para Sa
                                    Pag-Apply</h5>
                                <p class="text-sm lg:text-base text-gray-600 text-center">Mga dokumento na kailangan upang
                                    makapag-apply
                                    sa programa</p>
                            </div>
                            <!-- Requirements Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-1 gap-6 mb-8">
                                <!-- Para sa Individual Farmers -->
                                <div class="bg-green-50 rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">
                                    <h5
                                        class="text-md lg:text-lg font-semibold text-gray-800 mb-4 sm:mb-6 text-center bg-white py-2 sm:py-3 rounded-md">
                                        Para sa Individual na mga Magsasaka</h5>

                                    <!-- Requirements List -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                        <!-- Requirement 1: Filipino Coconut Farmer -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        1. Filipino Coconut Farmer</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Dapat ay
                                                        isang Pilipinong nagtatanging (may-ari, nagtatanim,
                                                        nagtitipong-alaga) na may hindi bababa sa 1 ektaryong niyugan.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 2: Willing to Demonstrate -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        2. Willing to Demonstrate</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Handa at
                                                        may kakayahang magpakita ng mga teknolohiya sa niyog sa kanyang
                                                        sakahan anumang oras na kailangan ng kliyente.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 3: Open to Training -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        3. Open to Training</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Dapat ay
                                                        may kahandaang sumailalim sa mga regular na pagsasanay</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 4: Physically Fit -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        4. Physically Fit</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">May
                                                        pisikal na kakayahang gampanan ang mga tungkulin bilang CocoLSA
                                                        cooperator; at</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 5: NCFRS Registered -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200 sm:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        5. NCFRS Registered</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Rehistrado
                                                        sa NCFRS, at mas mainam kung miyembro ng isang CFO o CFC.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Para sa Organization -->
                                <div class="bg-green-50 rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">
                                    <h5
                                        class="text-md lg:text-lg font-semibold text-gray-800 mb-4 sm:mb-6 text-center bg-white py-2 sm:py-3 rounded-md px-3 lg:px-0">
                                        Para sa Grupo/Organisasyon ng mga Magsasaka</h5>

                                    <!-- Requirements List -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                        <!-- Requirement 1: Integrated Farm -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        1. Integrated Farm</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Dapat ay
                                                        may sukat na hindi bababa sa 1 ektarya, at isang integrated at/o
                                                        diversified na sakahan (halimbawa: niyog at pag-aalaga ng hayop).
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 2: Coconut Farmland -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        2. Coconut Farmland</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Dapat ay
                                                        nagmamay-ari at namamahala ng sakahang niyugan na may sukat na hindi
                                                        bababa sa 1 ektarya.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 3: Valid Registration -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        3. Valid Registration</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">May valid
                                                        na rehistrasyon mula sa SEC, CDA, DOLE, o kasalukuyang akreditasyon
                                                        mula sa PCA.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 4: Active Organization -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        4. Active Organization</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Aktibo sa
                                                        nakalipas na 3 taon sa organisasyon ng mga magsasaka o community
                                                        enterprise development.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 5: Filipino Leaders -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200 sm:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        5. Filipino Leaders</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Dapat ay
                                                        binubuo ng mga Pilipinong lider-magsasaka o kasapi na:</p>

                                                    <!-- Sub-requirements -->
                                                    <div class="mt-4 space-y-3">
                                                        <!-- 5.1 Demo of Coconut Technologies -->
                                                        <div class="bg-gray-50 rounded-lg p-3 border-l-2 border-green-300">
                                                            <h6 class="font-medium text-sm text-green-800 mb-2">5.1 Demo of
                                                                Coconut Technologies</h6>
                                                            <p class="text-sm text-gray-600 leading-relaxed">Handa at may
                                                                kakayahang magpakita ng mga teknolohiya sa niyog sa kanyang
                                                                sakahan kapag kinakailangan.</p>
                                                        </div>

                                                        <!-- 5.2 Training Ready -->
                                                        <div class="bg-gray-50 rounded-lg p-3 border-l-2 border-green-300">
                                                            <h6 class="font-medium text-sm text-green-800 mb-2">5.2 Training
                                                                Ready</h6>
                                                            <p class="text-sm text-gray-600 leading-relaxed">May kahandaang
                                                                sumailalim at aktibong lumahok sa mga regular na pagsasanay
                                                                upang mapalawak ang kaalaman at kasanayan; at</p>
                                                        </div>

                                                        <!-- 5.3 Physically Capable -->
                                                        <div class="bg-gray-50 rounded-lg p-3 border-l-2 border-green-300">
                                                            <h6 class="font-medium text-sm text-green-800 mb-2">5.3
                                                                Physically Capable</h6>
                                                            <p class="text-sm text-gray-600 leading-relaxed">May pisikal na
                                                                kakayahan upang magampanan ang mga responsibilidad bilang
                                                                isang LSA cooperator at LSA.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="bg-green-50 rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">
                                    <h5
                                        class="text-md lg:text-lg font-semibold text-gray-800 mb-4 sm:mb-6 text-center bg-white py-2 sm:py-3 rounded-md px-5 lg:px-0">
                                        Para sa Individual at Grupo ng mga Magsasaka</h5>

                                    <!-- Requirements List -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                        <!-- Requirement 1: Filipino Coconut Farmer -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        1. Filipino Coconut Farmer</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Dapat ay
                                                        isang Pilipinong nagtatanging (may-ari, nagtatanim,
                                                        nagtitipong-alaga) na may hindi bababa sa 1 ektaryong niyugan.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 2: Willing to Demonstrate -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        2. Willing to Demonstrate</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Handa at
                                                        may kakayahang magpakita ng mga teknolohiya sa niyog sa kanyang
                                                        sakahan anumang oras na kailangan ng kliyente.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 3: Open to Training -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        3. Open to Training</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Dapat ay
                                                        may kahandaang sumailalim sa mga regular na pagsasanay</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 4: Physically Fit -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        4. Physically Fit</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">May
                                                        pisikal na kakayahang gampanan ang mga tungkulin bilang CocoLSA
                                                        cooperator; at</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Documents Needed-->
                        <div id="documents-needed" class="bg-white rounded-md p-4 mb-6 px-10">
                            <div class="bg-white rounded-lg p-4 mb-4">
                                <h5 class="text-2xl font-semibold text-gray-800 mb-2 mt-5 text-center">Mga Kailangang
                                    Dokumento</h5>
                                <p class="text-sm lg:text-base text-gray-600 text-center">Siguruhing kumpleto ang lahat ng
                                    dokumento bago mag-apply
                                </p>
                            </div>

                            <div class="grid grid-cols-1 gap-6 mb-8">
                                <!-- Required Documents List -->
                                <div class="bg-green-50 rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">
                                    <!-- Requirements List -->
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                                        <!-- Document 1: Applicant's Checklist of Requirements -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-center space-x-2 sm:space-x-3 mt-0 lg:mt-2">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        1. Applicant's Checklist of Requirements</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Document 2: Signed Briefer -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3 mt-0 lg:mt-5">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        2. Signed Briefer</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Document 3: Self-Assessment -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3 mt-0 lg:mt-5">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        3. Self-Assessment</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Document 4: Letter of Intent to become a CocoLSA -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3 mt-0 lg:mt-5">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        4. Letter of Intent to become a CocoLSA</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3 mt-0 lg:mt-2">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        5. Farming Learning Site for Agriculture Profile Form</h6>
                                                </div>
                                            </div>
                                        </div>


                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3 mt-0 lg:mt-5">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        6. LSA Qualification Form</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3 mt-0 lg:mt-2">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        7. Field Validation Report</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3 mt-0 lg:mt-2">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        8. LSA Acceptance Form</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3 mt-0 lg:mt-2">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        9. Endorsement of the RTWG</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Warning box as full-width single column -->
                                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mt-6">
                                        <div class="flex items-start space-x-3">
                                            <svg class="w-5 h-5 text-yellow-400 mt-0.5 flex-shrink-0" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-yellow-800 mb-1">
                                                    IMPORTANT!
                                                </h4>
                                                <p class="text-yellow-700 text-xs sm:text-sm">If endorsed with
                                                    financial
                                                    assistance, a
                                                    <strong>Development Plan</strong> shall be
                                                    required.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="integrated-coconut" class="mb-12">
                    <div class="border border-green-50 rounded-lg p-6 md:p-8 bg-green-50">
                        <div class="flex items-center justify-between mb-3 gap-2">
                            <div class="flex items-center flex-1 min-w-0">
                                <div
                                    class="w-8 h-8 sm:w-10 sm:h-10 bg-green-500 rounded-full flex items-center justify-center mr-2 sm:mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-xl lg:text-2xl font-bold text-gray-800 leading-tight">Integrated Coconut
                                        Processing
                                    </h3>
                                    <p class="text-xs lg:text-sm font-sm text-gray-600 leading-tight">and Downstream
                                        Products</p>
                                </div>
                            </div>
                            <div class="flex space-x-1 sm:space-x-3 flex-shrink-0">
                                <div
                                    class="w-8 h-8 sm:w-14 sm:h-14 flex items-center justify-center bg-white rounded-full border border-white shadow-md">
                                    <img src="/images/IA logos/PM.svg" class="w-8 h-8 sm:w-12 sm:h-12 object-contain"
                                        alt="PM Logo">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-4 sm:p-6 mb-8 shadow-sm px-3 sm:px-6 lg:px-8">
                            <h4 class="font-bold text-md lg:text-lg text-gray-800 mb-4 mt-3">Shared Processing Facilities
                            </h4>
                            <p
                                class="text-sm lg:text-base text-justify text-gray-600 mb-6 leading-relaxed px-2 sm:px-4 lg:px-6">
                                Ang Shared
                                Processing Facilities (SPF) ay mga pasilidad na ginagamit nang sama-sama ng mga kooperatiba
                                o indibidwal na magsasaka para sa mas episyente at de-kalidad na pagproseso ng produktong
                                niyog.</p>
                        </div>

                        <div class="bg-white rounded-md p-3 sm:p-4 mb-6 px-3 sm:px-6 lg:px-8">
                            <div class="bg-white rounded-lg p-4 mb-4">
                                <h5 class="text-2xl font-semibold text-gray-800 mb-2 mt-3 text-center">Mga Kriterya para sa
                                    Pagpili</h5>
                                <p class="text-sm lg:text-base text-gray-600 text-center">Mga dokumento na kailangan
                                    upang
                                    makapag-apply
                                    sa programa</p>
                            </div>
                            <!-- Requirements Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-1 gap-6 mb-8">
                                <!-- Shared Processing Facilities Requirements -->
                                <div class="bg-green-50 rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">

                                    <!-- Requirements List -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                        <!-- Requirement 1: Letter of Intent -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        1. Letter of Intent
                                                    </h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Liham ng
                                                        intensyon para sa processing facility
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 2: Endorsement letter from PCA -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        2.
                                                        Endorsement letter from PCA</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                                        Opisyal na endorsement mula sa Provincial/Regional/Central Office
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 3: NCFRS Certification -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        3. NCFRS Certification</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Kumpirmado
                                                        at opisyal na inisyu ng Regional Office</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 4: Financial Statement for two (2) years -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        4. Financial Statement for two (2) years</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">2 years
                                                        external audit financial statement</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        5. CDA Registration
                                                    </h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                                        Rehistradong kooperatiba sa ilalim ng CDA
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 6: CDA Certificate of Compliance -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        6. CDA Certificate of Compliance</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                                        Certificate of Compliance (updated annually)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 7: Articles of Cooperation and By-Laws -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        7. Articles of Cooperation and By-Laws</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Mga
                                                        Artikulo ng Kooperasyon at By-Laws (notarizado)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 8: Existing Organizational Structure -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        8. Existing Organizational Structure</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                                        Kasalukuyang Estruktura ng Organisasyon</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        9.
                                                        Board Resolution</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Maayos na
                                                        notarizado; dapat nakasaad ang kaukulang kahilingan</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 10: Site Profile -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        10. Community/Site Profile</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                                        Detalyadong profile ng komunidad/lokasyon</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 11:List of Members -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200 sm:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        11.
                                                        Official List of Members</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                                        Hindi bababa sa 100 miyembro at hindi kukulangin sa 50%+1 ay
                                                        rehistradong magsasaka ng niyog – na beripikado sa pamamagitan ng
                                                        NCFRS Certification</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="bg-white rounded-md p-4 mb-6 px-10">
                            <div class="bg-white rounded-lg p-4 mb-4">
                                <h5 class="text-2xl font-semibold text-gray-800 mb-2 mt-5 text-center">Karagdagang
                                    Kailanganin</h5>
                                <p class="text-sm lg:text-base text-gray-600 text-center">Pagkatapos ng pag-apruba
                                    ng Central Office (CO) at bago ang aktwal na konstruksyon ng pasilidad
                                </p>
                            </div>

                            <div class="grid grid-cols-1 gap-6 mb-8">
                                <!-- Additional Requirements After Approval -->
                                <div class="bg-green-50 rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">
                                    <!-- Requirements List -->
                                    <div class="grid grid-cols-1 gap-3">
                                        <!-- Requirement 1: Proposal/Business Plan/Feasibility Study -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-center space-x-2 sm:space-x-3 mt-0 lg:mt-2">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        1. Proposal/Business Plan/Feasibility Study</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 2: Deed of Donation/MOA/Usufruct Agreement -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3 mt-0 lg:mt-4">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        2. Deed of Donation of Lot if private property; MOA/Usufruct
                                                        Agreement if Lot is a government property.</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="support-services" class="mb-12">
                    <div class="border border-green-50 rounded-lg p-6 md:p-8 bg-green-50">
                        <div class="flex items-center justify-between mb-3 gap-2">
                            <div class="flex items-center flex-1 min-w-0">
                                <div
                                    class="w-8 h-8 sm:w-10 sm:h-10 bg-green-500 rounded-full flex items-center justify-center mr-2 sm:mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-xl lg:text-2xl font-bold text-gray-800 leading-tight">Support Services
                                    </h3>
                                    <p class="text-xs lg:text-sm font-sm text-gray-600 leading-tight">Mga Serbisyong Tulong
                                    </p>
                                </div>
                            </div>
                            <div class="flex space-x-1 sm:space-x-3 flex-shrink-0">
                                <div
                                    class="w-8 h-8 sm:w-14 sm:h-14 flex items-center justify-center bg-white rounded-full border border-white shadow-md">
                                    <img src="/images/IA logos/PM.svg" class="w-8 h-8 sm:w-12 sm:h-12 object-contain"
                                        alt="PM Logo">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-lg p-4 sm:p-6 mb-8 shadow-sm px-3 sm:px-6 lg:px-8">
                            <h4 class="font-bold text-md lg:text-lg text-gray-800 mb-4 mt-3">Credit
                            </h4>
                            <p
                                class="text-sm lg:text-base text-justify text-gray-600 mb-6 leading-relaxed px-2 sm:px-4 lg:px-6">
                                Karaniwan, ang mga kooperatiba o indibidwal na magsasaka ay direktang tumutungo sa LBP o DBP
                                upang makinabang sa CFID Credit Program. Ang PCA ay nagsisilbing katuwang na ahensyang
                                tagapagpatupad ng mga bangkong ito pagdating sa beripikasyon ng NCFRS, akreditasyon ng PCA,
                                at iba pang mga beripikasyon na may kaugnayan sa coconut value chain.</p>
                        </div>

                        <div class="bg-white rounded-md p-3 sm:p-4 mb-6 px-3 sm:px-6 lg:px-8">
                            <div class="bg-white rounded-lg p-4 mb-4">
                                <h5 class="text-2xl font-semibold text-gray-800 mb-2 mt-5 text-center">Mga Kailangang
                                    Dokumento</h5>
                                <p class="text-sm lg:text-base text-gray-600 text-center">Mga kailangang dokumento para
                                    makapag-apply ng credit
                                </p>
                            </div>

                            <div class="bg-green-50 rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">
                                <h5
                                    class="text-md lg:text-lg font-semibold text-gray-800 mb-4 sm:mb-6 text-center bg-white py-2 sm:py-3 rounded-md">
                                    Base Requirements (of PCA)</h5>

                                <!-- Requirements List -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                    <!-- Requirement 1: Letter of Intent -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    1. Letter of Intent
                                                </h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 2: NCFRS Registration -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    2. NCFRS Registration and Certification</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 3: CSO Accreditation -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    3. CSO Accreditation issued by PCA or DA</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 4: CDA Registration -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    4. CDA Registration and COC</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 5: Financial Statement -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    5. Financial Statement for two (2) years (external audit);</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 6: Articles of Cooperation and By-Laws -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    6. Articles of Cooperation and By-Laws (duly notarized)</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 7: Existing Organizational Structure -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    7. Existing Organizational Structure</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 8: Official list of members -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    8. Official list of members</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 9: Board Resolution (if requestee is a Cooperative; not needed if individual farmer) -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200 sm:col-span-2">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    9. Board Resolution (if requestee is a Cooperative; not needed if
                                                    individual farmer)</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-green-50 rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200 mt-7">
                                <div class="bg-white rounded-lg p-4 mb-4">
                                    <h5
                                        class="text-md lg:text-lg font-semibold text-gray-800 text-center py-2 sm:py-3 rounded-md mb-0">
                                        Documentary Requirements (of DBP/LBP)</h5>
                                    <p class="text-xs lg:text-sm text-gray-600 text-center -mt-2 mb-1">Coconut Farmer
                                        Enterprise
                                    </p>
                                </div>

                                <!-- Requirements List -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                    <!-- Requirement 1: Letter of Intent -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    1. DBP Loan Application Forms
                                                </h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 2: NCFRS Registration -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    2. Proof of NCFRS Enlistment</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 3: CSO Accreditation -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    3. Photocopy of Certificate of Registration from the DTI/SEC</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 4: CDA Registration -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    4. Certificate of Accreditation from PCA</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 5: Financial Statement -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    5. Business Plan, if applicable</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 6: Articles of Cooperation and By-Laws -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    6. Current Year Business Permit</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 7: Audited Financial Statements -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200 sm:col-span-2">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    7. Audited Financial Statements for the last year; or latest Interim
                                                    Financial Statements for start-ups</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 8: Training Certificate -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200 sm:col-span-2">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    8. Training Certificate from an accredited provider (e.g., TESDA,
                                                    DA-ATI) on financial literacy and on projects related to the coconut
                                                    value chain</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-green-50 rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200 mt-7">
                                <div class="bg-white rounded-lg p-4 mb-4">
                                    <h5
                                        class="text-md lg:text-lg font-semibold text-gray-800 text-center py-2 sm:py-3 rounded-md mb-0">
                                        Documentary Requirements (of DBP/LBP)</h5>
                                    <p class="text-xs lg:text-sm text-gray-600 text-center -mt-2 mb-1">Coconut Farmers
                                        Cooperatives and Organizations
                                    </p>
                                </div>

                                <!-- Requirements List -->
                                <div class="grid grid-cols-1 gap-3">
                                    <!-- Requirement 1: Letter of Intent -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    1. DBP Loan Application Forms
                                                </h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 2: NCFRS Registration -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    2. Photocopy of Certificate of Registration from the CDA/SEC</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 3: CSO Accreditation -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    3. Certificate of Accreditation from PCA</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 4: CDA Registration -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    4. Certificate of Compliance from CDA, if applicable</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 5: Financial Statement -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    5. Certificate of Tax Exemption, if applicable</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 6: Articles of Cooperation and By-Laws -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    6. Copies of Articles of Incorporation/Cooperation and By-Laws</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 5: Financial Statement -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    7. Business Plan, if applicable</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 6: Articles of Cooperation and By-Laws -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    8. Current Year Business Permit</h6>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Requirement 7: Audited Financial Statements -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200 sm:col-span-2">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    9. Bio-data of incumbent Officers and Board of Directors with photocopy
                                                    of valid government issued ID</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Requirement 8: Training Certificate -->
                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200 sm:col-span-2">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    10. Board Resolution authorizing the Cooperative/ Organization to borrow
                                                    and designating the authorized signatories</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200 sm:col-span-2">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    11. Audited Financial Statements for the last year; or latest Interim
                                                    Financial Statements for start-ups</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200 sm:col-span-2">
                                        <div class="flex items-start space-x-2 sm:space-x-3">
                                            <div class="flex-1 min-w-0 px-3">
                                                <h6 class="font-semibold text-sm lg:text-base text-gray-800 mt-0 lg:mt-0.5">
                                                    12.
                                                    Training Certificate of the cooperative and its key officers from an
                                                    accredited provider (e.g., TESDA, DA-ATI) on financial literacy and on
                                                    projects related to the coconut value chain</span> </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-lg p-6 mb-6 shadow-sm px-8 mt-8">
                            <h4 class="font-bold text-md lg:text-lg text-gray-800 mb-4 mt-3">Infrastructure
                            </h4>
                            <p class="text-sm lg:text-base text-justify text-gray-600 mb-6 leading-relaxed px-5 lg:px-10">
                                Tumutukoy ito sa mga pasilidad na suportado ng DPWH para sa coconut industry. Ang mga
                                dokumento ay katulad lamang ng sa Shared Processing Facilities (SPF) na layong mapabuti ang
                                pagproseso at kita ng mga produktong niyog.</p>
                        </div>

                        <div class="bg-white rounded-md p-4 mb-6 px-10">
                            <div class="bg-white rounded-lg p-4 mb-4">
                                <h5 class="text-2xl font-semibold text-gray-800 mb-2 mt-5 text-center">Mga Kailangang
                                    Dokumento</h5>
                                <p class="text-sm lg:text-base text-gray-600 text-center">Mga kailangang dokumento para
                                    makapag-apply sa imprastaktura
                                </p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-1 gap-6 mb-8">
                                <!-- Shared Processing Facilities Requirements -->
                                <div class="bg-green-50 rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">

                                    <!-- Requirements List -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                        <!-- Requirement 1: Letter of Intent -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        1. Letter of Intent
                                                    </h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Liham ng
                                                        intensyon para sa processing facility
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 2: Endorsement letter from PCA -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        2.
                                                        Endorsement letter from PCA</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                                        Opisyal na endorsement mula sa Provincial/Regional/Central Office
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 3: NCFRS Certification -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        3. NCFRS Certification</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Kumpirmado
                                                        at opisyal na inisyu ng Regional Office</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 4: Financial Statement for two (2) years -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        4. Financial Statement for two (2) years</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">2 years
                                                        external audit financial statement</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        5. CDA Registration
                                                    </h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                                        Rehistradong kooperatiba sa ilalim ng CDA
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 6: CDA Certificate of Compliance -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        6. CDA Certificate of Compliance</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                                        Certificate of Compliance (updated annually)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 7: Articles of Cooperation and By-Laws -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        7. Articles of Cooperation and By-Laws</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Mga
                                                        Artikulo ng Kooperasyon at By-Laws (notarizado)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 8: Existing Organizational Structure -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        8. Existing Organizational Structure</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                                        Kasalukuyang Estruktura ng Organisasyon</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        9.
                                                        Board Resolution</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">Maayos na
                                                        notarizado; dapat nakasaad ang kaukulang kahilingan</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 10: Site Profile -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        10. Community/Site Profile</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                                        Detalyadong profile ng komunidad/lokasyon</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 11:List of Members -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200 sm:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div class="flex-1 min-w-0 px-3">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        11.
                                                        Official List of Members</h6>
                                                    <p class="text-sm text-gray-600 leading-relaxed text-justify">
                                                        Hindi bababa sa 100 miyembro at hindi kukulangin sa 50%+1 ay
                                                        rehistradong magsasaka ng niyog – na beripikado sa pamamagitan ng
                                                        NCFRS Certification</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="bg-white rounded-md p-4 mb-6 px-10">
                            <div class="bg-white rounded-lg p-4 mb-4">
                                <h5 class="text-2xl font-semibold text-gray-800 mb-2 mt-5 text-center">Karagdagang
                                    Kailanganin</h5>
                                <p class="text-sm lg:text-base text-gray-600 text-center">Pagkatapos ng pag-apruba
                                    ng Central Office (CO) at bago ang aktwal na konstruksyon ng pasilidad
                                </p>
                            </div>

                            <div class="grid grid-cols-1 gap-6 mb-8">
                                <!-- Additional Requirements After Approval -->
                                <div class="bg-green-50 rounded-lg p-4 sm:p-6 shadow-sm border border-gray-200">
                                    <!-- Requirements List -->
                                    <div class="grid grid-cols-1 gap-3">
                                        <!-- Requirement 1: Proposal/Business Plan/Feasibility Study -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-center space-x-2 sm:space-x-3 mt-0 lg:mt-2">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        1. Proposal/Business Plan/Feasibility Study</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Requirement 2: Deed of Donation/MOA/Usufruct Agreement -->
                                        <div
                                            class="bg-white rounded-lg p-3 sm:p-4 border-l-4 border-green-500 shadow-sm hover:shadow-md transition-shadow duration-200">
                                            <div class="flex items-start space-x-2 sm:space-x-3 mt-0 lg:mt-4">
                                                <div class="flex-1 min-w-0">
                                                    <h6 class="font-semibold text-sm lg:text-base text-gray-800 mb-1 sm:mb-2">
                                                        2. Deed of Donation of Lot if private property; MOA/Usufruct
                                                        Agreement if Lot is a government property.</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        </div>

        <section class="py-12" style="background-color:rgb(230, 253, 212);">
            <div class="mb-12 scroll-animate opacity-0 translate-y-8 transition-all duration-1000 ease-out">
                <h1
                    class="text-3xl lg:text-5xl text-center font-bold text-green-900 transform transition-all duration-700 mt-10">
                    MGA TAGAPAGPATUPAD NA<br>
                    AHENSYA NG GOBYERNO
                </h1>
                <div class="w-40 h-2 bg-green-800 mx-auto mt-3"></div>
            </div>


            <!-- Truly seamless, infinite scroll carousel -->
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

            <style>
                /* Seamless carousel container */
                .logo-scroll-container {
                    position: relative;
                    width: 100%;
                    overflow: hidden;
                    display: flex;
                }

                /* Logo tracks */
                .logo-track {
                    display: flex;
                    flex-shrink: 0;
                    min-width: 100%;
                    will-change: transform;
                }

                /* Creating the seamless effect with two identical tracks */
                #logoTrack1 {
                    animation: scroll 65s linear infinite;
                    animation-play-state: running;
                }

                #logoTrack2 {
                    animation: scroll2 65s linear infinite;
                    animation-play-state: running;
                }

                /* Animations for the two tracks */
                @keyframes scroll {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-100%);
                    }
                }

                @keyframes scroll2 {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-100%);
                    }
                }

                /* Logo item styling */
                .logo-item {
                    flex-shrink: 0;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    width: 160px;
                    /* Reduced width to bring logos closer */
                    margin: 0 12px;
                    /* Reduced margin to bring logos closer */
                }

                /* Logo name styling */
                .logo-item p {
                    margin-top: 12px;
                    font-size: 0.75rem;
                    text-align: center;
                    color: rgb(75, 85, 99);
                    max-width: 150px;
                    line-height: 1.2;
                    font-weight: 600;
                    /* Increased font weight for better visibility */
                    height: auto;
                    padding-bottom: 5px;
                }

                /* Hover effects and styling */
                .logo-circle {
                    transition: all 0.3s ease;
                    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
                    /* Enhanced shadow */
                    border: 2px solid rgba(9, 202, 22, 0.2);
                    /* Light green border */
                    width: 120px;
                    /* Increased size */
                    height: 120px;
                    /* Increased size */
                    position: relative;
                    overflow: hidden;
                    background: white;
                    /* White background */
                }

                /* Standardized logo image styling */
                .logo-circle img {
                    max-width: 75%;
                    /* Increased image size proportionally */
                    max-height: 75%;
                    /* Increased image size proportionally */
                    width: auto;
                    height: auto;
                    object-fit: contain;
                    object-position: center;
                    vertical-align: middle;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    filter: drop-shadow(0 2px 3px rgba(0, 100, 0, 0.1));
                    /* Subtle drop shadow on logos */
                }

                .logo-circle:hover {
                    transform: scale(1.12);
                    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
                    background: white;
                    border-color: rgba(9, 202, 22, 0.6);
                    /* Darker green border on hover */
                }

                /* Adjust spacing between logo items - already defined in the logo-item class */

                /* Pause animation on hover */
                .logo-scroll-container:hover #logoTrack1,
                .logo-scroll-container:hover #logoTrack2 {
                    animation-play-state: paused !important;
                }
            </style>

            <!-- Script for responsive behavior -->
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    // Standardize all logo elements structure and styling
                    function standardizeLogoElements() {
                        // Get all logo circles
                        const logoCircles = document.querySelectorAll('.logo-circle');

                        // For each logo circle
                        logoCircles.forEach(circle => {
                            // Remove any extra classes but keep rounded-full
                            circle.className = 'logo-circle rounded-full p-3 shadow-md';

                            // Apply new enhanced styling
                            circle.style.width = '120px'; // Increased size
                            circle.style.height = '120px'; // Increased size
                            circle.style.position = 'relative';
                            circle.style.overflow = 'hidden';
                            circle.style.boxShadow = '0 6px 10px rgba(0, 0, 0, 0.15)';
                            circle.style.border = '2px solid rgba(9, 202, 22, 0.2)';
                            circle.style.background = 'white';

                            // Get the image inside
                            const img = circle.querySelector('img');
                            if (img) {
                                // Remove any classes from the image
                                img.className = '';

                                // Apply enhanced styling
                                img.style.maxWidth = '75%'; // Increased size
                                img.style.maxHeight = '75%'; // Increased size 
                                img.style.position = 'absolute';
                                img.style.top = '50%';
                                img.style.left = '50%';
                                img.style.transform = 'translate(-50%, -50%)';
                                img.style.filter = 'drop-shadow(0 2px 3px rgba(0, 100, 0, 0.1))'; // Subtle drop shadow
                            }
                        });

                        // Get all logo items
                        const logoItems = document.querySelectorAll('.logo-item');

                        // For each logo item - bringing them closer
                        logoItems.forEach(item => {
                            // Remove any extra classes
                            item.className = 'logo-item';
                            item.style.margin = '0 12px'; // Reduced margin to bring logos closer
                            item.style.width = '160px'; // Narrower width to bring logos closer
                        });

                        // Ensure paragraph styling is consistent
                        const logoTexts = document.querySelectorAll('.logo-item p');
                        logoTexts.forEach(text => {
                            text.style.fontWeight = '600';
                            text.style.fontSize = '0.75rem';
                            text.style.color = 'rgb(75, 85, 99)';
                        });
                    }

                    // Run the standardization on page load
                    standardizeLogoElements();
                    const logoTracks = document.querySelectorAll('.logo-track');
                    const logoContainer = document.querySelector('.logo-scroll-container');
                    let scrollSpeed = 65; // Base scroll speed in seconds - slightly faster for more dynamic appearance

                    // Add specific hover event handlers
                    if (logoContainer) {
                        logoContainer.addEventListener('mouseenter', function () {
                            logoTracks.forEach(track => {
                                track.style.animationPlayState = 'paused';
                            });
                        });

                        logoContainer.addEventListener('mouseleave', function () {
                            logoTracks.forEach(track => {
                                track.style.animationPlayState = 'running';
                            });
                        });
                    }

                    // Function to adjust animation speed based on screen size
                    function adjustScrollSpeed() {
                        if (window.innerWidth < 640) { // Mobile
                            scrollSpeed = 50;  // Faster for mobile
                        } else if (window.innerWidth < 1024) { // Tablet
                            scrollSpeed = 55;  // Faster for tablet
                        } else { // Desktop
                            scrollSpeed = 65;  // Faster for desktop
                        }

                        // Apply to both tracks
                        logoTracks.forEach(track => {
                            track.style.animationDuration = `${scrollSpeed}s`;
                        });
                    }

                    // Setup truly seamless scrolling
                    function setupSeamlessScrolling() {
                        // Calculate total width needed
                        const track1 = document.getElementById('logoTrack1');
                        const track2 = document.getElementById('logoTrack2');

                        // Make sure the second track starts exactly where the first one ends
                        const observer = new ResizeObserver(entries => {
                            for (let entry of entries) {
                                if (entry.target === track1) {
                                    // Ensure track2 positioning is correct
                                    track2.style.left = '100%';
                                }
                            }
                        });

                        // Start observing for changes
                        observer.observe(track1);
                    }

                    // Function to ensure consistent vertical alignment of all logos
                    function enforceLogoAlignment() {
                        const allLogoImages = document.querySelectorAll('.logo-circle img');

                        allLogoImages.forEach(img => {
                            // Ensure all logos are properly centered
                            setTimeout(() => {
                                img.style.position = 'absolute';
                                img.style.top = '50%';
                                img.style.left = '50%';
                                img.style.transform = 'translate(-50%, -50%)';
                            }, 100);
                        });
                    }

                    // Initial adjustments
                    adjustScrollSpeed();
                    setupSeamlessScrolling();
                    enforceLogoAlignment();

                    // Adjust on window resize
                    window.addEventListener('resize', () => {
                        adjustScrollSpeed();
                        enforceLogoAlignment();
                    });
                });
            </script>
        </section>

        <!-- Floating Back to Programs Button -->
        <button id="back-to-top" class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 lg:bottom-8 lg:right-8 
                                   text-white 
                                   w-12 h-12 sm:w-14 sm:h-14 lg:w-12 lg:h-12 
                                   rounded-full shadow-lg hover:shadow-xl 
                                   flex items-center justify-center 
                                   transition-all duration-300 ease-in-out 
                                   transform hover:scale-110 
                                   opacity-0 pointer-events-none z-50"
            style="background-color: #09ca59ff; hover:background-color: #078e3f;" onclick="scrollToPrograms()">
            <!-- Arrow Up Icon -->
            <svg class="w-6 h-6 transform group-hover:-translate-y-1 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"></path>
            </svg>
            <!-- Tooltip for larger screens -->
            <span
                class="hidden xl:block absolute -left-24 bg-gray-800 text-white text-xs px-2 py-1 rounded whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity">
                Bumalik sa Programs
            </span>
        </button>

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
                        backToTopButton.classList.remove('opacity-0', 'pointer-events-none');
                        backToTopButton.classList.add('opacity-100', 'pointer-events-auto');
                    } else {
                        backToTopButton.classList.add('opacity-0', 'pointer-events-none');
                        backToTopButton.classList.remove('opacity-100', 'pointer-events-auto');
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
    @endpush

@endsection