$(document).ready(function(){
    $('#saveButton').click(function(event){
        event.preventDefault();

        var nome = $('#name').val();
        var email = $('#email').val();

        if (nome != "" && email != "") {
            $('.btn').attr('disabled', false);
            $('#userInfo').show(function(){;
                const p = $('<p></p>');
                const dados = `Nome : ${nome} <br> Email: ${email}`;
                p.html(dados);
                $('#userInfo').css({"display": "flex", "justify-content": "start", "font-weight": "500", "font-size": "20px"})
                $('#userInfo').append(p);
            });
        }
    });
});

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
