const filterOpen = document.getElementById('filter_open');
const filterClose = document.getElementById('filter_close');
const filterMenu = document.getElementById('filter_menu');

const filter = document.getElementById('filter');

let isFilterOpen = false;

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

filterMenu.addEventListener('click', toogleFilter);
