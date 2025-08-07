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

    // Function to scroll to programs section
    function scrollToPrograms() {
        const programsSection = document.getElementById('programs');
        if (programsSection) {
            window.scrollTo({
                top: programsSection.offsetTop - 70, // Offset for the header
                behavior: 'smooth'
            });
        }
    }
</script>
