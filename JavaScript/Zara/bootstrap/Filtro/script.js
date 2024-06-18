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

var total = 0;
const produto = [];

function adicionarAoCarrinho(item, preco) {
  total += preco;
  total = parseFloat(total.toFixed(2));
  document.getElementById('totalPrice').innerHTML = `R$${total.toFixed(2)}`;

  let vrf = produto.find(prod => prod.nome === item);
  if (vrf) {
    vrf.qtd += 1;
  } else {
    produto.push({
      nome: item,
      preco: preco,
      qtd: 1
    });
  }
  addlista();
}

function addlista() {
  $('#cartItems').empty();

  produto.forEach(prod => {
    const li = $('<li></li>');
    const ctd = `
      <span class="titleItems">
        ${prod.nome} (${prod.qtd})
      </span>
      <br> &emsp;
      <span class="priceItems">
        R$${prod.preco}
      </span><br>`;
    li.html(ctd);
    $('#cartItems').append(li);
    $('.titleItems').css({"font-size": "20px", "font-weight": "400"});
    $('.priceItems').css({"font-size": "18px"});
  });
}
