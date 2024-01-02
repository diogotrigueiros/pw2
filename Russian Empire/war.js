var audio = document.getElementById("audioMy");

audio.play();

let currentSlide = 0;

function changeSlide(direction) {
  const maxSlides = 7;
  const slides = document.querySelector('.slides');
  const slideWidth = document.querySelector('.slide').offsetWidth;
  
  currentSlide = (currentSlide + direction + maxSlides) % maxSlides;

  const newTranslate = -currentSlide * slideWidth;

  slides.style.transform = `translateX(${newTranslate}px)`;
}

