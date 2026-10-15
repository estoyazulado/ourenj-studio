/* =========================
   HOME CAROUSEL
========================= */

const galleryImages = [
    "images/gallery1.jpg",
    "images/gallery2.jpg",
    "images/gallery3.jpg",
    "images/gallery4.jpg",
    "images/gallery5.jpg",
    "images/gallery6.jpg"
];

let currentIndex = 1;

const leftImage = document.getElementById("gallery-left");
const centerImage = document.getElementById("gallery-center");
const rightImage = document.getElementById("gallery-right");

const previousButton = document.querySelector(".gallery-prev");
const nextButton = document.querySelector(".gallery-next");


function updateGallery() {

    const total = galleryImages.length;

    const leftIndex =
        (currentIndex - 1 + total) % total;

    const rightIndex =
        (currentIndex + 1) % total;

    leftImage.src = galleryImages[leftIndex];
    centerImage.src = galleryImages[currentIndex];
    rightImage.src = galleryImages[rightIndex];
}


nextButton.addEventListener("click", function () {

    currentIndex++;

    if (currentIndex >= galleryImages.length) {
        currentIndex = 0;
    }

    updateGallery();
});


previousButton.addEventListener("click", function () {

    currentIndex--;

    if (currentIndex < 0) {
        currentIndex = galleryImages.length - 1;
    }

    updateGallery();
});


updateGallery();

/* =========================
   OUR STORY CAROUSEL
========================= */

const storyImages = [
    "images/story1.jpg",
    "images/story2.jpg",
    "images/story3.jpg",
    "images/story4.jpg",
    "images/story5.jpg",
    "images/story6.jpg",
    "images/story7.jpg",
    "images/story8.jpg"
];


const storyImageElements =
    document.querySelectorAll(
        ".story-circle img"
    );


const storyPrevious =
    document.querySelector(
        ".story-prev"
    );


const storyNext =
    document.querySelector(
        ".story-next"
    );


let storyStartIndex = 0;


/* Show five images */

function updateStoryCarousel() {

    storyImageElements.forEach(
        function(image, index) {

            const imageIndex =
                (
                    storyStartIndex
                    + index
                )
                % storyImages.length;

            image.src =
                storyImages[imageIndex];

        }
    );

}


/* Next */

storyNext.addEventListener(
    "click",
    function() {

        storyStartIndex =
            (
                storyStartIndex + 1
            )
            % storyImages.length;

        updateStoryCarousel();

    }
);


/* Previous */

storyPrevious.addEventListener(
    "click",
    function() {

        storyStartIndex =
            (
                storyStartIndex
                - 1
                + storyImages.length
            )
            % storyImages.length;

        updateStoryCarousel();

    }
);


updateStoryCarousel();