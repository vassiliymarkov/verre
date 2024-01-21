let swiper = new Swiper('.swiper-container', {

  a11y: {
    prevSlideMessage: 'Previous slide',
    nextSlideMessage: 'Next slide',

  },

  autoplay: {
    delay: 1500,
    reverseDirection: false,
  },

  slidesPerView: 1,
  spaceBetween: 40,

  effect: 'fade',
   fadeEffect: {
    crossFade: true
  },

  /* parallax: true, */


});