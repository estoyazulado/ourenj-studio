/* =========================
   GALLERY MASONRY LIGHTBOX
   Works only on pages containing .gallery-item cards.
========================= */
document.addEventListener("DOMContentLoaded", () => {
    const items = Array.from(document.querySelectorAll(".gallery-item"));
    const lightbox = document.getElementById("gallery-lightbox");
    const lightboxImage = document.getElementById("lightbox-image");
    const lightboxCaption = document.getElementById("lightbox-caption");

    if (!items.length || !lightbox || !lightboxImage || !lightboxCaption) return;

    const closeButton = lightbox.querySelector(".lightbox-close");
    const previousButton = lightbox.querySelector(".lightbox-prev");
    const nextButton = lightbox.querySelector(".lightbox-next");
    let activeItems = [];
    let currentIndex = 0;
    let lastFocusedElement = null;

    function renderImage(index) {
        if (!activeItems.length) return;
        currentIndex = (index + activeItems.length) % activeItems.length;
        const item = activeItems[currentIndex];
        const image = item.querySelector("img");
        const caption = item.dataset.caption || item.querySelector(".gallery-caption")?.textContent.trim() || image.alt;

        lightboxImage.src = image.currentSrc || image.src;
        lightboxImage.alt = image.alt || caption;
        lightboxCaption.textContent = caption;
    }

    function openLightbox(item) {
        const section = item.closest(".gallery-section");
        activeItems = Array.from((section || document).querySelectorAll(".gallery-item"));
        currentIndex = activeItems.indexOf(item);
        lastFocusedElement = document.activeElement;
        renderImage(currentIndex);
        lightbox.classList.add("active");
        lightbox.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
        closeButton.focus();
    }

    function closeLightbox() {
        lightbox.classList.remove("active");
        lightbox.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
        lightboxImage.removeAttribute("src");
        if (lastFocusedElement && typeof lastFocusedElement.focus === "function") lastFocusedElement.focus();
    }

    items.forEach((item) => {
        item.addEventListener("click", () => openLightbox(item));
        item.addEventListener("keydown", (event) => {
            if (event.key === "Enter" || event.key === " ") {
                event.preventDefault();
                openLightbox(item);
            }
        });
    });

    closeButton.addEventListener("click", closeLightbox);
    previousButton.addEventListener("click", () => renderImage(currentIndex - 1));
    nextButton.addEventListener("click", () => renderImage(currentIndex + 1));

    lightbox.addEventListener("click", (event) => {
        if (event.target === lightbox) closeLightbox();
    });

    document.addEventListener("keydown", (event) => {
        if (!lightbox.classList.contains("active")) return;
        if (event.key === "Escape") closeLightbox();
        if (event.key === "ArrowLeft") renderImage(currentIndex - 1);
        if (event.key === "ArrowRight") renderImage(currentIndex + 1);
    });
});
