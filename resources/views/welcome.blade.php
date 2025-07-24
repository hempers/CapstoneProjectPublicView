<!-- resources/views/cfidp-proposal.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCAppTrack Online Tracking</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body,
        html {
            font-family: 'Montserrat', sans-serif !important;
        }
    </style>
</head>

<style>
    /* Import Google Fonts - Lemon font for the PCAppTrack logo */
    @import url('https://fonts.googleapis.com/css2?family=Lemon&display=swap');

    /* Custom Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.3s ease-out;
    }

    /* Card hover effects */
    .card-hover {
        transition: all 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
</style>

<body class="bg-white text-gray-800 font-montserrat">
    <!-- Header with CFIDP and PCAppTrack logos -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4 sm:px-6 lg:px-8 py-2 sm:py-3">
            <!-- CFIDP Logo on the left -->
            <div class="flex items-center flex-shrink-0">
                <img src="/images/img/PCAppTrack.png" alt="CFIDP Logo"
                    class="h-8 sm:h-9 md:h-10 lg:h-11 w-auto max-w-2/3"
                    onerror="this.onerror=null; this.src='/images/cfidpgp.png';">
            </div>

            <!-- PCAppTrack Logo image on the right-->
            <div class="flex items-center flex-shrink-0 ml-3">
                <img src="/images/img/logo.png" alt="PCAppTrack Logo"
                    class="h-4 sm:h-5 md:h-6 lg:h-7 w-auto max-w-full">
            </div>
        </div>
    </header>

    <!-- Smooth scroll script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // Handle anchor links for smooth scrolling
            const anchorLinks = document.querySelectorAll('a[href^="#"]');

            anchorLinks.forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        // Scroll to the target with smooth behavior
                        window.scrollTo({
                            top: targetElement.offsetTop - 50, // Offset for the simplified header
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Set up click handler for track buttons
            const trackBtn = document.querySelector('.track-btn');
            if (trackBtn) {
                trackBtn.addEventListener('click', function () {
                    // Scroll to track section
                    const trackSection = document.getElementById('track-section');
                    if (trackSection) {
                        window.scrollTo({
                            top: trackSection.offsetTop - 50,
                            behavior: 'smooth'
                        });
                    }
                });
            }
        });
    </script>

    <!-- Hero Section -->
    <section class="bg-green-50 py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <!-- Text Section (moved first for left-side position) -->
            <div class="text-sm w-full md:w-1/2 text-left md:pr-8 mb-6 md:mb-0 -mt-6">
                <h1 class="text-3xl md:text-5xl font-extrabold text-green-900 mb-5 ml-16 mt-0">
                    Application <span style="color: #09CA16;">Tracking </span> System
                </h1>
                <p class="text-xs sm:text-sm  text-justify mb-6 ml-16 mr-9 mt-2 ">
                    <span class="font-light text-gray-800">Ang PCAppTrack
                        ay isang online
                        na sistema ng programang CFIDP sa ilalim ng PCA Region V na tumutulong sa
                        pagsubaybay ng mga aplikasyon sa ilalim ng CFIDP. Gamit ang reference ID, mas madaling masilip
                        ang status
                        ng aplikasyon — walang login na kailangan

                        <br> <br>Mabilis. Organisado. Para sa mga magniniyog na Pilipino.</span>


                </p>
                <a href="#track-section" class="track-btn inline-block text-white font-bold px-6 py-2 rounded ml-16"
                    style="background-color: #09CA16; transition: background-color 0.2s;"
                    onmouseover="this.style.backgroundColor='#079510'"
                    onmouseout="this.style.backgroundColor='#09CA16'">
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
            <img src="/images/img/leaf-left.svg" alt="" class="h-100 mr-20">
        </div>
        <div class="absolute right-0 bottom-0 opacity-20">
            <img src="/images/img/leaf-right.svg" alt="" class="h-100">
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img src="/images/img/PCAPPTRACK.svg" alt="PCAppTrack Logo"
                    class="w-full max-w-xs sm:max-w-lg md:max-w-md lg:max-w-lg xl:max-w-2xl h-auto mx-auto">
                <p
                    class="text-xs sm:text-sm text-gray-600 mb-8 max-w-2xl mx-auto px-4 -mt-4 sm:-mt-3 md:-mt-3 lg:-mt-6">
                    Ilagay lamang ang iyong natatanging Reference ID sa itinakdang field.
                </p>
            </div>
            <div class="flex max-w-md mx-auto text-sm xs:text-xs px-10 sm:px-14 md:px-8 lg:px-10">
                <input type="text" id="referenceIdInput" placeholder="Ilagay ang iyong reference ID"
                    class="flex-grow px-4 py-2 rounded-l border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-xs placeholder:text-xs">
                <button id="trackButton" type="button" class="px-6 py-2 rounded-r text-white font-medium"
                    style="background-color: #09CA16;">
                    Track
                </button>
            </div>

            <!-- Loading Spinner -->
            <div id="loadingSpinner" class="hidden mt-4">
                <div
                    class="flex items-center justify-center p-3 bg-green-50 border border-green-100 rounded-lg shadow-sm animate-pulse">
                    <svg class="animate-spin h-5 w-5 text-green-600 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                        </circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <span class="font-medium text-green-700">Searching for application details...</span>
                </div>
            </div>

            <!-- Error Message -->
            <div id="errorMessage"
                class="hidden mt-4 p-4 bg-red-50 border border-red-200 rounded-lg shadow-sm animate-fadeIn">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-red-100 rounded-full p-1">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Application Search Error</h3>
                        <div id="errorText" class="mt-1 text-sm text-red-700"></div>
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
            <div class="flex items-center justify-center min-h-screen p-4">
                <div
                    class="relative bg-white rounded-xl shadow-2xl w-full max-w-2xl mx-auto max-h-[85vh] overflow-y-auto transform translate-y-[-1vh]">
                    <!-- Modal Header -->
                    <div class="bg-gradient-to-r from-green-500 to-green-400 p-6 rounded-t-xl relative overflow-hidden">
                        <!-- Decorative elements -->
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mt-12 -mr-12">
                        </div>
                        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-10 rounded-full -mb-12 -ml-12">
                        </div>
                        <div
                            class="absolute top-1/2 left-1/4 w-8 h-8 bg-white opacity-10 rounded-full transform -translate-y-1/2">
                        </div>

                        <div class="flex justify-between items-center relative z-10">
                            <div class="flex-1"></div>
                            <div class="text-center">
                                <h2 class="text-lg sm:text-xl font-bold text-white mt-5 mb-1">
                                    Application Tracking Details</h2>
                                <div class="w-16 h-1 bg-white opacity-70 rounded mx-auto"></div>
                            </div>
                            <div class="flex-1 flex justify-end">
                                <button id="closeModal"
                                    class="text-white hover:text-gray-100 focus:outline-none bg-green-600 hover:bg-green-700 rounded-full p-1 shadow-lg transition-all duration-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Description Text -->
                        <div class="mt-4 text-xs text-white leading-relaxed px-4 relative z-10">
                            <p class="mb-2 text-center text-white text-opacity-90">
                                Ang sumusunod na impormasyon ay tumutukoy sa kasalukuyang estado ng inyong aplikasyon
                                para sa PCA-CFIDP Program. Maaari itong gamitin bilang gabay upang malaman ang progreso
                                o anumang aksyon na isinasagawa.
                            </p>
                        </div>
                    </div>

                    <!-- Modal Body -->
                    <div class="py-6 px-8">
                        <!-- Application Information Section -->
                        <div class="mb-8 mt-1 pt-1">
                            <div class="flex items-center mb-4 space-x-2">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
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
                                    <div class="border border-gray-300 rounded-md p-2 bg-white text-xs text-gray-800"
                                        id="modalApplicationTitle">-</div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Reference
                                            ID</label>
                                        <div class="border border-gray-300 rounded-md p-2 bg-white text-xs text-gray-800"
                                            id="modalReferenceId">-</div>
                                    </div>

                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Date
                                            Submitted:</label>
                                        <div class="border border-gray-300 rounded-md p-2 bg-white text-xs text-gray-800"
                                            id="modalDateSubmitted">-</div>
                                    </div>

                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Contact
                                            Person</label>
                                        <div class="border border-gray-300 rounded-md p-2 bg-white text-xs text-gray-800"
                                            id="modalProponent">-</div>
                                    </div>


                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Application
                                            Status:</label>
                                        <div class="border border-gray-300 rounded-md p-2 bg-white text-xs text-gray-800"
                                            id="modalCurrentStatus">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Application History -->
                        <div class="mb-8">
                            <div class="flex items-center mb-4 space-x-2">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
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
                                    <div
                                        class="inline-flex items-center justify-center bg-gray-100 rounded-full p-2 mb-2">
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
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
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

                    console.log(`Fetching application data from: ${API_BASE_URL}/api/applications/${applicationId}`);

                    const response = await fetch(`${API_BASE_URL}/api/applications/${applicationId}`, {
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
                let contactPersonName = '-';
                if (data.contact_person && data.contact_person.name) {
                    contactPersonName = data.contact_person.name;
                }
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
                statusElement.className = 'border border-gray-300 rounded-md p-2 bg-white text-xs text-gray-800';

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
                                        <span class="inline-flex items-center px-1.5 py-0.5 rounded text-xs font-medium bg-green-50 text-green-700">
                                            ${item.stage || 'Unknown Stage'}
                                        </span>
                                    </div>
                                </div>
                                
                                <!-- Body content -->
                                <div class="space-y-1">
                                    ${item.remarks ? `<p class="text-xs text-gray-800 font-medium">${item.remarks}</p>` : ''}
                                    ${item.action_taken ? `<p class="text-xs text-gray-600">Action: ${item.action_taken}</p>` : ''}
                                    
                                    <!-- Footer with personnel and office -->
                                    <div class="flex justify-between items-center text-xs text-gray-500 pt-1 border-t border-gray-100 mt-1">
                                        <span>${item.staff_name || 'Not specified'}</span>
                                        <span>${item.office || 'N/A'}</span>
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
                                    <p class="text-xs text-yellow-700 font-medium">
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

                        // Add note in Tagalog
                        const noteElement = document.createElement('div');
                        noteElement.className = 'mt-4 text-xs text-gray-600 pt-3 border-t border-gray-100';
                        noteElement.innerHTML = `
                            <p class="mb-2">
                                <span class="font-medium">Mahalaga:</span> Kinakailangan pong maisubmit ang mga nawawalang dokumento para maiproseso nang mabilis ang inyong aplikasyon.
                            </p>
                            <p>
                                Maaari po ninyong isubmit ang mga kulang na dokumento sa opisina ng PCA.                            </p>
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

            // Clear error when user starts typing
            referenceIdInput.addEventListener('input', function () {
                errorMessage.classList.add('hidden');
            });
        });
    </script>

    <!-- CFIDP Introduction -->
    <section class="container mx-auto px-10 py-20">
        <h2 class="text-xl md:text-3xl font-bold text-green-900 mb-1 ml-5">ANO ANG <span
                style="color: #09CA16;">CFIDP?</span></h2>
        <div class="flex flex-col md:flex-row items-center text-xs sm:text-sm text-justify gap-9 ml-5 mr-4">
            <div class="flex-1">
                <p>Ang Coconut Farmers and Industry Development Plan (CFIDP)
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
                <a href="https://ati2.da.gov.ph/ati-4b/content/sites/default/files/2022-12/faqs_coconut_farmers_and_industry_development_plan.pdf"
                    target="_blank" class="inline-block mt-3 text-sm font-medium"
                    style="color: #09CA16; transition: color 0.2s;" onmouseover="this.style.color='#079510'"
                    onmouseout="this.style.color='#09CA16'">
                    Read more <span class="ml-1">→</span>
                </a>
            </div>
            <img src="/images/img/cfidpgp.png" alt="CFIDP Group Photo"
                class="w-full h-auto sm:w-4/5 md:w-3/5 lg:w-2/5 xl:w-1/3 max-w-md mx-auto md:mx-0">
        </div>
    </section>

    <!-- Requirements Section -->
    <section class="bg-green-50 py-16">
        <div class="container mx-auto px-4">
            <!-- Header styled like the image -->
            <div class="text-center mb-8 sm:mb-10 md:mb-12">
                <img src="/images/img/APPLICATION.svg" alt="PCAppTrack Logo"
                    class="w-full max-w-xs sm:max-w-lg md:max-w-md lg:max-w-lg xl:max-w-2xl h-auto mx-auto">
            </div>
            <div class="max-w-4xl mx-auto bg-white shadow-2xl rounded-xl overflow-hidden">
                <!-- Header -->
                <div class="p-3 sm:p-4 md:p-5 text-white"
                    style="background: linear-gradient(135deg, #07da15ff 0%, #0ac016ff 50%, #049911ff 100%);">
                    <div class="flex items-center justify-between px-3 sm:px-6 md:px-8">
                        <div class="flex items-center space-x-2 sm:space-x-3 md:space-x-4">
                            <div
                                class="w-8 sm:w-10 md:w-12 h-8 sm:h-10 md:h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center border border-white/30">
                                <svg class="w-4 sm:w-5 md:w-6 h-4 sm:h-5 md:h-6 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <div class="min-w-0">
                                <h2
                                    class="text-sm sm:text-base md:text-lg lg:text-xl font-bold text-white leading-tight">
                                    Social Protection Program
                                </h2>
                                <p class="text-xs sm:text-sm text-green-100 hidden sm:block">Para sa mga magniniyog at
                                    kanilang pamilya</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-1 sm:space-x-2 md:space-x-3">
                            <div
                                class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-14 lg:h-14 rounded-full bg-white shadow-lg flex items-center justify-center">
                                <img src="/images/IA logos/ATI.svg" alt="ATI Logo"
                                    class="h-6 w-6 sm:h-8 sm:w-8 md:h-10 md:w-10 lg:h-12 lg:w-12 object-contain">
                            </div>
                            <div
                                class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-14 lg:h-14 rounded-full bg-white shadow-lg flex items-center justify-center">
                                <img src="/images/IA logos/TESDA.svg" alt="TESDA Logo"
                                    class="h-6 w-6 sm:h-8 sm:w-8 md:h-10 md:w-10 lg:h-12 lg:w-12 object-contain">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6 space-y-8 pt-10 pb-16">
                    <!-- CocoLSA Certification Section -->
                    <section class="px-2 sm:px-4 lg:px-8">
                        <!-- Single Comprehensive Card -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden mb-4 sm:mb-6">
                            <!-- Card Header -->
                            <div class="p-3 sm:p-3 lg:p-3 border-b border-gray-200"
                                style="background-color:rgb(230, 253, 212);">
                                <div class="flex items-center space-x-3 sm:space-x-4">
                                    <div
                                        class="w-7 h-7 sm:w-8 sm:h-8 bg-green-600 rounded-full flex items-center justify-center flex-shrink-0 ml-3">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h2
                                            class="text-md sm:text-base lg:text-base font-bold text-green-800 mb-1 sm:mb-2 mt-1 sm:mt-2 leading-tight">
                                            CocoLSA Certification Program
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="p-6 space-y-6">
                                <!-- What is CocoLSA -->
                                <div class="border-l-4 border-green-400 pl-4">
                                    <div class="flex items-start space-x-3 mb-3">
                                        <div
                                            class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                </path>
                                            </svg>
                                        </div>
                                        <h3 class="text-md font-bold text-gray-800 mt-1">Ano ang CocoLSA?</h3>
                                    </div>
                                    <p
                                        class="text-gray-700 leading-relaxed ml-11 text-justify text-xs sm:text-sm pr-4 ">
                                        Ang Coco-LSA o Coco-based Learning Site for Agriculture (CocoLSA) Certification
                                        ay isang sakahan na gumagamit ng angkop na teknolohiya sa niyugan,
                                        nagsasagawa ng mabisang estratehiya sa pagsasaka, at matagumpay na
                                        nakakapagpatakbo ng operasyon — kaya’t nararapat tularan.
                                    </p>
                                </div>

                                <!-- Program Goals -->
                                <div class="border-l-4 border-green-400 pl-4">
                                    <div class="flex items-start space-x-3 mb-4">
                                        <div
                                            class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                                </path>
                                            </svg>
                                        </div>
                                        <h3 class="text-md font-bold text-gray-800 mt-1">Mga Layunin ng Programa</h3>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ml-11">
                                        <div class="bg-green-50 p-4 rounded-lg">
                                            <div class="flex items-start space-x-3">
                                                <div
                                                    class="w-20 h-5 bg-green-500 rounded-full flex items-center justify-center mt-2">
                                                    <span class="text-white text-xs font-bold">1</span>
                                                </div>
                                                <div>
                                                    <h4
                                                        class="text-md md:text-md font-semibold text-green-800 mb-2 mt-1">
                                                        Palakasin
                                                        ang
                                                        Kakayahan</h4>
                                                    <p class="text-green-700 text-xs sm:text-sm text-justify pr-2">
                                                        Pagandahin ang kakayahan at kapasidad ng mga miyembro ng
                                                        pamayanang nagtatanim ng niyog sa produksyon, pagpoproseso, at
                                                        pagnenegosyo na nakabatay sa niyog.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-blue-50 p-4 rounded-lg">
                                            <div class="flex items-start space-x-3">
                                                <div
                                                    class="w-20 h-5 bg-green-500 rounded-full flex items-center justify-center mt-2">
                                                    <span class="text-white text-xs font-bold">2</span>
                                                </div>
                                                <div>
                                                    <h4
                                                        class="font-semibold text-md md:text-md text-green-800 mb-2 mt-2">
                                                        Dagdagan ang
                                                        Partisipasyon</h4>
                                                    <p class="text-green-700 text-xs sm:text-sm text-justify pr-2">
                                                        Paramihin ang paglahok ng magniniyog at lider nila sa
                                                        pagpapaunlad ng industriya sa pamamagitan ng pagsisilbing ahente
                                                        ng coconut-based capacity-building.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Program Components -->
                                <div class="border-l-4 border-green-400 pl-2 sm:pl-4">
                                    <div class="flex items-start space-x-2 sm:space-x-3 mb-4 sm:mb-6">
                                        <div
                                            class="w-6 h-6 sm:w-7 sm:h-7 bg-green-100 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-green-600" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                                </path>
                                            </svg>
                                        </div>
                                        <h3 class="text-md sm:text-md font-bold text-gray-800 mt-2 leading-tight">Mga
                                            Kasama sa Programa</h3>
                                    </div>

                                    <div
                                        class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-2 sm:gap-3 ml-8 sm:ml-10 lg:ml-11">
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
                                            <span
                                                class="text-xs xs:text-xs font-semibold text-gray-700 leading-tight block">Training</span>
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
                                            <span
                                                class="text-xs xs:text-xs font-semibold text-gray-700 leading-tight block">Demonstration<br
                                                    class="hidden xs:block">
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
                                            <span
                                                class="text-xs xs:text-xs font-semibold text-gray-700 leading-tight block">Information<br
                                                    class="hidden xs:block"> Support</span>
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
                                            <span
                                                class="text-xs xs:text-xs font-semibold text-gray-700 leading-tight block">Technical<br
                                                    class="hidden xs:block">
                                                Assistance</span>
                                        </div>

                                        <div
                                            class="bg-gray-50 p-2 sm:p-3 rounded-lg text-center hover:shadow-md transition-shadow duration-200 xs:col-span-2 sm:col-span-1">
                                            <div
                                                class="w-8 h-8 sm:w-9 sm:h-9 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-2 sm:mb-3">
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <span
                                                class="text-xs xs:text-xs font-semibold text-gray-700 leading-tight block">Complementary<br
                                                    class="hidden xs:block">
                                                Projects</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Selection and Prioritization Criteria -->
                    <section class="px-2 sm:px-4 lg:px-8">
                        <!-- Single Comprehensive Card -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden mb-4 sm:mb-6">
                            <!-- Card Header -->
                            <div class="bg-yellow-50 p-5 sm:p-4 lg:p-3 border-b border-gray-200">
                                <div class="flex items-center space-x-2 sm:space-x-3 mb-1 sm:mb-2 ml-5">
                                    <div
                                        class="w-7 h-7 sm:w-8 sm:h-8 bg-yellow-600 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h2
                                            class="text-base sm:text-lg font-bold text-yellow-800 mt-1 sm:mt-2 leading-tight">
                                            Mga Kriterya para sa Pagpili</h2>
                                        <p class="text-yellow-700 text-xs sm:text-sm leading-tight">Ano ang mga
                                            kailangan para makakuha ng
                                            CocoLSA certification</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="p-4 sm:p-5 lg:p-6 space-y-4 sm:space-y-6">
                                <!-- Individual Farmer Requirements -->
                                <div>
                                    <div class="flex items-center space-x-2 sm:space-x-3 mb-3 sm:mb-4">
                                        <div
                                            class="w-6 h-6 sm:w-7 sm:h-7 ml-5 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="min-w-0">
                                            <h3 class="text-sm md:text-md font-bold text-yellow-800 leading-tight">Para
                                                sa Individual na Farmer
                                            </h3>

                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 sm:gap-4 ml-10 sm:ml-12 lg:ml-14">
                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">1</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Filipino
                                                        Coconut Farmer
                                                    </h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">Dapat ay
                                                        isang Pilipinong magniniyog (may-ari, nagtatanim, o
                                                        tagapag-alaga) na may hindi bababa sa 1 ektaryang niyugan.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">2</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Willing to
                                                        Demonstrate
                                                    </h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">Handa at
                                                        may kakayahang magpakita ng mga teknolohiya sa niyog sa kanyang
                                                        sakahan anumang oras na kailangan ng kliyente.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">3</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Open to
                                                        Training</h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">Dapat ay
                                                        may kahandaang sumailalim sa mga regular na
                                                        pagsasanay</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">4</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Physically Fit
                                                    </h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">May
                                                        pisikal na kakayahang gampanan ang mga tungkulin bilang CocoLSA
                                                        cooperator; at</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">5</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        NCFRS
                                                        Registered</h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                                                        Rehistrado sa NCFRS, at mas mainam kung miyembro ng isang CFO o
                                                        CFC.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Group/Organization Requirements -->
                                <div>
                                    <div class="flex items-center space-x-2 sm:space-x-3 mb-3 sm:mb-4">
                                        <div
                                            class="w-6 h-6 sm:w-7 sm:h-7 ml-5 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="min-w-0">
                                            <h3 class="text-sm md:text-md font-bold text-green-800 leading-tight">Para
                                                sa Grupo/Organisasyon
                                            </h3>

                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 sm:gap-4 ml-10 sm:ml-12 lg:ml-14">
                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs sm:text-sm font-bold">1</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Integrated Farm</h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">Dapat ay
                                                        may sukat na hindi bababa sa 1 ektarya, at isang integrated at/o
                                                        diversified na sakahan (halimbawa: niyog at pag-aalaga ng
                                                        hayop).</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs sm:text-sm font-bold">2</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Coconut Farmland</h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">Dapat
                                                        ay nagmamay-ari at namamahala ng sakahang niyugan na may sukat
                                                        na hindi bababa sa 1 ektarya.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs sm:text-sm font-bold">3</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Valid Registration</h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">May
                                                        valid na rehistrasyon mula sa SEC, CDA, DOLE, o kasalukuyang
                                                        akreditasyon mula sa PCA.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs sm:text-sm font-bold">4</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Active Organization
                                                    </h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">Aktibo
                                                        sa nakalipas na 3 taon sa organisasyon ng mga magsasaka o
                                                        community enterprise development.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs sm:text-sm font-bold">5</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Filipino Leaders</h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">Dapat ay
                                                        binubuo ng mga Pilipinong lider-magsasaka o kasapi na:</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs font-bold">5.1</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Demo of Coconut Technologies</h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">Handa at
                                                        may kakayahang
                                                        magpakita ng mga teknolohiya sa niyog sa kanyang
                                                        sakahan kapag kinakailangan.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs font-bold">5.2</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Training Ready</h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">May
                                                        kahandaang sumailalim at aktibong lumahok sa mga regular na
                                                        pagsasanay upang mapalawak ang kaalaman at kasanayan; at</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs font-bold">5.3</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Physically Capable</h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">May
                                                        pisikal na kakayahan upang magampanan ang mga responsibilidad
                                                        bilang isang LSA cooperator at LSA.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Farm Requirements -->
                                <div>
                                    <div class="flex items-center space-x-3 mb-4">
                                        <div
                                            class="w-7 h-7 bg-yellow-500 ml-5 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 2L3 7v11a1 1 0 001 1h3v-7a1 1 0 011-1h4a1 1 0 011 1v7h3a1 1 0 001-1V7l-7-5z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-sm md:text-md font-bold text-yellow-800 leading-tight">Para
                                                sa Farm (Individual at Group)
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 sm:gap-4 ml-10 sm:ml-12 lg:ml-14">
                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                            <div class="flex items-start space-x-3">
                                                <div
                                                    class="w-6 h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0">
                                                    <span class="text-yellow-600 text-xs font-bold">1</span>
                                                </div>
                                                <div class="flex-1">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-2 mt-0.5">
                                                        Integrated
                                                        Farm</h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm">Hindi bababa sa 1
                                                        hectare ng
                                                        integrated/diversified farm (coconut-livestock,
                                                        coconut-agro-forestry, coconut-crop)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                            <div class="flex items-start space-x-3">
                                                <div
                                                    class="w-6 h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0">
                                                    <span class="text-yellow-600 text-xs font-bold">2</span>
                                                </div>
                                                <div class="flex-1">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-2 mt-0.5">
                                                        Demo Area
                                                    </h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm">Naglalaman ng
                                                        demonstration area para sa teknolohiya ng produksiyon ng niyog,
                                                        na may kasamang holding area, hugasan, at palikuran.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                            <div class="flex items-start space-x-3">
                                                <div
                                                    class="w-6 h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0">
                                                    <span class="text-yellow-600 text-xs font-bold">3</span>
                                                </div>
                                                <div class="flex-1">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-2 mt-0.5">
                                                        Accessible
                                                        Location
                                                    </h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm">Madaling puntahan sa
                                                        pamamagitan ng land travel at iba pang uri ng transportasyon.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                            <div class="flex items-start space-x-3">
                                                <div
                                                    class="w-6 h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0">
                                                    <span class="text-yellow-600 text-xs font-bold">4</span>
                                                </div>
                                                <div class="flex-1">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-2 mt-0.5">
                                                        Well-Landscaped</h4>
                                                    <p class="text-gray-600 text-xs sm:text-sm">May kaaya-ayang disenyo
                                                        ng kapaligiran at maayos na landscaping.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Documentary Requirements -->
                    <section class="px-4 lg:px-8 text-sm ">
                        <!-- Single Comprehensive Card -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden -mb-5">
                            <!-- Card Header -->
                            <div class="bg-green-50 p-3 border-b border-gray-200">
                                <div class="flex items-center space-x-3 mb-2 ml-5">
                                    <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h2 class="text-base lg:text-lg font-bold text-green-800 mt-2">Mga Kailangang
                                            Dokumento</h2>
                                        <p class="text-green-700 text-xs sm:text-sm">Siguruhing kumpleto ang lahat ng
                                            documento
                                            bago mag-apply</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="p-6 space-y-4">
                                <!-- Documents Grid -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ml-2">
                                    <div
                                        class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                        <div class="flex items-center space-x-2 sm:space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">1</span>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    Applicant's Checklist of Requirements</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    Signed
                                                    Briefer</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">3</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    Self-Assessment</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3 mt-0 lg:mt-2">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">4</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    Letter
                                                    of Intent to become a CocoLSA</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4 pt-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">5</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    Farming
                                                    Learning Site for Agriculture Profile Form</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">6</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    LSA
                                                    Qualification Form</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">7</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">Field
                                                    Validation Report</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">8</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">LSA
                                                    Acceptance Form</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">9</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    Endorsement of the RTWG</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Important Notice -->
                                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mt-6 ">
                                    <div class="flex items-start space-x-3">
                                        <svg class="w-5 h-5 text-yellow-400 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-xs sm:text-sm text-yellow-800 mb-1">IMPORTANT!
                                            </h4>
                                            <p class="text-yellow-700 text-xs sm:text-sm">If endorsed with financial
                                                assistance, a
                                                <strong>Development Plan</strong> shall be
                                                required.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="max-w-4xl mx-auto bg-white shadow-2xl rounded-xl overflow-hidden mt-8">
                <!-- Header -->
                <div class=" p-6 text-white"
                    style="background: linear-gradient(135deg, #3b82f6 0%, #2b68ebff 50%, #0735b3ff 100%);">
                    <div class="flex items-center justify-between px-3 sm:px-6 md:px-8">
                        <div class="flex items-center space-x-2 sm:space-x-3 md:space-x-4">
                            <div
                                class="w-8 sm:w-10 md:w-12 h-8 sm:h-10 md:h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center border border-white/30">
                                <svg class="w-4 sm:w-5 md:w-6 h-4 sm:h-5 md:h-6 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <div class="min-w-0">
                                <h2
                                    class="text-sm sm:text-base md:text-lg lg:text-xl font-bold text-white leading-tight">
                                    Integrated Coconut Processing

                                </h2>
                                <p class="text-xs sm:text-sm text-green-100 hidden sm:block">and Downstream Products</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-1 sm:space-x-2 md:space-x-3">
                            <div
                                class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-12 lg:h-12 rounded-full bg-white shadow-lg flex items-center justify-center">
                                <img src="/images/IA logos/PM.svg" alt="PM Logo"
                                    class="h-5 w-5 sm:h-8 sm:w-8 md:h-10 md:w-10 lg:h-10 lg:w-10 object-contain">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6 space-y-8 pt-10 pb-16">
                    <!-- Selection and Prioritization Criteria -->
                    <section class="px-4 sm:px-6 lg:px-8">
                        <!-- Single Comprehensive Card -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden mb-4 sm:mb-6">
                            <!-- Card Header -->
                            <div class="bg-blue-50 p-2 sm:p-4 lg:p-3 border-b border-gray-200">
                                <div class="flex items-center space-x-2 sm:space-x-3 mb-1 sm:mb-2 ml-5">
                                    <div
                                        class="w-7 h-7 sm:w-8 sm:h-8 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h2
                                            class="text-base sm:text-lg font-bold text-blue-800 mt-1 sm:mt-2 leading-tight">
                                            Mga Kriterya para sa Pagpili</h2>
                                        <p class="text-blue-700 text-xs sm:text-sm leading-tight">Pangunahing
                                            kakailanganin
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="p-4 sm:p-5 lg:p-6 space-y-4 sm:space-y-6">
                                <!-- base Requirements -->
                                <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-4">
                                    <div
                                        class="bg-blue-50 border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                                <span class="text-blue-600 text-sm font-bold">1</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-2 mt-1.5">
                                                    Letter
                                                    of Intent</h4>
                                                <p class="text-gray-600 text-xs sm:text-sm -mt-1">Liham ng intensyon
                                                    para sa
                                                    processing
                                                    facility</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-blue-50 border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                                <span class="text-blue-600 text-sm font-bold">2</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-2  mt-1.5">
                                                    Endorsement letter from PCA</h4>
                                                <p class="text-gray-600 text-xs sm:text-sm -mt-1">Endorsement mula sa
                                                    Provincial/Regional/Central Office</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-blue-50 border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                                <span class="text-blue-600 text-sm font-bold">3</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-2  mt-1.5">
                                                    NCFRS
                                                    Certification</h4>
                                                <p class="text-gray-600 text-xs sm:text-sm -mt-1">Kumpirmado at inisyu
                                                    ng
                                                    Regional Office
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-blue-50 border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                                <span class="text-blue-600 text-sm font-bold">4</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-2  mt-1.5">
                                                    Financial Statement for two (2) years</h4>
                                                <p class="text-gray-600 text-xs sm:text-sm -mt-1">2 years external audit
                                                    financial
                                                    statement
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-blue-50 border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                                <span class="text-blue-600 text-sm font-bold">5</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-2 mt-1.5">
                                                    CDA
                                                    Registration</h4>
                                                <p class="text-gray-600 text-xs sm:text-sm -mt-1">Rehistradong
                                                    kooperatiba sa
                                                    ilalim ng CDA</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-blue-50 border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                                <span class="text-blue-600 text-sm font-bold">6</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-2 mt-1.5">
                                                    CDA
                                                    Certificate of Compliance</h4>
                                                <p class="text-gray-600 text-xs sm:text-sm -mt-1">Certificate of
                                                    Compliance
                                                    (updated
                                                    annually)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-blue-50 border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                                <span class="text-blue-600 text-sm font-bold">7</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-2 mt-1.5">
                                                    Articles
                                                    of Cooperation and By-Laws</h4>
                                                <p class="text-gray-600 text-xs sm:text-sm -mt-1">Mga Artikulo ng
                                                    Kooperasyon
                                                    at By-Laws (maayos na notaryo o notarizado)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-blue-50 border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                                <span class="text-blue-600 text-sm font-bold">8</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-2 mt-1.5">
                                                    Existing Organizational Structure
                                                </h4>
                                                <p class="text-gray-600 text-xs sm:text-sm -mt-1">Kasalukuyang
                                                    Estruktura ng
                                                    Organisasyon
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-blue-50  border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                                <span class="text-blue-600 text-sm font-bold">9</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-2 mt-1.5">
                                                    Board
                                                    Resolution</h4>
                                                <p class="text-gray-600 text-xs sm:text-sm -mt-1">Maayos
                                                    na notarizado; dapat nakasaad ang kaukulang kahilingan</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-blue-50 border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                                <span class="text-blue-600 text-sm font-bold">10</span>
                                            </div>
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-2 mt-1.5">
                                                    Community/Site Profile</h4>
                                                <p class="text-gray-600 text-xs sm:text-sm -mt-1">Detalyadong profile ng
                                                    komunidad/lokasyon</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                                <span class="text-blue-600 text-sm font-bold">11</span>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-2 mt-1.5">
                                                    Official List of Members</h4>
                                                <p class="text-gray-600 text-xs sm:text-sm -mt-1">Hindi bababa sa 100
                                                    miyembro
                                                    at hindi kukulangin sa 50%+1 ay rehistradong magsasaka ng niyog – na
                                                    beripikado sa pamamagitan ng NCFRS Certification</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Additional Requirements -->
                    <section class="px-4 lg:px-8 text-sm">
                        <!-- Single Comprehensive Card -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden -mb-5">
                            <!-- Card Header -->
                            <div class="bg-green-50 p-4 border-b border-gray-200">
                                <div class="flex items-center space-x-3 mb-2">
                                    <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h2 class="text-base lg:text-lg font-bold text-green-800">Additional
                                            Requirements</h2>
                                        <p class="text-green-700 text-xs sm:text-sm">Pagkatapos ng pag-apruba ng Central
                                            Office (CO) at bago ang aktwal na konstruksyon ng pasilidad</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="p-6 space-y-4">
                                <!-- Documents Grid -->
                                <div class="grid grid-cols-1  gap-4">
                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">1</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-1">
                                                    Proposal/Business Plan/Feasibility Study
                                                </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                                <span class="text-green-600 text-sm font-bold">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800 mb-1">
                                                    Deed of Donation of Lot if private property; MOA/Usufruct
                                                    Agreement if Lot is a government property.</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>


            <div class="max-w-4xl mx-auto bg-white shadow-2xl rounded-xl overflow-hidden  mt-10">
                <!-- Header -->
                <div class="p-3 sm:p-4 md:p-5 text-white"
                    style="background: linear-gradient(135deg, #91d64fff 0%, #6a9e3a 50%, #5b8a31 100%);">
                    <div class="flex items-center justify-between px-3 sm:px-6 md:px-8">
                        <div class="flex items-center space-x-2 sm:space-x-3 md:space-x-4">
                            <div
                                class="w-8 sm:w-10 md:w-12 h-8 sm:h-10 md:h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center border border-white/30">
                                <svg class="w-4 sm:w-5 md:w-6 h-4 sm:h-5 md:h-6 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <div class="min-w-0">
                                <h2
                                    class="text-sm sm:text-base md:text-lg lg:text-xl font-bold text-white leading-tight">
                                    Support Services
                                </h2>
                                <p class="text-xs sm:text-sm text-green-100 hidden sm:block">Mga Serbisyong Tulong</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-1 sm:space-x-2 md:space-x-3">
                            <div
                                class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-14 lg:h-14 rounded-full bg-white shadow-lg flex items-center justify-center">
                                <img src="/images/IA logos/DPWH.svg" alt="DPWH Logo"
                                    class="h-6 w-6 sm:h-8 sm:w-8 md:h-10 md:w-10 lg:h-12 lg:w-12 object-contain">
                            </div>
                            <div
                                class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-14 lg:h-14 rounded-full bg-white shadow-lg flex items-center justify-center">
                                <img src="/images/IA logos/DBP.svg" alt="DBP Logo"
                                    class="h-6 w-6 sm:h-8 sm:w-8 md:h-10 md:w-10 lg:h-10 lg:w-10 object-contain">
                            </div>
                            <div
                                class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-14 lg:h-14 rounded-full bg-white shadow-lg flex items-center justify-center">
                                <img src="/images/IA logos/LBP.svg" alt="LBP Logo"
                                    class="h-6 w-6 sm:h-8 sm:w-8 md:h-10 md:w-10 lg:h-11 lg:w-11 object-contain">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6 space-y-8 pt-10 pb-16 ">
                    <!-- CocoLSA Certification Section -->
                    <section class="px-2 sm:px-4 lg:px-8">
                        <!-- Single Comprehensive Card -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden mb-4 sm:mb-6">
                            <!-- Card Header -->
                            <div class="p-3 sm:p-3 lg:p-3 border-b border-gray-200 "
                                style="background-color:rgb(230, 253, 212);">
                                <div class="flex items-center space-x-3 sm:space-x-4">
                                    <div
                                        class="w-7 h-7 sm:w-8 sm:h-8 bg-green-600 rounded-full flex items-center justify-center flex-shrink-0 ml-3">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h2
                                            class="text-md sm:text-base lg:text-base font-bold text-green-800 mb-1 sm:mb-2 mt-1 sm:mt-2 leading-tight">
                                            Credit
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="p-6 space-y-6">
                                <!-- What is CocoLSA -->
                                <div class="border-l-4 border-green-400 pl-4">
                                    <div class="flex items-start space-x-3 mb-3">
                                        <div
                                            class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                </path>
                                            </svg>
                                        </div>
                                        <h3 class="text-md font-bold text-gray-800 mt-1">Ano ang tungkulin ng PCA sa
                                            CFID Credit Program?</h3>
                                    </div>
                                    <p
                                        class="text-gray-700 leading-relaxed ml-11 text-justify text-xs sm:text-sm pr-4 ">
                                        Karaniwan, ang mga kooperatiba o indibidwal na magsasaka ay direktang tumutungo
                                        sa LBP o DBP upang makinabang sa CFID Credit Program. Ang PCA ay nagsisilbing
                                        katuwang na ahensyang tagapagpatupad ng mga bangkong ito pagdating sa
                                        beripikasyon ng NCFRS, akreditasyon ng PCA, at iba pang mga beripikasyon na may
                                        kaugnayan sa coconut value chain.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Base Requirements -->
                    <section class="px-2 sm:px-4 lg:px-8">
                        <!-- Single Comprehensive Card -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden mb-4 sm:mb-6">
                            <!-- Card Header -->
                            <div class="bg-yellow-50 p-5 sm:p-4 lg:p-3 border-b border-gray-200">
                                <div class="flex items-center space-x-2 sm:space-x-3 mb-1 sm:mb-2 ml-5">
                                    <div
                                        class="w-7 h-7 sm:w-8 sm:h-8 bg-yellow-600 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h2
                                            class="text-base sm:text-lg font-bold text-yellow-800 mt-1 sm:mt-2 leading-tight">
                                            Mga Kailangang Dokumento</h2>
                                        <p class="text-yellow-700 text-xs sm:text-sm leading-tight">Mga kailangang
                                            dokumento para makapag-apply ng credit</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="p-4 sm:p-5 lg:p-6 space-y-4 sm:space-y-6">
                                <!-- Base Requirements (of PCA) -->
                                <div>
                                    <div class="flex items-center space-x-2 sm:space-x-3 mb-3 sm:mb-4">
                                        <div
                                            class="w-6 h-6 sm:w-7 sm:h-7 ml-5 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm0 2v8h12V6H4z"
                                                    clip-rule="evenodd"></path>
                                                <path d="M6 8h8v2H6V8zM6 11h4v2H6v-2z"></path>
                                            </svg>
                                        </div>
                                        <div class="min-w-0">
                                            <h3 class="text-sm md:text-md font-bold text-yellow-800 leading-tight">Base
                                                Requirements (of PCA)
                                            </h3>

                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 sm:gap-4 ml-10 sm:ml-12 lg:ml-14">
                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-center space-x-2 sm:space-x-3 mt-0 md:mt-2 lg:mt-2">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">1</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 leading-tight">
                                                        Letter of Intent
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0 md:mt-2 lg:mt-2">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">2</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                         class="font-semibold text-xs sm:text-sm text-gray-800 leading-tight">
                                                        NCFRS Registration and Certification
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0 md:mt-2 lg:mt-2">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">3</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        CSO Accreditation issued by PCA or DA</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3 mt-0 md:mt-2 lg:mt-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">4</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        CDA Registration and COC
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center  flex-shrink-0 mt-1.5 md:mt-2 lg:mt-2">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">5</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Financial Statement for two (2) years (external audit);
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1.5 md:mt-2 lg:mt-2">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">6</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Articles of Cooperation and By-Laws (duly notarized)
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">7</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Existing Organizational Structure
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">8</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Official list of members
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0 mt-4 md:mt-2 lg:mt-0.5">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">9</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Board Resolution (if requestee is a Cooperative; not needed if
                                                        individual farmer)</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Documentary Requirements (of DBP/LBP) -->
                                <div>
                                    <div class="flex items-center space-x-2 sm:space-x-3 mb-3 sm:mb-4">
                                        <div
                                            class="w-6 h-6 sm:w-7 sm:h-7 ml-5 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="min-w-0">
                                            <h3 class="text-sm md:text-md font-bold text-green-800 leading-tight">
                                                Documentary Requirements (of DBP/LBP)
                                            </h3>
                                            <p class="text-xs text-gray-600 text-green-800 italic">Coconut Farmer
                                                Enterprise</p>

                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 gap-3 sm:gap-4 ml-10 sm:ml-12 lg:ml-14">
                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs sm:text-sm font-bold">1</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        DBP Loan Application Forms</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs sm:text-sm font-bold">2</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Proof of NCFRS enlistment</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs sm:text-sm font-bold">3</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Photocopy of Certificate of Registration from the DTI/SEC</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs sm:text-sm font-bold">4</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Certificate of Accreditation from PCA
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs font-bold">5</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Business Plan, if applicable</h4>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-green-600 text-xs font-bold">6</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Current year Business Permit</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-3 md:mt-2 lg:mt-3 flex-shrink-0">
                                                    <span class="text-green-600 text-xs sm:text-sm font-bold">7</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0 md:mt-2 lg:mt-1 leading-tight">
                                                        Audited Financial Statements for the last year; or latest
                                                        Interim
                                                        Financial Statements for start-ups
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-green-100 rounded-full flex items-center justify-center mt-5 md:mt-2 lg:mt-3 flex-shrink-0">
                                                    <span class="text-green-600 text-xs sm:text-sm font-bold">8</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Training Certificate from an accredited provider (e.g., TESDA,
                                                        DA-ATI) on financial literacy and on projects related to the
                                                        coconut value chain
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Cooperatives and Organizations -->
                                <div>
                                    <div class="flex items-center space-x-3 mb-4">
                                        <div
                                            class="w-6 h-6 sm:w-7 sm:h-7 ml-5 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="min-w-0">
                                            <h3 class="text-sm md:text-md font-bold text-yellow-800 leading-tight">
                                                Documentary Requirements (of DBP/LBP)
                                            </h3>
                                            <p class="text-xs text-gray-600 text-yellow-800 italic">Coconut Farmers
                                                Cooperatives and Organizations</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 sm:gap-4 ml-10 sm:ml-12 lg:ml-14">
                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">1</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        DBP Loan Application Forms</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">2</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Photocopy of Certificate of Registration from the CDA/SEC</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">3</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Certificate of Accreditation from PCA</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">4</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Certificate of Compliance from CDA, if applicable</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">5</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Certificate of Tax Exemption, if applicable</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">6</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Copies of Articles of Incorporation/Cooperation and By-Laws</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-3 md:mt-2 lg:mt-3 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">7</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Bio-data of incumbent Officers and Board of Directors with
                                                        photocopy of valid government issued ID</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-4 md:mt-2 lg:mt-3 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">8</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Board Resolution authorizing the Cooperative/ Organization to
                                                        borrow and designating the authorized signatories</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-4 md:mt-2 lg:mt-3 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">9</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Audited Financial Statements for the last year; or latest
                                                        Interim
                                                        Financial Statements for start-ups</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">10</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Business Plan, if applicable</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-0 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">11</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Current year Business Permit</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                            <div class="flex items-start space-x-2 sm:space-x-3">
                                                <div
                                                    class="w-5 h-5 sm:w-6 sm:h-6 bg-yellow-100 rounded-full flex items-center justify-center mt-7 md:mt-2 lg:mt-5 flex-shrink-0">
                                                    <span class="text-yellow-600 text-xs sm:text-sm font-bold">12</span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h4
                                                        class="font-semibold text-xs sm:text-sm text-gray-800 mb-1 sm:mb-2 mt-0.5 leading-tight">
                                                        Training Certificate of the cooperative and its key officers
                                                        from an
                                                        accredited provider (e.g., TESDA, DA-ATI) on financial literacy
                                                        and on projects related to the coconut value chain</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Documentary Requirements -->
                    <section class="px-4 lg:px-8 text-sm ">
                        <!-- Single Comprehensive Card -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden -mb-5">
                            <!-- Card Header -->
                            <div class="bg-green-50 p-3 border-b border-gray-200">
                                <div class="flex items-center space-x-3 mb-2 ml-5">
                                    <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h2 class="text-base lg:text-lg font-bold text-green-800 mt-2">Mga Kailangang
                                            Dokumento</h2>
                                        <p class="text-green-700 text-xs sm:text-sm">Siguruhing kumpleto ang lahat ng
                                            documento
                                            bago mag-apply</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="p-6 space-y-4">
                                <!-- Documents Grid -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ml-2">
                                    <div
                                        class="bg-green-50 border border-green-200 rounded-lg p-3 sm:p-4 md:col-span-2">
                                        <div class="flex items-center space-x-2 sm:space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">1</span>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    Applicant's Checklist of Requirements</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    Signed
                                                    Briefer</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">3</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    Self-Assessment</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3 mt-0 lg:mt-2">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">4</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    Letter
                                                    of Intent to become a CocoLSA</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4 pt-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">5</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    Farming
                                                    Learning Site for Agriculture Profile Form</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">6</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    LSA
                                                    Qualification Form</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">7</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">Field
                                                    Validation Report</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">8</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">LSA
                                                    Acceptance Form</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 text-sm font-bold">9</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-xs sm:text-sm text-gray-800">
                                                    Endorsement of the RTWG</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Important Notice -->
                                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mt-6 ">
                                    <div class="flex items-start space-x-3">
                                        <svg class="w-5 h-5 text-yellow-400 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-xs sm:text-sm text-yellow-800 mb-1">IMPORTANT!
                                            </h4>
                                            <p class="text-yellow-700 text-xs sm:text-sm">If endorsed with financial
                                                assistance, a
                                                <strong>Development Plan</strong> shall be
                                                required.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg mt-8">
                <!-- Header -->
                <div class="bg-gradient-to-r from-purple-600 to-pink-600 text-white">
                    <div class="flex items-center justify-between p-6">
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center border border-white/30">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h1 class="text-xl md:text-2xl font-bold">Support Services</h1>
                                <p class="text-purple-100 text-sm">Mga Serbisyong Tulong</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-14 h-14 rounded-full bg-white shadow-lg flex items-center justify-center">
                                <img src="/images/IA logos/DPWH.svg" alt="DPWH Logo" class="h-14 w-14 object-contain">
                            </div>
                            <div class="w-14 h-14 rounded-full bg-white shadow-lg flex items-center justify-center">
                                <img src="/images/IA logos/DBP.svg" alt="DBP Logo" class="h-10 w-10 object-contain">
                            </div>
                            <div
                                class="w-14 h-14 rounded-full bg-white border border-gray-100 shadow-sm flex items-center justify-center overflow-hidden">
                                <img src="/images/IA logos/LBP.svg" alt="TESDA Logo" class="h-10 w-10 object-contain">
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Content -->
                <div class="p-6 space-y-8">
                    <!-- Credit -->
                    <section class="px-8 ml-8 text-sm">
                        <h2 class="text-base font-semibold text-gray-800">Credit</h2>
                        <p class="text-gray-600 mb-4 text-sm text-justify">
                            Cooperatives/individual farmers usually direct to either
                            LBP/DBP to avail the CFID Credit Program. PCA acts as support implementing
                            agency to these banks as far as NCFRS validation, PCA-accreditation, and other
                            validation for coconut value chain are concerned.
                        </p>
                    </section>

                    <!-- Base Reqs -->
                    <section class="px-4 lg:px-8 text-sm">
                        <!-- Requirements -->
                        <div class="mb-8">
                            <!-- Section Header -->
                            <div class="bg-purple-50 p-6 rounded-lg mb-6">
                                <div class="flex items-center space-x-3 mb-2">
                                    <div class="w-8 h-8 bg-purple-600 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-purple-800">Credit Requirements</h3>
                                </div>
                                <p class="text-purple-700 text-base">Para sa CFID Credit Program sa LBP/DBP</p>
                            </div>

                            <!-- Requirements Cards -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-purple-600 text-sm font-bold">1</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Letter of Intent</h4>
                                            <p class="text-gray-600 text-sm">Liham ng intensyon para sa credit</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-purple-600 text-sm font-bold">2</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">NCFRS Registration</h4>
                                            <p class="text-gray-600 text-sm">NCFRS Registration and Certification</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-purple-600 text-sm font-bold">3</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">CSO Accreditation</h4>
                                            <p class="text-gray-600 text-sm">CSO Accreditation mula sa PCA o DA</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-purple-600 text-sm font-bold">4</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">CDA Documents</h4>
                                            <p class="text-gray-600 text-sm">CDA Registration and Certificate of
                                                Compliance</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-purple-600 text-sm font-bold">5</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Financial Statement</h4>
                                            <p class="text-gray-600 text-sm">2 years external audit financial statement
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-purple-600 text-sm font-bold">6</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Board Resolution</h4>
                                            <p class="text-gray-600 text-sm">Kung cooperative (hindi kailangan kung
                                                individual farmer)</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-purple-600 text-sm font-bold">7</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Articles & By-Laws</h4>
                                            <p class="text-gray-600 text-sm">Articles of Cooperation and By-Laws
                                                (notarized)</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-purple-600 text-sm font-bold">8</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Organizational Structure</h4>
                                            <p class="text-gray-600 text-sm">Kasalukuyang organizational structure</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-purple-600 text-sm font-bold">9</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Members List</h4>
                                            <p class="text-gray-600 text-sm">Official list ng mga members</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Documentary Requirements -->
                        <div class="mb-8">
                            <!-- Section Header -->
                            <div class="bg-purple-50 p-6 rounded-lg mb-6">
                                <div class="flex items-center space-x-3 mb-2">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                    <h2 class="text-xl font-bold text-purple-800">Mga Kinakailangang Dokumento</h2>
                                </div>
                                <p class="text-purple-700 text-base">Para sa CFID Credit Program sa DBP/LBP</p>
                            </div>

                            <!-- Coconut Farmer Enterprises -->
                            <div class="mb-6">
                                <div class="bg-orange-50 border-l-4 border-orange-400 p-4 rounded-r-lg mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="w-8 h-8 bg-orange-400 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z">
                                                </path>
                                            </svg>
                                        </div>
                                        <h3 class="text-lg font-bold text-orange-800">Coconut Farmer Enterprises</h3>
                                        <span class="text-sm text-orange-600">(Mga Negosyong Magniniyog)</span>
                                    </div>
                                </div>

                                <!-- Requirements Cards for Enterprises -->
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <!-- Card 1 -->
                                    <div
                                        class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">1</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Application Forms
                                                </h4>
                                                <p class="text-gray-600 text-xs">DBP Loan Application Forms / Mga Form
                                                    para sa Utang sa DBP</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div
                                        class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">NCFRS Registration
                                                </h4>
                                                <p class="text-gray-600 text-xs">Proof of NCFRS enlistment / Patunay na
                                                    nakalista sa NCFRS</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div
                                        class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">3</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Business
                                                    Registration</h4>
                                                <p class="text-gray-600 text-xs">Certificate of Registration from
                                                    DTI/SEC / Rehistro ng Negosyo</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 4 -->
                                    <div
                                        class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">4</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">PCA Accreditation
                                                </h4>
                                                <p class="text-gray-600 text-xs">Certificate of Accreditation from PCA /
                                                    Sertipiko ng Akreditasyon</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 5 -->
                                    <div
                                        class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">5</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Financial
                                                    Statements</h4>
                                                <p class="text-gray-600 text-xs">Audited Financial Statements /
                                                    Pinanigarang Ulat sa Kita</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 6 -->
                                    <div
                                        class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">6</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Business Plan</h4>
                                                <p class="text-gray-600 text-xs">Business Plan (if applicable) / Plano
                                                    ng Negosyo kung kinakailangan</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 7 -->
                                    <div
                                        class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">7</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Business Permit
                                                </h4>
                                                <p class="text-gray-600 text-xs">Current year Business Permit /
                                                    Pahintulot sa Negosyo (kasalukuyan)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 8 -->
                                    <div
                                        class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">8</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Training
                                                    Certificate</h4>
                                                <p class="text-gray-600 text-xs">Training Certificate from TESDA/DA-ATI
                                                    / Sertipiko ng Pagsasanay</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Coconut Farmers Cooperatives and Organizations -->
                            <div class="mb-6">
                                <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-r-lg mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-blue-400 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <h3 class="text-lg font-bold text-blue-800">Coconut Farmers Cooperatives &
                                            Organizations</h3>
                                        <span class="text-sm text-blue-600">(Mga Kooperatiba at Organisasyon)</span>
                                    </div>
                                </div>

                                <!-- Requirements Cards for Cooperatives -->
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <!-- Card 1 -->
                                    <div
                                        class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">1</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Application Forms
                                                </h4>
                                                <p class="text-gray-600 text-xs">DBP Loan Application Forms / Mga Form
                                                    para sa Utang</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div
                                        class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">CDA Registration
                                                </h4>
                                                <p class="text-gray-600 text-xs">Certificate of Registration from
                                                    CDA/SEC / Rehistro sa CDA</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div
                                        class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">3</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">PCA Accreditation
                                                </h4>
                                                <p class="text-gray-600 text-xs">Certificate of Accreditation from PCA /
                                                    Sertipiko ng Akreditasyon</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 4 -->
                                    <div
                                        class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">4</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">CDA Compliance</h4>
                                                <p class="text-gray-600 text-xs">Certificate of Compliance from CDA /
                                                    Sertipiko ng Pagsunod</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 5 -->
                                    <div
                                        class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">5</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Tax Exemption</h4>
                                                <p class="text-gray-600 text-xs">Certificate of Tax Exemption /
                                                    Sertipiko ng Pagkakaalis sa Buwis</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 6 -->
                                    <div
                                        class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">6</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Articles & By-Laws
                                                </h4>
                                                <p class="text-gray-600 text-xs">Articles of Incorporation/Cooperation
                                                    and By-Laws</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 7 -->
                                    <div
                                        class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">7</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Officers Bio-data
                                                </h4>
                                                <p class="text-gray-600 text-xs">Bio-data of Officers and Board of
                                                    Directors / Talambuhay ng mga Opisyal</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 8 -->
                                    <div
                                        class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">8</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Board Resolution
                                                </h4>
                                                <p class="text-gray-600 text-xs">Board Resolution authorizing to borrow
                                                    / Resolusyon ng Board</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 9 -->
                                    <div
                                        class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">9</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Financial
                                                    Statements</h4>
                                                <p class="text-gray-600 text-xs">Audited Financial Statements /
                                                    Pinanigarang Ulat sa Kita</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 10 -->
                                    <div
                                        class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">10</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Business Permit
                                                </h4>
                                                <p class="text-gray-600 text-xs">Current year Business Permit /
                                                    Pahintulot sa Negosyo</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 11 -->
                                    <div
                                        class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">11</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Training
                                                    Certificate</h4>
                                                <p class="text-gray-600 text-xs">Training Certificate from TESDA/DA-ATI
                                                    / Sertipiko ng Pagsasanay</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Important Note -->
                            <div class="bg-amber-50 border-l-4 border-amber-400 p-4 rounded-r-lg">
                                <div class="flex items-start space-x-2">
                                    <svg class="w-5 h-5 text-amber-400 flex-shrink-0 mt-0.5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-amber-800 text-sm mb-1">Mahalagang Paalala</h4>
                                        <p class="text-amber-700 text-xs">Lahat ng mga dokumentong ito ay kailangan para
                                            sa Credit Program. Siguruhing kumpleto ang mga papeles bago mag-apply sa DBP
                                            o LBP.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Content -->
                    <div class="p-6 space-y-8">
                        <!-- Infrastructure -->
                        <section class="px-4 lg:px-8 text-sm">
                            <!-- Section Header -->
                            <div class="bg-teal-50 p-6 rounded-lg mb-6">
                                <div class="flex items-center space-x-3 mb-2">
                                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                    <h2 class="text-xl font-bold text-teal-800">Infrastructure Program</h2>
                                </div>
                                <p class="text-teal-700 text-base">Programa para sa mga Imprastraktura / Mga Pasilidad
                                    na kailangan ng mga magniniyog</p>
                            </div>

                            <!-- Program Description -->
                            <div class="bg-white border border-teal-200 rounded-lg p-4 mb-6">
                                <p class="text-gray-600 text-sm text-justify">
                                    Ang Infrastructure Program ay tumutulong sa mga cooperative na magkaroon ng mga
                                    pasilidad tulad ng processing plants, storage facilities, at iba pang infrastructure
                                    na makakatulong sa coconut value chain. Ginagawa ito sa pamamagitan ng DPWH.
                                </p>
                            </div>

                            <!-- Base Requirements -->
                            <div class="mb-8">
                                <!-- Section Header -->
                                <div class="bg-teal-50 p-6 rounded-lg mb-6">
                                    <div class="flex items-center space-x-3 mb-2">
                                        <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                        <h3 class="text-lg font-bold text-teal-800">Mga Pangunahing Kailangan</h3>
                                    </div>
                                    <p class="text-teal-700 text-base">Base Requirements para sa Infrastructure</p>
                                </div>

                                <!-- Requirements Cards -->
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <!-- Card 1 -->
                                    <div
                                        class="bg-white border border-teal-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-teal-600 font-bold text-sm">1</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Letter of Intent
                                                </h4>
                                                <p class="text-gray-600 text-xs">Liham ng intensyon para sa
                                                    infrastructure project</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div
                                        class="bg-white border border-teal-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-teal-600 font-bold text-sm">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">PCA Endorsement
                                                </h4>
                                                <p class="text-gray-600 text-xs">Endorsement letter from PCA /
                                                    Endorsement mula sa PCA</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div
                                        class="bg-white border border-teal-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-teal-600 font-bold text-sm">3</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">NCFRS Certification
                                                </h4>
                                                <p class="text-gray-600 text-xs">NCFRS Certification verified by
                                                    Regional Office</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 4 -->
                                    <div
                                        class="bg-white border border-teal-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-teal-600 font-bold text-sm">4</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Financial
                                                    Statements</h4>
                                                <p class="text-gray-600 text-xs">2 years external audit financial
                                                    statement</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 5 -->
                                    <div
                                        class="bg-white border border-teal-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-teal-600 font-bold text-sm">5</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">CDA Registration
                                                </h4>
                                                <p class="text-gray-600 text-xs">CDA Registration / Rehistro sa CDA</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 6 -->
                                    <div
                                        class="bg-white border border-teal-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-teal-600 font-bold text-sm">6</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">CDA Compliance</h4>
                                                <p class="text-gray-600 text-xs">CDA Certificate of Compliance (updated
                                                    annually)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 7 -->
                                    <div
                                        class="bg-white border border-teal-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-teal-600 font-bold text-sm">7</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Members List</h4>
                                                <p class="text-gray-600 text-xs">Official List of Members (minimum 100
                                                    members, 50%+1 coconut farmers)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 8 -->
                                    <div
                                        class="bg-white border border-teal-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-teal-600 font-bold text-sm">8</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Articles & By-Laws
                                                </h4>
                                                <p class="text-gray-600 text-xs">Articles of Cooperation and By-Laws
                                                    (duly notarized)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 9 -->
                                    <div
                                        class="bg-white border border-teal-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-teal-600 font-bold text-sm">9</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Organizational
                                                    Structure</h4>
                                                <p class="text-gray-600 text-xs">Existing Organizational Structure /
                                                    Kasalukuyang estruktura</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 10 -->
                                    <div
                                        class="bg-white border border-teal-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-teal-600 font-bold text-sm">10</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Board Resolution
                                                </h4>
                                                <p class="text-gray-600 text-xs">Board Resolution (duly notarized) /
                                                    Resolusyon ng Board</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 11 -->
                                    <div
                                        class="bg-white border border-teal-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-teal-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-teal-600 font-bold text-sm">11</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Community Profile
                                                </h4>
                                                <p class="text-gray-600 text-xs">Community/Site Profile / Profile ng
                                                    Komunidad</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Requirements -->
                            <div class="mb-6">
                                <div class="bg-orange-50 border-l-4 border-orange-400 p-4 rounded-r-lg mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="w-8 h-8 bg-orange-400 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M16.3 2.3a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-3.29 3.3A8.38 8.38 0 0 1 20 14v1a1 1 0 0 1-1 1h-5v5a1 1 0 0 1-2 0v-5H7a1 1 0 0 1-1-1v-1a8.38 8.38 0 0 1 1.59-5.01L4.3 7.7a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.4 0l2.3 2.29 2.3-2.3z" />
                                            </svg>
                                        </div>
                                        <h3 class="text-lg font-bold text-orange-800">Additional Requirements</h3>
                                        <span class="text-sm text-orange-600">(Pagkatapos ma-approve ng CO)</span>
                                    </div>
                                </div>

                                <!-- Additional Requirements Cards -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Card 1 -->
                                    <div
                                        class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">1</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Proposal/Business
                                                    Plan</h4>
                                                <p class="text-gray-600 text-xs">Proposal/Business Plan/Feasibility
                                                    Study para sa infrastructure project</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div
                                        class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div
                                                class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Land Documents</h4>
                                                <p class="text-gray-600 text-xs">Deed of Donation (private property) o
                                                    MOA/Usufruct Agreement (government property)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Important Note -->
                            <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-r-lg">
                                <div class="flex items-start space-x-2">
                                    <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-blue-800 text-sm mb-1">Mahalagang Paalala</h4>
                                        <p class="text-blue-700 text-xs">Ang Infrastructure Program ay ginagawa sa
                                            pamamagitan ng DPWH. Kailangan ng cooperative na may minimum na 100 members
                                            at 50%+1 ay registered coconut farmers. Ang mga additional requirements ay
                                            hihilingin pagkatapos ma-approve ng Central Office at bago magsimula ang
                                            construction.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-12">
        <div class="text-center w-full">
            <div class="mb-12">
                <h1 class="text-3xl font-extrabold text-green-900">MGA TAGAPAGPATUPAD NA AHENSYA NG GOBYERNO</h1>
                <div class="w-32 h-1 bg-green-600 mx-auto mt-3"></div>
            </div>


            <!-- Truly seamless, infinite scroll carousel -->
            <div class="logo-scroll-container overflow-hidden w-full relative">
                <!-- First logo track -->
                <div class="logo-track flex items-center py-4" id="logoTrack1">
                    <!-- Original set of logos -->
                    <div class="logo-item">
                        <div class="logo-circle rounded-full p-3 shadow-md flex items-center justify-center">
                            <img src="/images/IA logos/DA.svg" alt="DA Logo">
                        </div>
                        <p>Department of Agriculture</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/TESDA.svg" alt="TESDA Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Technical Education and Skills Development Authority</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/HVCDP.svg" alt="HVCDP Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>High-Value Crops Development Program</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/BAI.svg" alt="BAI Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Bureau of Animal Industry</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DTI.svg" alt="DTI Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Trade and Industry</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DOST.svg" alt="DOST Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Science and Technology</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/CHED.svg" alt="CHED Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Commission on Higher Education</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/CDA.svg" alt="CDA Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Cooperative Development Authority</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/PCIC.svg" alt="PCIC Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Philippine Crop Insurance Corporation</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/ATI.svg" alt="ATI Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Agricultural Training Institute</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/LBP.svg" alt="LBP Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Land Bank of the Philippines</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/NDA.svg" alt="NDA Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>National Dairy Authority</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DBP.svg" alt="DBP Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Development Bank of the Philippines</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DPWH.svg" alt="DPWH Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Public Works and Highways</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
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
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DA.svg" alt="DA Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Agriculture</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/TESDA.svg" alt="TESDA Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Technical Education and Skills Development Authority</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/HVCDP.svg" alt="HVCDP Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>High-Value Crops Development Program</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/BAI.svg" alt="BAI Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Bureau of Animal Industry</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DTI.svg" alt="DTI Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Trade and Industry</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DOST.svg" alt="DOST Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Science and Technology</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/CHED.svg" alt="CHED Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Commission on Higher Education</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/CDA.svg" alt="CDA Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Cooperative Development Authority</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/PCIC.svg" alt="PCIC Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Philippine Crop Insurance Corporation</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/ATI.svg" alt="ATI Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Agricultural Training Institute</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/LBP.svg" alt="LBP Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Land Bank of the Philippines</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/NDA.svg" alt="NDA Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>National Dairy Authority</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DBP.svg" alt="DBP Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Development Bank of the Philippines</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
                            <img src="/images/IA logos/DPWH.svg" alt="DPWH Logo"
                                class="max-h-20 max-w-20 object-contain m-auto">
                        </div>
                        <p>Department of Public Works and Highways</p>
                    </div>
                    <div class="logo-item">
                        <div
                            class="logo-circle rounded-full bg-green-100 p-3 shadow-md flex items-center justify-center h-30 w-30">
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
                color: rgb(2, 54, 1);
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
                background: linear-gradient(135deg, rgba(255, 255, 255, 1) 0%, rgba(209, 250, 202, 1) 100%);
                /* Gradient background */
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
                background: linear-gradient(135deg, rgb(195, 238, 181) 0%, rgb(231, 255, 226) 100%);
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
                        circle.style.background = 'linear-gradient(135deg, rgba(255, 255, 255, 1) 0%, rgba(209, 250, 202, 1) 100%)';

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
    <!-- Implementing Agencies -->
    <footer class="bg-green-600 text-white py-3 mt-12 flex justify-center items-center">
        <p class="text-sm">&copy; 2025 PCAppTrack All Rights Reserved</p>
    </footer>
</body>

</html>
</body>