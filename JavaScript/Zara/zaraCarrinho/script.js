var total = 0;

function adicionarAoCarrinho(item, preco) {
    total += preco;
    total = parseFloat(total.toFixed(2));
    document.getElementById('totalPrice').innerHTML = total;
    
    const li = $("<li></li>");
    const ctd = `
        <span class="titleItems">
            ${item}
        </span>
        <br> &emsp;
        <span class="priceItems">
            R$${preco}
        </span><br>`;
    li.html(ctd);
    $('#cartItems').append(ctd);
    $('.titleItems').css({"font-size": "20px", "font-weigth": "300"}); $('.priceItems').css({"font-size": "15px"});
}

$(document).ready(function(){
    $('#saveButton').click(function(event){
        event.preventDefault();

        var nome = $('#name').val();
        var email = $('#email').val();

        if (nome != "" && email != "") {
            $('.add-to-cart').attr('disabled', false);   
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