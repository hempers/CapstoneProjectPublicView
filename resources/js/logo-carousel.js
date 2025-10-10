/**
 * Logo Carousel JavaScript
 * Handles responsive behavior, animation, and logo standardization
 */

document.addEventListener("DOMContentLoaded", function () {
    // Standardize all logo elements structure and styling
    function standardizeLogoElements() {
        // Get all logo circles
        const logoCircles = document.querySelectorAll(".logo-circle");

        // For each logo circle
        logoCircles.forEach((circle) => {
            // Remove any extra classes but keep rounded-full
            circle.className = "logo-circle rounded-full p-3 shadow-md";

            // Apply responsive sizing
            let circleSize = "90px";
            let imgSize = "65%";
            let shadowSize = "0 3px 5px rgba(0, 0, 0, 0.1)";

            if (window.innerWidth >= 1024) {
                circleSize = "130px";
                imgSize = "70%";
                shadowSize = "0 4px 6px rgba(0, 0, 0, 0.1)";
            } else if (window.innerWidth >= 640) {
                circleSize = "110px";
                imgSize = "68%";
                shadowSize = "0 4px 6px rgba(0, 0, 0, 0.1)";
            }

            circle.style.width = circleSize;
            circle.style.height = circleSize;
            circle.style.position = "relative";
            circle.style.overflow = "hidden";
            circle.style.boxShadow = shadowSize;
            circle.style.border = "2px solid rgba(34, 197, 94, 0.2)";
            circle.style.background = "white";

            // Get the image inside
            const img = circle.querySelector("img");
            if (img) {
                // Remove any classes from the image
                img.className = "";

                // Apply responsive styling
                img.style.maxWidth = imgSize;
                img.style.maxHeight = imgSize;
                img.style.position = "absolute";
                img.style.top = "50%";
                img.style.left = "50%";
                img.style.transform = "translate(-50%, -50%)";
            }
        });

        // Get all logo items
        const logoItems = document.querySelectorAll(".logo-item");

        // For each logo item with responsive sizing
        logoItems.forEach((item) => {
            item.className = "logo-item";

            let itemWidth = "120px";
            let itemMargin = "0 10px";

            if (window.innerWidth >= 1024) {
                itemWidth = "180px";
                itemMargin = "0 16px";
            } else if (window.innerWidth >= 640) {
                itemWidth = "150px";
                itemMargin = "0 12px";
            }

            item.style.margin = itemMargin;
            item.style.width = itemWidth;
        });

        // Ensure paragraph styling is consistent with responsive sizes
        const logoTexts = document.querySelectorAll(".logo-item p");
        logoTexts.forEach((text) => {
            text.style.fontWeight = "500";
            text.style.color = "rgb(75, 85, 99)";

            let fontSize = "0.65rem";
            let marginTop = "8px";

            if (window.innerWidth >= 1024) {
                fontSize = "0.75rem";
                marginTop = "12px";
            } else if (window.innerWidth >= 640) {
                fontSize = "0.7rem";
                marginTop = "10px";
            }

            text.style.fontSize = fontSize;
            text.style.marginTop = marginTop;
        });
    }

    // Run the standardization on page load
    standardizeLogoElements();

    const logoTracks = document.querySelectorAll(".logo-track");
    let scrollSpeed = 65; // Base scroll speed in seconds

    // Function to adjust animation speed based on screen size
    function adjustScrollSpeed() {
        if (window.innerWidth < 640) {
            // Mobile
            scrollSpeed = 50; // Faster for mobile
        } else if (window.innerWidth < 1024) {
            // Tablet
            scrollSpeed = 55; // Faster for tablet
        } else {
            // Desktop
            scrollSpeed = 65; // Faster for desktop
        }

        // Apply to both tracks
        logoTracks.forEach((track) => {
            track.style.animationDuration = `${scrollSpeed}s`;
        });
    }

    // Setup truly seamless scrolling
    function setupSeamlessScrolling() {
        // Calculate total width needed
        const track1 = document.getElementById("logoTrack1");
        const track2 = document.getElementById("logoTrack2");

        if (!track1 || !track2) return;

        // Make sure the second track starts exactly where the first one ends
        const observer = new ResizeObserver((entries) => {
            for (let entry of entries) {
                if (entry.target === track1) {
                    // Ensure track2 positioning is correct
                    track2.style.left = "100%";
                }
            }
        });

        // Start observing for changes
        observer.observe(track1);
    }

    // Function to ensure consistent vertical alignment of all logos
    function enforceLogoAlignment() {
        const allLogoImages = document.querySelectorAll(".logo-circle img");

        allLogoImages.forEach((img) => {
            // Ensure all logos are properly centered
            setTimeout(() => {
                img.style.position = "absolute";
                img.style.top = "50%";
                img.style.left = "50%";
                img.style.transform = "translate(-50%, -50%)";
            }, 100);
        });
    }

    // Initial adjustments
    adjustScrollSpeed();
    setupSeamlessScrolling();
    enforceLogoAlignment();

    // Adjust on window resize with debounce
    let resizeTimeout;
    window.addEventListener("resize", () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            standardizeLogoElements();
            adjustScrollSpeed();
            enforceLogoAlignment();
        }, 250);
    });
});
