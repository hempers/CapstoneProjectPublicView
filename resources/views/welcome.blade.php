<!-- resources/views/cfidp-proposal.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CFIDP Proposal Requirements</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .nav-link.active {
            color: #09CA16 !important;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center px-4 py-4">
            <div class="flex items-center justify-center sm:justify-start w-full sm:w-auto mb-4 sm:mb-0">
                <img src="/images/PCAppTrack.png" alt="CFIDP Logo" class="h-10 sm:h-12">
            </div>

            <!-- Mobile menu button (hidden on larger screens) -->
            <div class="sm:hidden w-full flex justify-end mb-2">
                <button id="mobile-menu-button" class="text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Navigation -->
            <nav id="nav-links"
                class="hidden sm:flex flex-col sm:flex-row items-center w-full sm:w-auto space-y-3 sm:space-y-0">
                <a href="{{ url('/') }}" id="nav-home"
                    class="nav-link text-sm px-3 sm:px-5 py-2 hover:underline w-full sm:w-auto text-center{{ Request::is('/') ? ' active' : '' }}"
                    style="transition: color 0.1s;">Home</a>
                <a href="#track-section" id="nav-track"
                    class="nav-link text-sm px-3 sm:px-5 py-2 hover:underline w-full sm:w-auto text-center"
                    style="transition: color 0.1s;">Track
                    Application</a>
                <a href="{{ url('/about') }}" id="nav-about"
                    class="nav-link text-sm px-3 sm:px-5 py-2 hover:underline w-full sm:w-auto text-center{{ Request::is('about') ? ' active' : '' }}"
                    style="transition: color 0.1s;">About Us</a>
            </nav>
        </div>
    </header>

    <!-- Mobile menu toggle script and smooth scroll -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const navLinks = document.getElementById('nav-links');

            if (mobileMenuButton && navLinks) {
                mobileMenuButton.addEventListener('click', function () {
                    navLinks.classList.toggle('hidden');
                });
            }

            // Handle navigation link active styles
            const navItems = document.querySelectorAll('.nav-link');

            // Apply initial active styling based on classes
            navItems.forEach(link => {
                if (link.classList.contains('active')) {
                    link.style.color = '#09CA16';
                } else {
                    link.style.color = 'inherit';
                }

                // Add hover and mouseout events
                link.addEventListener('mouseover', function () {
                    this.style.color = '#09CA16';
                });

                link.addEventListener('mouseout', function () {
                    if (this.classList.contains('active')) {
                        this.style.color = '#09CA16';
                    } else {
                        this.style.color = 'inherit';
                    }
                });
            });

            // Special handling for anchor links (like Track Application)
            const anchorLinks = document.querySelectorAll('a[href^="#"]');

            anchorLinks.forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Set all nav links to inactive
                    navItems.forEach(link => {
                        link.classList.remove('active');
                        link.style.color = 'inherit';
                    });

                    // Set this link to active
                    this.classList.add('active');
                    this.style.color = '#09CA16';

                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        // Close mobile menu if it's open
                        if (navLinks && !navLinks.classList.contains('hidden') && window.innerWidth < 640) {
                            navLinks.classList.add('hidden');
                        }

                        // Scroll to the target with smooth behavior
                        window.scrollTo({
                            top: targetElement.offsetTop - 70, // Offset for header height
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Make Track Application link active when scrolled to that section
            const trackSection = document.getElementById('track-section');
            const trackNavLink = document.getElementById('nav-track');

            if (trackSection && trackNavLink) {
                window.addEventListener('scroll', function () {
                    const trackSectionTop = trackSection.getBoundingClientRect().top;
                    const trackSectionBottom = trackSection.getBoundingClientRect().bottom;

                    // Check if track section is in viewport
                    if (trackSectionTop < window.innerHeight / 2 && trackSectionBottom > 0) {
                        // Set all nav links to inactive
                        navItems.forEach(link => {
                            link.classList.remove('active');
                            link.style.color = 'inherit';
                        });

                        // Set track link to active
                        trackNavLink.classList.add('active');
                        trackNavLink.style.color = '#09CA16';
                    } else if (window.scrollY < 100) {
                        // At the top of the page, activate the home link
                        navItems.forEach(link => {
                            link.classList.remove('active');
                            link.style.color = 'inherit';
                        });

                        const homeLink = document.getElementById('nav-home');
                        if (homeLink && window.location.pathname === '/' || window.location.pathname === '') {
                            homeLink.classList.add('active');
                            homeLink.style.color = '#09CA16';
                        }
                    }
                });
            }
        });
    </script>

    <!-- Initialize active nav item on page load -->
    <script>
        // Run this after the page is fully loaded
        window.addEventListener('load', function () {
            // Set initial active state for navigation based on current URL
            const currentPath = window.location.pathname;
            const navItems = document.querySelectorAll('.nav-link');
            let activeNavFound = false;

            // Check if we have a hash in the URL (for anchor links)
            const currentHash = window.location.hash;

            navItems.forEach(link => {
                // For regular route links
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                    link.style.color = '#09CA16';
                    activeNavFound = true;
                }
                // For anchor links
                else if (currentHash && link.getAttribute('href') === currentHash) {
                    link.classList.add('active');
                    link.style.color = '#09CA16';
                    activeNavFound = true;
                }
            });

            // If no active link is found and we're on the home page, activate the home nav
            if (!activeNavFound && (currentPath === '/' || currentPath === '')) {
                const homeLink = document.getElementById('nav-home');
                if (homeLink) {
                    homeLink.classList.add('active');
                    homeLink.style.color = '#09CA16';
                }
            }

            // Set up click handler for hero Track Application button
            const trackBtn = document.querySelector('.track-btn');
            if (trackBtn) {
                trackBtn.addEventListener('click', function () {
                    // Set all nav links to inactive
                    navItems.forEach(link => {
                        link.classList.remove('active');
                        link.style.color = 'inherit';
                    });

                    // Set track link to active
                    const trackNavLink = document.getElementById('nav-track');
                    if (trackNavLink) {
                        trackNavLink.classList.add('active');
                        trackNavLink.style.color = '#09CA16';
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
                    Application <span style="color: #09CA16;">Tracking Monitoring</span> System
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
                <div class="inline-flex items-center">
                    <svg class="animate-spin h-5 w-5 text-green-600 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                        </circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <span class="text-green-600">Searching for application...</span>
                </div>
            </div>

            <!-- Error Message -->
            <div id="errorMessage" class="hidden mt-4 p-4 bg-red-50 border border-red-200 rounded-md">
                <div class="flex">
                    <svg class="w-5 h-5 text-red-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span id="errorText" class="text-red-700 text-sm"></span>
                </div>
            </div>
        </div>

        <!-- Application Details Modal -->
        <div id="applicationModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
            <!-- Modal Backdrop -->
            <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity"></div>

            <!-- Modal Content -->
            <div class="flex items-center justify-center min-h-screen p-2">
                <div
                    class="relative bg-white rounded-lg shadow-xl max-w-5xl w-full mx-4 md:mx-auto max-h-screen overflow-y-auto">
                    <!-- Modal Header -->
                    <div class="text-gray-800 p-4 rounded-t-lg" style="background-color: #EFFFF0;">
                        <div class="flex justify-between items-center">
                            <h2 class="text-2xl font-black text-center flex-1 mt-4 pt-4" style="color: #09CA16;">
                                Application Details</h2>
                            <button id="closeModal" class="text-white hover:text-gray-200 focus:outline-none">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Description Text -->
                        <div class="mt-4 pt-4 text-xs text-gray-600 leading-relaxed text-center px-16">
                            <p class="mb-5">
                                Ang sumusunod na impormasyon ay tumutukoy sa kasalukuyang estado ng inyong isinumiteng
                                aplikasyon para sa PCA-CFIDP Program.
                                Maaari po ninyo itong gamitin bilang gabay upang malaman ang progreso, resulta, o
                                anumang aksyon na isinasagawa kaugnay ng
                                inyong aplikasyon.
                            </p>
                            <p>
                                Mangyaring suriin ang mga detalye upang malaman kung ito ay tinanggap, may kulang na
                                dokumento, nasa proseso ng beripikasyon,
                                inendorso na, o may iba pang update.
                            </p>
                        </div>
                    </div>

                    <!-- Modal Body -->
                    <div class="p-6">

                        <!-- Application Title -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <label class="block text-sm font-medium text-gray-700 mb-4">Application
                                Title</label>
                            <div class="text-gray-900" id="modalApplicationTitle">-</div>
                        </div>
                        <!-- Application Info Grid -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                            <!-- Left Column -->
                            <div class="space-y-4">
                                <!-- Reference ID -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Reference ID</label>
                                    <div class="text-lg font-semibold text-green-600" id="modalReferenceId">-</div>
                                </div>

                                <!-- Current Status -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Current Status</label>
                                    <div id="modalCurrentStatus"
                                        class="inline-block px-3 py-1 rounded-full text-sm font-medium">-</div>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="space-y-4">
                                <!-- Date Submitted -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Date Submitted</label>
                                    <div class="text-gray-900" id="modalDateSubmitted">-</div>
                                </div>
                                <!-- Proponent -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Proponent</label>
                                    <div class="text-gray-900" id="modalProponent">-</div>
                                </div>
                            </div>
                        </div>

                        <!-- Application History -->
                        <div class="mb-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Application History</h3>
                            <div class="overflow-x-auto bg-gray-50 rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-green-50">
                                        <tr>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                Date</th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                Action</th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                Remarks</th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                Personnel</th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                Office</th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="modalHistoryTable" class="bg-white divide-y divide-gray-200">
                                        <!-- History items will be populated dynamically -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Requirements Status -->
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Requirements Status</h3>
                            <div id="modalRequirements" class="space-y-2">
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

                // Apply status-specific styling
                statusElement.className = 'inline-block px-3 py-1 rounded-full text-sm font-medium ';
                switch (status.toLowerCase()) {
                    case 'pending':
                        statusElement.className += 'bg-yellow-100 text-yellow-800';
                        break;
                    case 'approved':
                        statusElement.className += 'bg-green-100 text-green-800';
                        break;
                    case 'validated':
                        statusElement.className += 'bg-blue-100 text-blue-800';
                        break;
                    case 'endorsed': // Common status
                        statusElement.className += 'bg-purple-100 text-purple-800';
                        break;
                    case 'rejected': // Common status
                        statusElement.className += 'bg-red-100 text-red-800';
                        break;
                    case 'completed': // Example
                        statusElement.className += 'bg-teal-100 text-teal-800';
                        break;
                    default:
                        statusElement.className += 'bg-gray-100 text-gray-800';
                }

                // Populate history table
                const historyTable = document.getElementById('modalHistoryTable');
                historyTable.innerHTML = '';

                // Log the stage history field from the API
                console.log('History field check:', {
                    stage_history: data.stage_history
                });
                
                // Use the exact stage_history field from the API
                const historyData = data.stage_history || [];
                console.log('Using history data:', historyData);

                if (historyData && historyData.length > 0) {
                    historyData.forEach(item => {
                        const row = document.createElement('tr');
                        row.className = 'border-b border-gray-200';
                        row.innerHTML = `
                        <td class="px-4 py-3 text-sm">${item.date || '-'}</td>
                        <td class="px-4 py-3 text-sm">${item.action_taken || '-'}</td> 
                        <td class="px-4 py-3 text-sm">${item.remarks || '-'}</td> 
                        <td class="px-4 py-3 text-sm">${item.staff_name || '-'}</td>
                        <td class="px-4 py-3 text-sm">-</td>
                        <td class="px-4 py-3 text-sm">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                ${item.stage.toLowerCase().includes('completed') ? 'bg-green-100 text-green-800' :
                                item.stage.toLowerCase().includes('pending') ? 'bg-yellow-100 text-yellow-800' :
                                    'bg-gray-100 text-gray-800'}">
                                ${item.stage || '-'}
                            </span>
                        </td>
                    `;
                        historyTable.appendChild(row);
                    });
                } else {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                    <td colspan="6" class="px-4 py-8 text-center text-gray-500">
                        No history records found
                    </td>
                `;
                    historyTable.appendChild(row);
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

                if (requirementsData && requirementsData.length > 0) {
                    requirementsData.forEach(req => {
                        const reqElement = document.createElement('div');
                        reqElement.className = 'flex items-center justify-between p-3 border border-gray-200 rounded-lg';

                        // Use the exact field names from the API
                        const reqName = req.requirement_name || 'Unknown Requirement';
                        const reqStatus = req.status || 'pending';
                        const reqDesc = req.requirement_description || '';

                        const statusClass = reqStatus.toLowerCase() === 'completed' ? 'text-green-600' :
                            reqStatus.toLowerCase() === 'missing' ? 'text-red-600' : 'text-yellow-600';
                        const statusIcon = reqStatus.toLowerCase() === 'completed' ? '✓' :
                            reqStatus.toLowerCase() === 'missing' ? '✗' : '⚠';

                        reqElement.innerHTML = `
                        <div>
                            <h4 class="font-medium text-gray-900">${reqName}</h4>
                            ${reqDesc ? `<p class="text-sm text-gray-600">${reqDesc}</p>` : ''}
                        </div>
                        <span class="${statusClass} font-medium">${statusIcon} ${reqStatus}</span>
                    `;
                        requirementsContainer.appendChild(reqElement);
                    });
                } else {
                    requirementsContainer.innerHTML = '<p class="text-gray-500 text-center py-4">No requirements information available</p>';
                }
            }

            // Close modal function
            function closeModalFunc() {
                applicationModal.classList.add('hidden');
                errorMessage.classList.add('hidden');
                loadingSpinner.classList.add('hidden');
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
                    applicationModal.classList.remove('hidden');
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

            <!-- Card Example -->
            <div class="grid md:grid-cols-3 gap-6">
                <div
                    class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 border-t-4 border-green-600">
                    <h4 class="text-lg font-bold text-green-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                        Social Protection
                    </h4>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">•</span>
                            <span>Training and Farm Schools <span class="text-gray-500">(TESDA, DA-ATI)</span></span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">•</span>
                            <span>Enrollment and NutriBun/Snack Choice</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">•</span>
                            <span>Medical and Crop Tree <span class="text-gray-500">(one-time)</span></span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">•</span>
                            <span>Documentary Requirements</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">•</span>
                            <span>Operational Sample Steps</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 border-t-4 border-green-600">
                    <h4 class="text-lg font-bold text-green-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                        Integrated Coconut Processing
                    </h4>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">•</span>
                            <span>Shared Processing Facilities <span class="text-gray-500">(PhilMech)</span></span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">•</span>
                            <span>Loan for Eligible Recipients</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">•</span>
                            <span>Proposal Format</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 border-t-4 border-green-600">
                    <h4 class="text-lg font-bold text-green-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Support Services
                    </h4>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">•</span>
                            <span>Credit <span class="text-gray-500">(LDP, DDP)</span></span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">•</span>
                            <span>Documentary Requirements</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">•</span>
                            <span>Infrastructure <span class="text-gray-500">(DPWH)</span></span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">•</span>
                            <span>Checklist and Other Forms</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-12">
        <div class="text-center w-full">
            <h1 class="mb-0 text-3xl font-extrabold text-green-900 mb-12">MGA TAGAPAGPATUPAD NA AHENSYA NG GOBYERNO</h1>


            <!-- Truly seamless, infinite scroll carousel -->
            <div class="logo-scroll-container overflow-hidden w-full relative">
                <!-- First logo track -->
                <div class="logo-track flex items-center py-4" id="logoTrack1">
                    <!-- Original set of logos -->
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
                animation: scroll 80s linear infinite;
                animation-play-state: running;
            }

            #logoTrack2 {
                animation: scroll2 80s linear infinite;
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
                width: 180px;
                /* Give consistent width for all items */
                margin: 0 20px;
            }

            /* Logo name styling */
            .logo-item p {
                margin-top: 12px;
                font-size: 0.7rem;
                text-align: center;
                color: rgb(2, 54, 1);
                /* Gray-700 for good readability */
                max-width: 15 0px;
                line-height: 1.2;
                font-weight: 500;
                height: auto;
                padding-bottom: 5px;
            }

            /* Hover effects and styling */
            .logo-circle {
                transition: all 0.3s ease;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                border: 2px solid transparent;
                width: 96px;
                height: 96px;
                position: relative;
                overflow: hidden;
            }

            /* Standardized logo image styling */
            .logo-circle img {
                max-width: 70%;
                max-height: 70%;
                width: auto;
                height: auto;
                object-fit: contain;
                object-position: center;
                vertical-align: middle;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .logo-circle:hover {
                transform: scale(1.1);
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
                background-color: rgb(195, 238, 181);
                /* Brighter green on hover */
            }

            /* Adjust spacing between logo items */
            .logo-item {
                margin: 0 20px;
            }

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
                        // Remove any extra classes
                        circle.className = 'logo-circle rounded-full bg-green-100 p-3 shadow-md';

                        // Ensure proper styling
                        circle.style.width = '96px';
                        circle.style.height = '96px';
                        circle.style.position = 'relative';
                        circle.style.overflow = 'hidden';

                        // Get the image inside
                        const img = circle.querySelector('img');
                        if (img) {
                            // Remove any classes from the image
                            img.className = '';

                            // Ensure proper styling
                            img.style.maxWidth = '70%';
                            img.style.maxHeight = '70%';
                            img.style.position = 'absolute';
                            img.style.top = '50%';
                            img.style.left = '50%';
                            img.style.transform = 'translate(-50%, -50%)';
                        }
                    });

                    // Get all logo items
                    const logoItems = document.querySelectorAll('.logo-item');

                    // For each logo item
                    logoItems.forEach(item => {
                        // Remove any extra classes
                        item.className = 'logo-item';
                        item.style.margin = '0 20px';
                    });
                }

                // Run the standardization on page load
                standardizeLogoElements();
                const logoTracks = document.querySelectorAll('.logo-track');
                const logoContainer = document.querySelector('.logo-scroll-container');
                let scrollSpeed = 80; // Base scroll speed in seconds - slowed down for better readability

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
                        scrollSpeed = 60;
                    } else if (window.innerWidth < 1024) { // Tablet
                        scrollSpeed = 70;
                    } else { // Desktop
                        scrollSpeed = 80;
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