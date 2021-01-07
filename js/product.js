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

// กดดูรูปใหญ่
function clicktoBig(){
  const ele = document.querySelectorAll('.thumb-pic img')
  ele.forEach(Ele=>{
    Ele.addEventListener('click',function(){
      let img_src = this.src
      document.querySelector('.big-pic img').src = img_src
    })
  })
}

clicktoBig()