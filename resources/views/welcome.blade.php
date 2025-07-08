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
        body, html {
            font-family: 'Montserrat', sans-serif !important;
        }
    </style>
</head>

<style>
    /* Import Google Fonts - Lemon font for the PCAppTrack logo */
    @import url('https://fonts.googleapis.com/css2?family=Lemon&display=swap');
    
    /* Custom Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
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
    
    /* PCAppTrack logo styling with Lemon font */
    .pcapptrack-text {
        font-family: 'Lemon', cursive;
        font-size: 1.5rem;
        letter-spacing: -0.02em;
        color: #09CA16;
        font-weight: bold;
    }
    
    /* Only the letter A gets the gradient */
    .pcapptrack-gradient-letter {
        font-family: 'Lemon', cursive;
        font-size: 1.5rem;
        letter-spacing: -0.02em;
        background: linear-gradient(to right, #079510, #09CA16);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-weight: bold;
    }
</style>
<body class="bg-white text-gray-800 font-montserrat">
    <!-- Header with CFIDP and PCAppTrack logos -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4 py-3">
            <!-- CFIDP Logo on the left -->
            <div class="flex items-center">
                <img src="/images/PCAppTrack.png" alt="CFIDP Logo" class="h-10" onerror="this.onerror=null; this.src='/images/cfidpgp.png';">
            </div>
             
            <!-- PCAppTrack Logo/Text with gradient on the right -->
            <div class="flex items-center">
                <div class="flex items-center" style="line-height: 1">
                    <span class="pcapptrack-text" style="margin-right: -0.05em;">PC</span>
                    <span class="pcapptrack-gradient-letter" style="margin-right: -0.05em;">A</span>
                    <span class="pcapptrack-text">ppTrack</span>
                </div>
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
    <section class="bg-green-50 py-8">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <!-- Text Section (moved first for left-side position) -->
            <div class="text-sm w-full md:w-1/2 text-left md:pr-8 mb-6 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-extrabold text-green-900 mb-5 ml-16 mt-0">
                    Application <span style="color: #09CA16;">Tracking </span> System
                </h1>
                <p class="text-sm text-justify mb-6 ml-16 mr-9 mt-2 ">
                    <span class="font-light text-gray-800">Ang <span class="font-bold text-green-800">PCAppTrack</span>
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
            <div class="w-3/4 md:w-1/2  md:mt-0">
                <img src="/images/header.svg" alt="Application Tracking System" class="w-3/4 h-auto max-w-xl ml-20">
            </div>
        </div>
    </section>

    <!-- Tracking Form Section -->
    <section id="track-section" class="py-16 relative overflow-hidden" style="background-color:rgb(230, 253, 212);">
        <!-- Decorative leaf images for background -->
        <div class="absolute left-0 top-0 opacity-20">
            <img src="/images/leaf-left.svg" alt="" class="h-100 mr-20">
        </div>
        <div class="absolute right-0 bottom-0 opacity-20">
            <img src="/images/leaf-right.svg" alt="" class="h-100">
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
                <div class="flex items-center justify-center p-3 bg-green-50 border border-green-100 rounded-lg shadow-sm animate-pulse">
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
            <div id="errorMessage" class="hidden mt-4 p-4 bg-red-50 border border-red-200 rounded-lg shadow-sm animate-fadeIn">
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
        <div id="applicationModal" class="fixed inset-0 z-50 hidden overflow-y-auto transition-opacity duration-300 ease-out">
            <!-- Modal Backdrop -->
            <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity duration-300 backdrop-blur-sm"></div>

            <!-- Modal Content -->
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="relative bg-white rounded-xl shadow-2xl w-full max-w-2xl mx-auto max-h-[85vh] overflow-y-auto transform translate-y-[-1vh]">
                    <!-- Modal Header -->
                    <div class="bg-gradient-to-r from-green-500 to-green-400 p-6 rounded-t-xl relative overflow-hidden">
                        <!-- Decorative elements -->
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mt-12 -mr-12"></div>
                        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-10 rounded-full -mb-12 -ml-12"></div>
                        <div class="absolute top-1/2 left-1/4 w-8 h-8 bg-white opacity-10 rounded-full transform -translate-y-1/2"></div>
                        
                        <div class="flex justify-between items-center relative z-10">
                            <div class="flex-1"></div>
                            <div class="text-center">
                                <h2 class="text-lg sm:text-xl font-bold text-white mt-5 mb-1">
                                    Application Tracking Details</h2>
                                <div class="w-16 h-1 bg-white opacity-70 rounded mx-auto"></div>
                            </div>
                            <div class="flex-1 flex justify-end">
                                <button id="closeModal" class="text-white hover:text-gray-100 focus:outline-none bg-green-600 hover:bg-green-700 rounded-full p-1 shadow-lg transition-all duration-200">
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
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                </svg>
                                <h3 class="text-base font-bold text-gray-900">Application Information</h3>
                            </div>
                            
                            <!-- Application Information Form -->
                            <div class="mb-6 space-y-4">
                                <div class="mb-3">
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Application Title</label>
                                    <div class="border border-gray-300 rounded-md p-2 bg-white text-xs text-gray-800" id="modalApplicationTitle">-</div>
                                </div>
                                
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Reference ID</label>
                                        <div class="border border-gray-300 rounded-md p-2 bg-white text-xs text-gray-800" id="modalReferenceId">-</div>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Date Submitted:</label>
                                        <div class="border border-gray-300 rounded-md p-2 bg-white text-xs text-gray-800" id="modalDateSubmitted">-</div>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Contact Person</label>
                                        <div class="border border-gray-300 rounded-md p-2 bg-white text-xs text-gray-800" id="modalProponent">-</div>
                                    </div>
                                    
                                    
                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Application Status:</label>
                                        <div class="border border-gray-300 rounded-md p-2 bg-white text-xs text-gray-800" id="modalCurrentStatus">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Application History -->
                        <div class="mb-8">
                            <div class="flex items-center mb-4 space-x-2">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h3 class="text-base font-bold text-gray-900">Application History</h3>
                            </div>
                            
                            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-sm bg-white p-4">
                                <!-- Timeline view for application history -->
                                <div class="relative" id="historyTimelineContainer">
                                    <!-- Timeline line -->
                                    <div class="absolute top-0 bottom-0 left-6 w-0.5 bg-green-100" aria-hidden="true"></div>
                                    
                                    <!-- Timeline entries will be populated dynamically -->
                                    <div id="modalHistoryTable" class="space-y-3 relative">
                                        <!-- History items will be populated dynamically -->
                                    </div>
                                </div>

                                <!-- Empty state message (initially hidden) -->
                                <div id="emptyHistoryState" class="hidden text-center py-6">
                                    <div class="inline-flex items-center justify-center bg-gray-100 rounded-full p-2 mb-2">
                                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="block text-gray-500 font-medium text-[11px]">No history records found</span>
                                        <p class="text-gray-400 text-[9px] mt-0.5">Application history will appear here once available</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Requirements Status -->
                        <div class="mb-4">
                            <div class="flex items-center mb-4 space-x-2">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2M9 12h6m-6 4h6"></path>
                                </svg>
                                <h3 class="text-base font-bold text-gray-900">Requirements Information</h3>
                            </div>
                            <div id="modalRequirements" class="bg-white rounded-lg border border-gray-200 overflow-hidden p-4">
                                <p class="text-sm text-gray-500" id="noRequirementsMsg">No requirements submitted yet</p>
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
            <img src="/images/cfidpgp.png" alt="CFIDP Group Photo" class="w-3/5 h-auto md:w-2/5">
        </div>
    </section>

    <!-- Requirements Section -->
    <section class="bg-green-50 py-16">
        <div class="container mx-auto px-4">
            <!-- Header styled like the image -->
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-bold text-green-900 mb-1">MGA KAILANGANG IHANDA</h3>
                <p class="text-lg md:text-xl font-bold mb-6 text-green-900">NA MGA DOKUMENTO PARA SA <span
                        style="color: #09CA16; font-weight: bold;">CFIDP PROPOSAL</span></p>
                <div class="w-32 h-1 bg-green-600 mx-auto"></div>
            </div>

            <div class="max-w-4xl mx-auto">
                <!-- Social Protection Section -->
                <div class="border-b border-gray-300 py-3 mb-5">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Social Protection</h3>
                        </div>
                        <div class="flex items-center space-x-4">
                            <img src="/images/ATI.svg" alt="ATI Logo" class="h-8">
                            <img src="/images/TESDA.svg" alt="TESDA Logo" class="h-8">
                        </div>
                    </div>
                </div>

                <!-- CocoLSA Section -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <div class="border-b border-gray-200 pb-4 mb-4">
                        <h3 class="text-md font-medium text-gray-700 mb-3">Training and Farm Schools</h3>
                        <h4 class="text-green-800 font-semibold mb-3 border-l-4 border-green-500 pl-3">
                            I. Coco-based Learning Site for Agriculture (CocoLSA) Certification
                        </h4>
                        <div class="bg-gray-50 p-4 rounded-md mt-3">
                            <p class="text-sm text-gray-700 text-justify">A Coco-LSA is a farm that practices applicable coconut-based technologies, employs doable farming strategies, and operates successfully, thus, worthy of emulation.</p>
                        </div>
                        
                        <p class="font-medium mt-4 text-green-800 text-sm">The program aims to:</p>
                        <ul class="mt-2 space-y-2">
                            <li class="flex items-start">
                                <span class="inline-flex items-center justify-center w-4 h-4 bg-green-100 rounded-full mr-2 mt-0.5 flex-shrink-0">
                                    <span class="text-green-700 text-xs">•</span>
                                </span>
                                <span class="text-sm text-justify">Enhance the capabilities and capacities of the coconut-farming community members on coconut production, processing, and coconut-based business.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-flex items-center justify-center w-4 h-4 bg-green-100 rounded-full mr-2 mt-0.5 flex-shrink-0">
                                    <span class="text-green-700 text-xs">•</span>
                                </span>
                                <span class="text-sm text-justify">Increase participation of the coconut farmers and farmer-leaders to the coconut industry development by serving as agents of coconut-based capability-building in their respective communities.</span>
                            </li>
                        </ul>
                        
                        <div class="mt-4 p-3 bg-green-50 rounded-md border-l-4 border-green-200">
                            <p class="text-xs text-gray-700 mb-2 text-justify">In coordination with <span class="font-semibold">ATI</span> and <span class="font-semibold">TESDA</span>, it shall have the following components:</p>
                            <div class="grid grid-cols-2 md:grid-cols-5 gap-1 mt-2">
                                <div class="bg-white rounded p-1 text-center text-xs font-medium text-green-800 border border-green-100 shadow-sm">Training</div>
                                <div class="bg-white rounded p-1 text-center text-xs font-medium text-green-800 border border-green-100 shadow-sm">Demonstration</div>
                                <div class="bg-white rounded p-1 text-center text-xs font-medium text-green-800 border border-green-100 shadow-sm">Information</div>
                                <div class="bg-white rounded p-1 text-center text-xs font-medium text-green-800 border border-green-100 shadow-sm">Technical Aid</div>
                                <div class="bg-white rounded p-1 text-center text-xs font-medium text-green-800 border border-green-100 shadow-sm">Projects</div>
                            </div>
                        </div>
                    </div>

                    <!-- Selection and Prioritization Criteria -->
                    <div class="mb-6">
                        <div class="flex items-center mb-3 border-b border-gray-200 pb-2">
                            <svg class="w-4 h-4 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <h4 class="font-medium text-sm text-gray-800">Selection and Prioritization Criteria</h4>
                        </div>

                        <!-- Individual Farmer -->
                        <div class="mb-4">
                            <div class="flex items-center mb-2 bg-gray-50 p-1 rounded-md">
                                <svg class="w-4 h-4 text-amber-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
                                </svg>
                                <h5 class="font-medium text-xs text-gray-700">Individual (The Farmer)</h5>
                            </div>

                            <ul class="space-y-1 text-xs ml-1">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-justify">Must be an individual Filipino coconut farmer (landowner, owner-tiller, or grower) with at least 1 ha. of coconut land;</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-justify">Willing and able to demonstrate the coconut technologies in his/her farm to the clientele at the time needed;</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Should be willing to be trained regularly;</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Is physically fit to perform the responsibilities of a CocoLSA cooperator;</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>NCFRS registered, preferably a member of a CFOCFC.</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Group -->
                        <div class="mb-4 ml-6">
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 text-amber-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                </svg>
                                <h5 class="font-medium">Group (The CFOCFC)</h5>
                            </div>

                            <ul class="ml-6 space-y-2 text-sm">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Shall be at least 1 ha. of integrated and/or diversified farm (e.g. coconut-livestock);</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Must possess and manage coconut farmland with an area of at least 1 ha.;</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Posseses appropriate valid registration from the Securities and Exchange Commission (SEC), the Cooperative Development Authority (CDA), the Department of Labor and Employment (DOLE), or existing PCA accreditation;</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Is active in the past three years in farmer organization and development or community enterprise development;</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Must contain Filipino farmer-leaders or members who are willing and able to demonstrate the coconut technologies in his/her farm to the clientele at the time needed;</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Willing to be trained regularly;</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Physically fit to perform the responsibilities of an LSA cooperator and LSA;</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Individual and Group (The Farm) -->
                        <div class="mb-4 ml-6">
                            <div class="flex items-center mb-2">
                                <svg class="w-4 h-4 text-amber-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 9a
                                    <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-amber-600 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                </svg>
                                <h5 class="font-medium">Individual and Group (The Farm)</h5>
                            </div>

                            <ul class="ml-6 space-y-2 text-sm">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Shall be at least 1 ha. of integrated and/or diversified farm (e.g. coconut-livestock, coconut-agro-forestry;coconut-crop);</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Contains a technology demonstration area for coconut production, with a holding area, wash area, and toilet;</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Is accessible by land and other transportation facilities; and</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Is aesthetically landscaped.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Documentary Requirements -->
                    <div class="mb-6">
                        <div class="flex items-center mb-3 border-b border-gray-200 pb-2">
                            <svg class="w-4 h-4 text-gray-700 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <h4 class="font-medium text-sm text-gray-800">Documentary Requirements</h4>
                        </div>

                        <div class="mb-3">
                            <h5 class="font-medium mb-3 text-green-800 text-xs">Applicant's Checklist of Requirements</h5>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-1 text-xs">
                                <div class="flex items-center bg-white p-1 rounded-md border border-gray-100">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Signed Briefer</span>
                                </div>
                                <div class="flex items-center bg-white p-1 rounded-md border border-gray-100">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Self-Assessment</span>
                                </div>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Letter of Intent to become a CocoLSA;</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Farming Learning Site for Agriculture Profile Form;</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>LSA Qualification Form;</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Field Validation Report (c/o PCA Agriculturists assigned in the proposed site);</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>LSA Acceptance Form;</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Endorsement of the RWGC; and</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-1 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>If endorsed with financial assistance, a Development Plan shall be required.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Operational Strategies -->
                    <div>
                        <div class="flex items-center mb-3 border-b border-gray-200 pb-2">
                            <svg class="w-4 h-4 text-gray-700 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                            <h4 class="font-medium text-sm text-gray-800">Operational Strategies</h4>
                        </div>

                        <div class="bg-white p-3 border border-gray-200 rounded-lg">
                            <ol class="space-y-2 text-xs">
                                <li class="flex items-start">
                                    <div class="bg-green-100 rounded-full w-5 h-5 flex items-center justify-center mr-2 mt-0.5 flex-shrink-0">
                                        <span class="text-green-800 font-bold text-xs">1</span>
                                    </div>
                                    <div>
                                        <span class="font-medium">Briefing</span>
                                    </div>
                                </li>
                                
                                <li class="flex items-start">
                                    <div class="bg-green-100 rounded-full w-5 h-5 flex items-center justify-center mr-2 mt-0.5 flex-shrink-0">
                                        <span class="text-green-800 font-bold text-xs">2</span>
                                    </div>
                                    <div>
                                        <span class="font-medium">Self-Assessment</span>
                                    </div>
                                </li>
                                
                                <li class="flex items-start">
                                    <div class="bg-green-100 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <span class="text-green-800 font-bold text-xs">3</span>
                                    </div>
                                    <div>
                                        <span class="font-medium">Submission of documents</span>
                                        <p class="text-gray-600 mt-1">(to PCA POs; in cases of requests being directed to the RO, the RO retransmits the documents to the concerned PO)</p>
                                    </div>
                                </li>
                                
                                <li class="flex items-start">
                                    <div class="bg-green-100 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <span class="text-green-800 font-bold text-xs">4</span>
                                    </div>
                                    <div>
                                        <span class="font-medium">Evaluation of Documentary Requirements</span>
                                        <p class="text-gray-600 mt-1">(both provincial and regional levels)</p>
                                    </div>
                                </li>
                                
                                <li class="flex items-start">
                                    <div class="bg-green-100 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <span class="text-green-800 font-bold text-xs">5</span>
                                    </div>
                                    <div>
                                        <span class="font-medium">Field/Virtual Validation</span>
                                        <p class="text-gray-600 mt-1">(PO Agriculturists)</p>
                                    </div>
                                </li>
                                
                                <li class="flex items-start">
                                    <div class="bg-green-100 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <span class="text-green-800 font-bold text-xs">6</span>
                                    </div>
                                    <div>
                                        <span class="font-medium">PCA Endorsement of LSA application</span>
                                        <p class="text-gray-600 mt-1">to ATI RO, then ATI RO endorses such to ATI CO after their own evaluation</p>
                                    </div>
                                </li>
                                
                                <li class="flex items-start">
                                    <div class="bg-green-100 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <span class="text-green-800 font-bold text-xs">7</span>
                                    </div>
                                    <div>
                                        <span class="font-medium">Issuance of Certificate and MOA/MOU Signing</span>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        </div>
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
                        <div
                            class="logo-circle rounded-full p-3 shadow-md flex items-center justify-center">
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
                width: 160px; /* Reduced width to bring logos closer */
                margin: 0 12px; /* Reduced margin to bring logos closer */
            }

            /* Logo name styling */
            .logo-item p {
                margin-top: 12px;
                font-size: 0.75rem;
                text-align: center;
                color: rgb(2, 54, 1);
                max-width: 150px;
                line-height: 1.2;
                font-weight: 600; /* Increased font weight for better visibility */
                height: auto;
                padding-bottom: 5px;
            }

            /* Hover effects and styling */
            .logo-circle {
                transition: all 0.3s ease;
                box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15); /* Enhanced shadow */
                border: 2px solid rgba(9, 202, 22, 0.2); /* Light green border */
                width: 120px; /* Increased size */
                height: 120px; /* Increased size */
                position: relative;
                overflow: hidden;
                background: linear-gradient(135deg, rgba(255, 255, 255, 1) 0%, rgba(209, 250, 202, 1) 100%); /* Gradient background */
            }

            /* Standardized logo image styling */
            .logo-circle img {
                max-width: 75%; /* Increased image size proportionally */
                max-height: 75%; /* Increased image size proportionally */
                width: auto;
                height: auto;
                object-fit: contain;
                object-position: center;
                vertical-align: middle;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                filter: drop-shadow(0 2px 3px rgba(0, 100, 0, 0.1)); /* Subtle drop shadow on logos */
            }

            .logo-circle:hover {
                transform: scale(1.12);
                box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
                background: linear-gradient(135deg, rgb(195, 238, 181) 0%, rgb(231, 255, 226) 100%);
                border-color: rgba(9, 202, 22, 0.6); /* Darker green border on hover */
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