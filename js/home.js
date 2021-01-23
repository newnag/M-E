var swiper = new Swiper('.home-slide', {
  direction: 'vertical',
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

//-------------------------------------------
// aside menu mobile
//-------------------------------------------
const aside_mobile = ()=>{
  document.querySelector('.aside-menu').classList.add('show')
}
const closeAside_mobile = ()=>{
  document.querySelector('.aside-menu').classList.remove('show')
}

//-------------------------------------------
// head menu mobile
//-------------------------------------------
const head_menu = ()=>{
  document.querySelector('.header nav').classList.add('show')
}
const close_headMenu = ()=>{
  document.querySelector('.header nav').classList.remove('show')
}
//-------------------------------------------
// searchbox
//-------------------------------------------
const searchbox = ()=>{
  document.querySelector('header .search-box').classList.toggle('show')
  document.querySelector('#inputSearch').value = ""
}


document.querySelector('#inputSearch').addEventListener('keyup', function(e){
  let key = e.keyCode;
  let search = this.value;
  if(key == 13){
    location.href = location.origin+"/?search="+search;
  }
});
//-------------------------------------------
// tag filter
//-------------------------------------------
//open-close
const open_tag = ()=>{
  document.querySelector('.filter-tag').classList.add('show')
}
const close_filter = ()=>{
  document.querySelector('.filter-tag').classList.remove('show')
}

// reset tag
const reset_tag = ()=>{
  const button = document.querySelectorAll('.select-tag .tag li button')
  button.forEach(bt=>{
    bt.classList.remove('active')
  })
}

// click tag
const select_tag = (that)=>{
  that.classList.toggle('active')
}

//-------------------------------------------
// slide footer
//-------------------------------------------

function DragImg(){
  let slideLeft = document.querySelector('.list-brand .prev i')
  let slideright = document.querySelector('.list-brand .next i')

  const Slide = document.querySelector('.list-brand-item')

  let scrollLeft = Slide.scrollLeft;

  slideLeft.addEventListener('click',(e)=>{
    Slide.scrollLeft -= 150;
  })

  slideright.addEventListener('click',(e)=>{
    Slide.scrollLeft += 150;
  })
}

DragImg()
let applyBTN = document.querySelector(".box-filter .apply");
if(applyBTN != null){
  applyBTN.addEventListener("click",function(){
    let param = document.querySelectorAll(".box-filter li button.active");
    let search = "";
    if(param.length > 0){ 
      param.forEach(function(_this){ 
          if(_this.value!=""){
            search += (search =="")? "?tag=":"+";
            search += _this.value
          }
      });
      location.href = location.origin+"/"+search;
    }
  });
  
  
}

function DragBrand(){
  const slider = document.querySelector('.brand .list-brand .list-brand-item');
  let isDown = false;
  let startX;
  let scrollLeft;

  slider.addEventListener('mousedown', (e) => {
      isDown = true;
      slider.classList.add('drag');
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
  });
  slider.addEventListener('mouseleave', () => {
      isDown = false;
      slider.classList.remove('drag');
  });
  slider.addEventListener('mouseup', () => {
      isDown = false;
      slider.classList.remove('drag');
  });
  slider.addEventListener('mousemove', (e) => {
      if(!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 3; //scroll-fast
      slider.scrollLeft = scrollLeft - walk;
  });
}
DragBrand()