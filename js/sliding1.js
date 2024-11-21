// Select necessary elements
const ksSlidingContainer = document.querySelector('.ks-sliding');
const ksSlidingItems = document.querySelectorAll('.ks-sliding1');
const ksPrevButton = document.getElementById('ks-prev');
const ksNextButton = document.getElementById('ks-next');

let ksCurrentIndex = 0; // To track the current slide

// Function to update the transform property based on the current index
const ksUpdateSlidePosition = () => {
  const ksSlideWidth = ksSlidingContainer.clientWidth+10; // Full width of the container
  ksSlidingContainer.style.transform = `translateX(-${ksCurrentIndex * ksSlideWidth}px)`;
};

// Function to go to the next slide
const ksGoToNextSlide = () => {
  if (ksCurrentIndex < ksSlidingItems.length - 1) {
    ksCurrentIndex++;
  } else {
    ksCurrentIndex = 0; // Loop back to the first slide
  }
  ksUpdateSlidePosition();
};

// Function to go to the previous slide
const ksGoToPrevSlide = () => {
  if (ksCurrentIndex > 0) {
    ksCurrentIndex--;
  } else {
    ksCurrentIndex = ksSlidingItems.length - 1; // Go to the last slide
  }
  ksUpdateSlidePosition();
};

// Add event listeners to the buttons
ksNextButton.addEventListener('click', ksGoToNextSlide);
ksPrevButton.addEventListener('click', ksGoToPrevSlide);

// Automatic slide functionality
setInterval(ksGoToNextSlide, 3000); // Change slide every 3 seconds

// Initial setting for sliding position
ksUpdateSlidePosition();
