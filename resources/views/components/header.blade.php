<!-- Header with Bagong Pilipinas Logo -->
<header class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-100 w-full">
    <div class="w-full max-w-7xl mx-auto flex justify-between items-center px-4 sm:px-6 lg:px-8 py-2 sm:py-2.5">
        <!-- Bagong Pilipinas Logo -->
        <div class="flex items-center flex-shrink-0">
            <img src="{{ asset('images/img/bagong-pilipinas.jpg') }}" alt="Bagong Pilipinas Logo"
                class="h-10 sm:h-12 md:h-14 lg:h-16 w-auto object-contain" style="margin-left:-10px;"
                onerror="this.onerror=null; this.src='{{ asset('images/cfidpgp.png') }}';">
        </div>

        <!-- Contact Information -->
        <div class="flex items-center gap-3 sm:gap-4">
            <!-- Phone -->
            <a href="tel:(052)7422100"
                class="flex items-center gap-1.5 text-green-600 hover:text-green-700 transition-colors duration-200"
                aria-label="Call us">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z" />
                </svg>
                <span class="hidden lg:inline text-xs font-medium">(052) 742 2100</span>
            </a>

            <!-- Email -->
            <a href="mailto:regionv@pca.gov.ph"
                class="flex items-center gap-1.5 text-gray-600 hover:text-gray-700 transition-colors duration-200"
                aria-label="Send us an email">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                </svg>
                <span class="hidden lg:inline text-xs font-medium">regionv@pca.gov.ph</span>
            </a>

            <!-- Facebook -->
            <a href="https://www.facebook.com/pcar5bicol" target="_blank" rel="noopener noreferrer"
                class="flex items-center gap-1.5 text-gray-600 hover:text-gray-700 transition-colors duration-200"
                aria-label="Visit our Facebook page">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                </svg>
                <span class="hidden lg:inline text-xs font-medium">PCA Region 5</span>
            </a>
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
                    // Get header height dynamically
                    const header = document.querySelector('header');
                    const headerHeight = header ? header.offsetHeight : 80;

                    // Scroll to the target with smooth behavior
                    window.scrollTo({
                        top: targetElement.offsetTop - headerHeight - 10, // Offset for header + small margin
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
                    const header = document.querySelector('header');
                    const headerHeight = header ? header.offsetHeight : 80;

                    window.scrollTo({
                        top: trackSection.offsetTop - headerHeight - 10,
                        behavior: 'smooth'
                    });
                }
            });
        }
    });

    // Function to scroll to programs section
    function scrollToPrograms() {
        const programsSection = document.getElementById('programs');
        if (programsSection) {
            const header = document.querySelector('header');
            const headerHeight = header ? header.offsetHeight : 80;

            window.scrollTo({
                top: programsSection.offsetTop - headerHeight - 10, // Offset for header + small margin
                behavior: 'smooth'
            });
        }
    }
</script>