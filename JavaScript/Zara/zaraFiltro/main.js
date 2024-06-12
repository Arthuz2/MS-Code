const menuOpen = document.getElementById('menu_open');
const menuClose = document.getElementById('menu_close');
const menuMobil = document.getElementById('menu_mobile');
const filterOpen = document.getElementById('filter_open');
const filterClose = document.getElementById('filter_close');
const filterMenu = document.getElementById('filter_menu');

const nav = document.getElementById('nav');
const filter = document.getElementById('filter');

let isMenuOpen = false;
let isFilterOpen = false;

function toogleMenu() {
  if (isMenuOpen) {
    menuOpen.classList.remove('hide');
    menuClose.classList.add('hide');
  }

  else {
    menuOpen.classList.add('hide');
    menuClose.classList.remove('hide');
  }

  isMenuOpen = !isMenuOpen;

  if (isMenuOpen) {
    nav.style.display = 'block';
    filterClose.style.display = 'none';
    filterOpen.style.display = 'none';
  }

  else {
    nav.style.display = 'none';
    filterClose.style.display = 'none';
    filterOpen.style.display = 'none'
  }

  if (nav.style.display == 'none' && filter.style.display == 'flex'){
    filterClose.style.display = 'none';
    filterOpen.style.display = 'block'
  }else if (nav.style.display == 'none' && filter.style.display == 'none'){
    filterClose.style.display = 'block';
    filterOpen.style.display = 'none'
  }
}

function toogleFilter() {
  if (isFilterOpen) {
    filterOpen.classList.remove('hide');
    filterOpen.classList.add('hide');
  }

  else {
    filterOpen.classList.add('hide');
    filterClose.classList.remove('hide');
  }

  isFilterOpen = !isFilterOpen;

  if (isFilterOpen) {
    filter.style.display = 'flex';
    filterOpen.style.display = 'block';
    filterClose.style.display = 'none';
  }

  else {
    filter.style.display = 'none';
    filterOpen.style.display = 'none';
    filterClose.style.display = 'block';    
  }
}

menuMobil.addEventListener('click', toogleMenu);
filterMenu.addEventListener('click', toogleFilter);
