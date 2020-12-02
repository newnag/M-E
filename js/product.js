// สไลด์รูปเล็ก
var swiper = new Swiper('.thumb-pic', {
  slidesPerView: 4,
  spaceBetween: 30,
  freeMode: true,
  
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});