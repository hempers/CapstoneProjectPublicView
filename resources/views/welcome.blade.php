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
                <h1 class="text-4xl md:text-5xl font-extrabold text-green-900 mb-5 ml-16 mt-0">
                    Application <span style="color: #09CA16;">Tracking </span> System
                </h1>
                <p class="text-md text-justify mb-6 ml-16 mr-9 mt-2 ">
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
            <h2 class="text-4xl font-bold mb-3" style="color: #09CA16;">PCAppTrack Application Tracking</h2>
            <p class="text-sm text-gray-600 mb-8 max-w-2xl mx-auto">
                Ilagay lamang ang iyong natatanging Reference ID sa itinakdang field.
            </p>

            <div class="flex max-w-md mx-auto text-sm">
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
        <div class="flex flex-col md:flex-row items-center text-sm text-justify gap-9 ml-5 mr-4">
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
            <img src="/images/img/cfidpgp.png" alt="CFIDP Group Photo" class="w-3/5 h-auto md:w-2/5">
        </div>
    </section>

    <!-- Requirements Section -->
    <section class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-16">
        <div class="container mx-auto px-4">
            <!-- Header styled like the image -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-lg mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-green-900 mb-3 leading-tight">
                    MGA KAILANGANG IHANDA
                </h1>
                <p class="text-xl md:text-2xl font-bold mb-2 text-green-800">
                    NA MGA DOKUMENTO PARA SA
                </p>
                <div
                    class="inline-block bg-gradient-to-r from-green-500 to-emerald-600 text-white px-6 py-2 rounded-full mb-6">
                    <span class="text-xl md:text-2xl font-bold">CFIDP PROPOSAL</span>
                </div>
                <div class="flex items-center justify-center space-x-2 mb-4">
                    <div class="w-12 h-1 bg-green-600 rounded-full"></div>
                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                    <div class="w-12 h-1 bg-green-600 rounded-full"></div>
                </div>
                <p class="text-green-700 text-lg max-w-2xl mx-auto">
                    Gabay para sa mga coconut farmers na nais mag-apply sa iba't ibang CFIDP programs
                </p>
            </div>

            <div class="max-w-4xl mx-auto bg-white shadow-2xl rounded-xl overflow-hidden">
                <!-- Header -->
                <div class="bg-gradient-to-r from-green-600 to-emerald-600 p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-white mb-1">Social Protection Program</h2>
                                <p class="text-green-100 text-sm">Para sa mga coconut farmers at kanilang pamilya</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="flex items-center space-x-2">
                                <div
                                    class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center overflow-hidden">
                                    <img src="/images/IA logos/ATI.svg" alt="ATI Logo" class="h-8 w-8 object-contain">
                                </div>
                                <span class="text-white text-xs font-medium hidden md:block">ATI</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div
                                    class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center overflow-hidden">
                                    <img src="/images/IA logos/TESDA.svg" alt="TESDA Logo"
                                        class="h-8 w-8 object-contain">
                                </div>
                                <span class="text-white text-xs font-medium hidden md:block">TESDA</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6 space-y-8">
                    <!-- CocoLSA Certification Section -->
                    <section class="px-4 lg:px-8">
                        <!-- Program Header -->
                        <div class="bg-gradient-to-r from-green-50 to-blue-50 p-6 rounded-lg mb-6">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h2 class="text-xl lg:text-2xl font-bold text-green-800 mb-2">
                                        CocoLSA Certification Program
                                    </h2>
                                    <h3 class="text-lg font-semibold text-green-700 mb-1">
                                        Coco-based Learning Site for Agriculture
                                    </h3>
                                    <p class="text-green-600 text-sm lg:text-base">
                                        Gawing modelo ang inyong farm para sa ibang coconut farmers
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- What is CocoLSA -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 mb-6">
                            <div class="flex items-start space-x-3 mb-4">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">Ano ang CocoLSA?</h3>
                            </div>
                            <p class="text-gray-700 mb-4 leading-relaxed">
                                Ang Coco-LSA ay isang farm na gumagamit ng modernong coconut technologies, may mga
                                epektibong farming strategies,
                                at successful na nag-operate. Ginagawa itong modelo para sa ibang coconut farmers na
                                gustong matuto.
                            </p>
                        </div>

                        <!-- Program Goals -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 mb-6">
                            <div class="flex items-start space-x-3 mb-4">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">Mga Layunin ng Program</h3>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-green-50 p-4 rounded-lg">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-white text-xs font-bold">1</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-green-800 mb-2">Palakasin ang Kakayahan</h4>
                                            <p class="text-green-700 text-sm">
                                                Pagandahin ang skills ng coconut farmers sa production, processing, at
                                                coconut business
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-blue-50 p-4 rounded-lg">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-white text-xs font-bold">2</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-blue-800 mb-2">Dagdagan ang Participation</h4>
                                            <p class="text-blue-700 text-sm">
                                                Gawing mga teacher at leader ang farmers sa kanilang mga community
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Program Components -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 mb-6">
                            <div class="flex items-start space-x-3 mb-4">
                                <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">Mga Kasama sa Program</h3>
                            </div>

                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3">
                                <div class="bg-gray-50 p-3 rounded-lg text-center">
                                    <div
                                        class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-semibold text-gray-700">Training</span>
                                </div>

                                <div class="bg-gray-50 p-3 rounded-lg text-center">
                                    <div
                                        class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-semibold text-gray-700">Demo Services</span>
                                </div>

                                <div class="bg-gray-50 p-3 rounded-lg text-center">
                                    <div
                                        class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-semibold text-gray-700">Info Support</span>
                                </div>

                                <div class="bg-gray-50 p-3 rounded-lg text-center">
                                    <div
                                        class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-semibold text-gray-700">Tech Assistance</span>
                                </div>

                                <div class="bg-gray-50 p-3 rounded-lg text-center">
                                    <div
                                        class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-semibold text-gray-700">Other Projects</span>
                                </div>
                            </div>

                            <div class="mt-4 p-3 bg-yellow-50 border border-yellow-200 rounded-lg">
                                <div class="flex items-start space-x-2">
                                    <svg class="w-5 h-5 text-yellow-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="text-yellow-800 text-sm">
                                        <strong>Partnership:</strong> Makakasama ninyo ang ATI at TESDA sa program na
                                        ito para sa mas komprehensibong support.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Selection and Prioritization Criteria -->
                    <section class="px-4 lg:px-8">
                        <!-- Section Header -->
                        <div class="bg-blue-50 p-6 rounded-lg mb-6">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                        </path>
                                    </svg>
                                </div>
                                <h2 class="text-xl font-bold text-blue-800">Mga Kriterya para sa Pagpili</h2>
                            </div>
                            <p class="text-blue-700 text-base">Ano ang mga kailangan para makakuha ng CocoLSA certification</p>
                        </div>

                        <!-- Individual Farmer Requirements -->
                        <div class="mb-8">
                            <div class="bg-yellow-50 p-4 rounded-lg mb-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-yellow-800">Para sa Individual na Farmer</h3>
                                        <p class="text-yellow-700 text-sm">Mga requirement para sa mag-isang coconut farmer</p>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-yellow-600 text-sm font-bold">1</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Filipino Coconut Farmer</h4>
                                            <p class="text-gray-600 text-sm">May-ari, nag-aalaga, o nagtatanim ng coconut na may hindi bababa sa 1 hectare ng lupa</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-yellow-600 text-sm font-bold">2</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Willing to Demonstrate</h4>
                                            <p class="text-gray-600 text-sm">Handang magpakita ng coconut technologies sa farm sa ibang farmers</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-yellow-600 text-sm font-bold">3</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Open to Training</h4>
                                            <p class="text-gray-600 text-sm">Handang mag-attend ng regular na training at seminar</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-yellow-600 text-sm font-bold">4</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Physically Fit</h4>
                                            <p class="text-gray-600 text-sm">May kakayahang gampanan ang mga responsibilidad ng CocoLSA cooperator</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-yellow-600 text-sm font-bold">5</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">NCFRS Registered</h4>
                                            <p class="text-gray-600 text-sm">Nakaregister sa NCFRS, mas maganda kung miyembro ng CFO/CFC</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Group/Organization Requirements -->
                        <div class="mb-8">
                            <div class="bg-orange-50 p-4 rounded-lg mb-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-orange-800">Para sa Grupo/Organisasyon</h3>
                                        <p class="text-orange-700 text-sm">Mga requirement para sa CFO/CFC organizations</p>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">1</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Integrated Farm</h4>
                                            <p class="text-gray-600 text-sm">Hindi bababa sa 1 hectare ng integrated/diversified farm (halimbawa: coconut-livestock)</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">2</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Coconut Farmland</h4>
                                            <p class="text-gray-600 text-sm">May-ari at nag-mmanage ng coconut farmland na hindi bababa sa 1 hectare</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">3</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Valid Registration</h4>
                                            <p class="text-gray-600 text-sm">May valid registration sa SEC, CDA, DOLE, o existing PCA accreditation</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">4</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Active Organization</h4>
                                            <p class="text-gray-600 text-sm">Aktibo sa nakaraang 3 taon sa farmer organization o community enterprise development</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">5</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Filipino Leaders</h4>
                                            <p class="text-gray-600 text-sm">May mga Filipino farmer-leaders na handang magdemonstrate ng coconut technologies</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">6</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Training Ready</h4>
                                            <p class="text-gray-600 text-sm">Handang mag-attend ng regular training</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">7</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Physically Capable</h4>
                                            <p class="text-gray-600 text-sm">May physical fitness para gampanan ang mga responsibilidad ng LSA cooperator</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Farm Requirements (Both Individual and Group) -->
                        <div class="mb-8">
                            <div class="bg-green-50 p-4 rounded-lg mb-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 2L3 7v11a1 1 0 001 1h3v-7a1 1 0 011-1h4a1 1 0 011 1v7h3a1 1 0 001-1V7l-7-5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-green-800">Para sa Farm (Individual at Group)</h3>
                                        <p class="text-green-700 text-sm">Mga requirement para sa farm mismo na magiging CocoLSA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-green-600 text-sm font-bold">1</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Integrated Farm</h4>
                                            <p class="text-gray-600 text-sm">Hindi bababa sa 1 hectare ng integrated/diversified farm (coconut-livestock, coconut-agro-forestry, coconut-crop)</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-green-600 text-sm font-bold">2</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Demo Area</h4>
                                            <p class="text-gray-600 text-sm">May technology demonstration area para sa coconut production, kasama ang holding area, wash area, at toilet</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-green-600 text-sm font-bold">3</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Accessible Location</h4>
                                            <p class="text-gray-600 text-sm">Madaling puntahan thru land at iba pang transportation facilities</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-green-600 text-sm font-bold">4</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Well-Landscaped</h4>
                                            <p class="text-gray-600 text-sm">Maganda at organisadong farm layout na pleasing sa mata</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Documentary Requirements -->
                    <section class="px-4 lg:px-8 text-sm">
                        <!-- Section Header -->
                        <div class="bg-green-50 p-6 rounded-lg mb-6">
                            <div class="flex items-center space-x-3 mb-2">
                                <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </div>
                                <h2 class="text-xl font-bold text-green-800">Mga Kailangang Dokumento</h2>
                            </div>
                            <p class="text-green-700 text-base">Siguruhing kumpleto ang lahat ng documento bago
                                mag-apply</p>
                        </div>

                        <!-- Requirements Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                            <!-- Document Item -->
                            <div
                                class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-start space-x-3">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                        <span class="text-green-600 text-sm font-bold">1</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 mb-1">Signed Briefer</h4>
                                        <p class="text-gray-600 text-sm">Nilagdaang briefer mula sa PCA</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-start space-x-3">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                        <span class="text-green-600 text-sm font-bold">2</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 mb-1">Self-Assessment</h4>
                                        <p class="text-gray-600 text-sm">Sariling pag-evaluate sa inyong farm</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-start space-x-3">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                        <span class="text-green-600 text-sm font-bold">3</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 mb-1">Letter of Intent</h4>
                                        <p class="text-gray-600 text-sm">Liham ng intensyon na maging CocoLSA</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-start space-x-3">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                        <span class="text-green-600 text-sm font-bold">4</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 mb-1">Farm Profile Form</h4>
                                        <p class="text-gray-600 text-sm">Learning Site for Agriculture Profile Form</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-start space-x-3">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                        <span class="text-green-600 text-sm font-bold">5</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 mb-1">LSA Qualification Form</h4>
                                        <p class="text-gray-600 text-sm">Form para sa pag-qualify bilang LSA</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-start space-x-3">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                        <span class="text-green-600 text-sm font-bold">6</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 mb-1">Field Validation Report</h4>
                                        <p class="text-gray-600 text-sm">Mula sa PCA Agriculturists sa inyong lugar</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-start space-x-3">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                        <span class="text-green-600 text-sm font-bold">7</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 mb-1">LSA Acceptance Form</h4>
                                        <p class="text-gray-600 text-sm">Form ng pagtanggap bilang LSA</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-start space-x-3">
                                    <div
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                        <span class="text-green-600 text-sm font-bold">8</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 mb-1">RTWG Endorsement</h4>
                                        <p class="text-gray-600 text-sm">Endorsement mula sa Regional Technical Working
                                            Group</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Note -->
                        <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-r-lg">
                            <div class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <h4 class="font-semibold text-blue-800 mb-1">Importante!</h4>
                                    <p class="text-blue-700 text-sm">Kung may kasama na financial assistance, kailangan
                                        din ng <strong>Development Plan</strong>.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>


            <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg mt-8">
                <!-- Header -->
                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
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
                                <h1 class="text-xl md:text-2xl font-bold">Integrated Coconut Processing</h1>
                                <p class="text-blue-100 text-sm">and Downstream Products</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-14 h-14 rounded-full bg-white shadow-lg flex items-center justify-center">
                                <img src="/images/IA logos/PM.svg" alt="TESDA Logo" class="h-11 w-11 object-contain">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6 space-y-8">
                    <!-- Eligibility -->
                    <section class="px-8 ml-8 text-sm">
                        <h2 class="text-base font-semibold text-gray-800 mb-4">I. Criteria for Eligibility</h2>
                    </section>

                    <!-- Selection and Prioritization Criteria -->
                    <section class="px-4 lg:px-8 text-sm">
                        <!-- Base Requirements -->
                        <div class="mb-8">
                            <!-- Section Header -->
                            <div class="bg-orange-50 p-6 rounded-lg mb-6">
                                <div class="flex items-center space-x-3 mb-2">
                                    <div class="w-8 h-8 bg-orange-600 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-orange-800">Base Requirements</h3>
                                </div>
                                <p class="text-orange-700 text-base">Mga pangunahing requirement para sa kooperatiba</p>
                            </div>

                            <!-- Requirements Cards -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">1</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Letter of Intent</h4>
                                            <p class="text-gray-600 text-sm">Liham ng intensyon para sa processing
                                                facility</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">2</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">PCA Endorsement Letter</h4>
                                            <p class="text-gray-600 text-sm">Endorsement mula sa
                                                Provincial/Regional/Central Office</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">3</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">NCFRS Certification</h4>
                                            <p class="text-gray-600 text-sm">Verified at issued ng Regional Office</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">4</span>
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
                                            class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">5</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">CDA Certificate</h4>
                                            <p class="text-gray-600 text-sm">Certificate of Compliance (updated
                                                annually)</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">6</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Members List</h4>
                                            <p class="text-gray-600 text-sm">Minimum 100 members, 50%+1 dapat coconut
                                                farmers</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">7</span>
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
                                            class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">8</span>
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
                                            class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">9</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Board Resolution</h4>
                                            <p class="text-gray-600 text-sm">Notarized board resolution with specific
                                                request</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-orange-600 text-sm font-bold">10</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Community Profile</h4>
                                            <p class="text-gray-600 text-sm">Community/Site Profile ng lugar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Requirements -->
                        <div class="mb-6">
                            <div class="bg-blue-50 p-6 rounded-lg mb-6">
                                <div class="flex items-center space-x-3 mb-2">
                                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-blue-800">Additional Requirements</h3>
                                </div>
                                <p class="text-blue-700 text-base">Pagkatapos ng approval at bago magsimula ang
                                    construction</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-blue-600 text-sm font-bold">A</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Business Plan</h4>
                                            <p class="text-gray-600 text-sm">Proposal/Business Plan/Feasibility Study
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mt-1">
                                            <span class="text-blue-600 text-sm font-bold">B</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 mb-2">Land Documents</h4>
                                            <p class="text-gray-600 text-sm">Deed of Donation (private) o MOA/Usufruct
                                                Agreement (government)</p>
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
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                        <div class="w-8 h-8 bg-orange-400 rounded-full flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                                            </svg>
                                        </div>
                                        <h3 class="text-lg font-bold text-orange-800">Coconut Farmer Enterprises</h3>
                                        <span class="text-sm text-orange-600">(Mga Negosyong Magniniyog)</span>
                                    </div>
                                </div>

                                <!-- Requirements Cards for Enterprises -->
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <!-- Card 1 -->
                                    <div class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">1</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Application Forms</h4>
                                                <p class="text-gray-600 text-xs">DBP Loan Application Forms / Mga Form para sa Utang sa DBP</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">NCFRS Registration</h4>
                                                <p class="text-gray-600 text-xs">Proof of NCFRS enlistment / Patunay na nakalista sa NCFRS</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">3</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Business Registration</h4>
                                                <p class="text-gray-600 text-xs">Certificate of Registration from DTI/SEC / Rehistro ng Negosyo</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 4 -->
                                    <div class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">4</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">PCA Accreditation</h4>
                                                <p class="text-gray-600 text-xs">Certificate of Accreditation from PCA / Sertipiko ng Akreditasyon</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 5 -->
                                    <div class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">5</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Financial Statements</h4>
                                                <p class="text-gray-600 text-xs">Audited Financial Statements / Pinanigarang Ulat sa Kita</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 6 -->
                                    <div class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">6</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Business Plan</h4>
                                                <p class="text-gray-600 text-xs">Business Plan (if applicable) / Plano ng Negosyo kung kinakailangan</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 7 -->
                                    <div class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">7</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Business Permit</h4>
                                                <p class="text-gray-600 text-xs">Current year Business Permit / Pahintulot sa Negosyo (kasalukuyan)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 8 -->
                                    <div class="bg-white border border-orange-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-orange-600 font-bold text-sm">8</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Training Certificate</h4>
                                                <p class="text-gray-600 text-xs">Training Certificate from TESDA/DA-ATI / Sertipiko ng Pagsasanay</p>
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
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <h3 class="text-lg font-bold text-blue-800">Coconut Farmers Cooperatives & Organizations</h3>
                                        <span class="text-sm text-blue-600">(Mga Kooperatiba at Organisasyon)</span>
                                    </div>
                                </div>

                                <!-- Requirements Cards for Cooperatives -->
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <!-- Card 1 -->
                                    <div class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">1</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Application Forms</h4>
                                                <p class="text-gray-600 text-xs">DBP Loan Application Forms / Mga Form para sa Utang</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">2</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">CDA Registration</h4>
                                                <p class="text-gray-600 text-xs">Certificate of Registration from CDA/SEC / Rehistro sa CDA</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">3</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">PCA Accreditation</h4>
                                                <p class="text-gray-600 text-xs">Certificate of Accreditation from PCA / Sertipiko ng Akreditasyon</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 4 -->
                                    <div class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">4</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">CDA Compliance</h4>
                                                <p class="text-gray-600 text-xs">Certificate of Compliance from CDA / Sertipiko ng Pagsunod</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 5 -->
                                    <div class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">5</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Tax Exemption</h4>
                                                <p class="text-gray-600 text-xs">Certificate of Tax Exemption / Sertipiko ng Pagkakaalis sa Buwis</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 6 -->
                                    <div class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">6</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Articles & By-Laws</h4>
                                                <p class="text-gray-600 text-xs">Articles of Incorporation/Cooperation and By-Laws</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 7 -->
                                    <div class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">7</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Officers Bio-data</h4>
                                                <p class="text-gray-600 text-xs">Bio-data of Officers and Board of Directors / Talambuhay ng mga Opisyal</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 8 -->
                                    <div class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">8</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Board Resolution</h4>
                                                <p class="text-gray-600 text-xs">Board Resolution authorizing to borrow / Resolusyon ng Board</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 9 -->
                                    <div class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">9</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Financial Statements</h4>
                                                <p class="text-gray-600 text-xs">Audited Financial Statements / Pinanigarang Ulat sa Kita</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 10 -->
                                    <div class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">10</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Business Permit</h4>
                                                <p class="text-gray-600 text-xs">Current year Business Permit / Pahintulot sa Negosyo</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 11 -->
                                    <div class="bg-white border border-blue-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                                <span class="text-blue-600 font-bold text-sm">11</span>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 text-sm mb-1">Training Certificate</h4>
                                                <p class="text-gray-600 text-xs">Training Certificate from TESDA/DA-ATI / Sertipiko ng Pagsasanay</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Important Note -->
                            <div class="bg-amber-50 border-l-4 border-amber-400 p-4 rounded-r-lg">
                                <div class="flex items-start space-x-2">
                                    <svg class="w-5 h-5 text-amber-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-amber-800 text-sm mb-1">Mahalagang Paalala</h4>
                                        <p class="text-amber-700 text-xs">Lahat ng mga dokumentong ito ay kailangan para sa Credit Program. Siguruhing kumpleto ang mga papeles bago mag-apply sa DBP o LBP.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Content -->
                    <div class="p-6 space-y-8">
                        <!-- Infrastructure -->
                        <section class="px-8 ml-8 text-sm">
                            <h2 class="text-base font-semibold text-gray-800">Infrastructure</h2>
                        </section>

                        <!-- Selection and Prioritization Criteria -->
                        <section class="px-8 ml-8 text-sm">
                            <!-- Requirements -->
                            <div class="mb-6">
                                <div class="flex items-center space-x-2 mb-4">
                                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                    <h2 class="text-lg font-semibold text-gray-800">Criteria for Eligibility
                                    </h2>
                                </div>
                                <div class="flex items-center space-x-2 mb-3">
                                    <div class="w-6 h-6 bg-yellow-400 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-gray-800">Base Requirements</h3>
                                </div>
                                <ul class="space-y-2 ml-8 text-justify">
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">Letter of Intent</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">Endorsement letter from PCA (if from the
                                            provincial office; there
                                            are instances of LOIs being directed to the regional office and
                                            some endorsements coming from the central office);</span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">NCFRS Certification (verified and issued by
                                            the RO);
                                        </span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">Financial Statement for two (2) years
                                            (external audit);
                                        </span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">CDA Registration;

                                        </span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">CDA Certificate of Compliance (updated
                                            annually);
                                        </span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">Official List of Members (minimum of 100
                                            members and at least
                                            50%+1 registered coconut farmers – shall be verified thru the
                                            NCFRS Certification);

                                        </span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">Articles of Cooperation and By-Laws (duly
                                            notarized);
                                        </span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">Existing Organizational Structure
                                        </span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">Board Resolution (duly notarized; must
                                            indicate the request at
                                            hand);

                                        </span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">Community/Site Profile.
                                        </span>
                                    </li>

                                </ul>
                            </div>

                            <!-- additional reqs -->
                            <div class="mb-6">
                                <div class="flex items-center space-x-2 mb-3">
                                    <div class="w-6 h-6 bg-orange-400 rounded-full flex items-center justify-center">
                                        <!-- Push pin icon -->
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M16.3 2.3a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-3.29 3.3A8.38 8.38 0 0 1 20 14v1a1 1 0 0 1-1 1h-5v5a1 1 0 0 1-2 0v-5H7a1 1 0 0 1-1-1v-1a8.38 8.38 0 0 1 1.59-5.01L4.3 7.7a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.4 0l2.3 2.29 2.3-2.3z" />
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-gray-800">
                                        Additional requirements, upon approval of CO and pre-construction proper of the
                                        facility
                                    </h3>
                                </div>
                                <ul class="space-y-2 ml-8 text-justify">
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">Proposal/Business Plan/Feasibility Study
                                        </span>
                                    </li>
                                    <li class="flex items-start space-x-2">
                                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600 text-sm">Deed of Donation of Lot if private property;
                                            MOA/Usufruct
                                            Agreement if Lot is government property</span>
                                    </li>
                                </ul>
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