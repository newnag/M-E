const slider = ()=>{
  const elem = document.querySelector('.main-carousel');
  var flkty = new Flickity( elem, {
    // options
    cellAlign: 'left',
    prevNextButtons: false,
    pageDots: false,
    contain: true
  });
}

slider();

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