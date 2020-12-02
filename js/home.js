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
