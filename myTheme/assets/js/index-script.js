
let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
const slideInterval = 5000;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('activee');
        dots[i].classList.remove('activee');
    });
    slides[index].classList.add('activee');
    dots[index].classList.add('activee');
}

dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
        currentIndex = i;
        showSlide(currentIndex);
        clearInterval(autoSlide);
        autoSlide = setInterval(nextSlide, slideInterval);
    });
});

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

let autoSlide = setInterval(nextSlide, slideInterval);

showSlide(currentIndex);






document.addEventListener('DOMContentLoaded', () => {
  const track = document.querySelector('.carousel-track');
  const carouselSlides = Array.from(track.children);
  const prevButton = document.querySelector('.carousel-button.prev');
  const nextButton = document.querySelector('.carousel-button.next');

  let slideWidth = carouselSlides[0].getBoundingClientRect().width;
  let currentIndex = 0;
  let slidesToShow = getSlidesToShow();

  const setSlidePosition = () => {
    slideWidth = carouselSlides[0].getBoundingClientRect().width;
    carouselSlides.forEach((slide, index) => {
      slide.style.left = slideWidth * index + 'px';
    });
  };

  setSlidePosition();

  window.addEventListener('resize', () => {
    slidesToShow = getSlidesToShow();
    setSlidePosition();
    moveToSlide(currentIndex);
  });

  function getSlidesToShow() {
    const width = window.innerWidth;
    if (width > 1200) return 5;
    if (width > 992) return 4;
    if (width > 768) return 3;
    return 2;
  }

  const moveToSlide = (index) => {
    const amountToMove = slideWidth * index;
    track.style.transform = 'translateX(-' + amountToMove + 'px)';
    currentIndex = index;
    updateButtons();
  };

  const updateButtons = () => {
    prevButton.disabled = currentIndex === 0;
    nextButton.disabled = currentIndex >= carouselSlides.length - slidesToShow;
  };

  updateButtons();

  prevButton.addEventListener('click', () => {
    let newIndex = currentIndex - 2;
    if (newIndex < 0) newIndex = 0;
    moveToSlide(newIndex);
  });

  nextButton.addEventListener('click', () => {
    let newIndex = currentIndex + 2;
    if (newIndex > carouselSlides.length - slidesToShow) {
      newIndex = carouselSlides.length - slidesToShow;
    }
    moveToSlide(newIndex);
  });
});
