// CFIDP Carousel JavaScript
document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".carousel-image");
    const dots = document.querySelectorAll(".carousel-dot");
    const prevBtn = document.querySelector(".carousel-btn.prev");
    const nextBtn = document.querySelector(".carousel-btn.next");
    const captionEl = document.querySelector(".carousel-caption");

    // Only initialize if carousel elements exist
    if (!images.length || !dots.length || !prevBtn || !nextBtn) {
        return;
    }

    const captions = [
        "CFIDP: Empowering Coconut Farmers",
        "Health and Medical Programs",
        "Health and Medical Programs",
        "Health and Medical Programs",
        "Health and Medical Programs",
    ];

    let currentIndex = 0;
    let autoPlayInterval;

    function showImage(index) {
        images.forEach((img, i) => {
            if (i === index) {
                img.classList.add("active");
                img.style.opacity = "1";
            } else {
                img.classList.remove("active");
                img.style.opacity = "0";
            }
        });

        dots.forEach((dot, i) => {
            if (i === index) {
                dot.style.backgroundColor = "#09ca59ff";
                dot.style.transform = "scale(1.2)";
            } else {
                dot.style.backgroundColor = "rgba(255, 255, 255, 0.7)";
                dot.style.transform = "scale(1)";
            }
        });

        if (captionEl) {
            captionEl.style.opacity = "0";
            setTimeout(() => {
                captionEl.textContent = captions[index];
                captionEl.style.opacity = "1";
            }, 200);
        }
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    }

    function startAutoPlay() {
        autoPlayInterval = setInterval(nextImage, 4000); // Change image every 5 seconds
    }

    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
    }

    // Event Listeners
    nextBtn.addEventListener("click", () => {
        nextImage();
        stopAutoPlay();
        startAutoPlay(); // Restart autoplay after manual navigation
    });

    prevBtn.addEventListener("click", () => {
        prevImage();
        stopAutoPlay();
        startAutoPlay();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            currentIndex = index;
            showImage(currentIndex);
            stopAutoPlay();
            startAutoPlay();
        });
    });

    // Add smooth transition to caption
    if (captionEl) {
        captionEl.style.transition = "opacity 0.3s ease-in-out";
    }

    // Start autoplay
    startAutoPlay();

    // Pause autoplay when user hovers over carousel
    const carouselContainer =
        document.querySelector(".carousel-images").parentElement;
    if (carouselContainer) {
        carouselContainer.addEventListener("mouseenter", stopAutoPlay);
        carouselContainer.addEventListener("mouseleave", startAutoPlay);
    }
});
