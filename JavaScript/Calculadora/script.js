$(document).ready(function () {

    $("#soma").click(function () {
        var n1 = document.getElementById('num1').value;
        var n2 = document.getElementById('num2').value;

        n1 = parseInt(n1);
        n2 = parseInt(n2);

        var resultado = n1 + n2;
        document.getElementById("text").innerHTML = resultado;
    });

    $("#subt").click(function () {
        var n1 = document.getElementById('num1').value;
        var n2 = document.getElementById('num2').value;

        n1 = parseInt(n1);
        n2 = parseInt(n2);

        var resultado = n1 - n2;
        document.getElementById("text").innerHTML = resultado;
    })
});