let slideIndex = 0;
showSlides();

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let sliderStatic = document.querySelector(".slider-static");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }

  if (slideIndex === slides.length) {
    sliderStatic.style.display = "block"; // Показываем .slider-static на последнем слайде
  } else {
    sliderStatic.style.display = "none"; // Скрываем .slider-static на остальных слайдах
  }

  slides[slideIndex - 1].style.display = "flex";
  slides[slideIndex - 1].style.flexDirection = "row";
  slides[slideIndex - 1].style.justifyContent = "space-between";
  slides[slideIndex - 1].style.alignItems = "center";
  slides[slideIndex - 1].style.flexWrap = "nowrap";

  setTimeout(showSlides, 3000); // Change image every 2 seconds
}