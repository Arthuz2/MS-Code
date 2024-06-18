<?php

//1 – Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.
function somaMultiplica($n1,$n2){
  return ($n1+$n2)*$n1;
}

//2 – Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media e exiba para o usuário o resultado.
function media($val1,$val2,$val3){
  return ($val1+$val2+$val3)/3;
}

//3 – Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor.
function quinzePorcento($n){
  return $n*0.15;
}

//4 – Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.
function cincoCinquentaPorcento($n){
  return "5%: " . $n*0.05 . " 50%: " . $n*0.5;
}

//5 – Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados e mostre o resultado.
function quadradoSoma($n1,$n2){
  return ($n1**2) + ($n2**2);
}

//6 – Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e exiba para o usuário a velocidade em km/h.
function metrosEmKm($vel){
  return $vel / 1000;
}

//7 – Escreva um algoritmo que leia a altura e o peso de uma pessoa, calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário.
function imc($alt,$peso){
  $imc = $peso/($alt**2);
  if ($imc < 16.9) {
    return "Muito abaixo do peso, imc: $imc";
  }elseif ($imc > 17 && $imc < 18.4) {
    return "Abaixo do peso, imc: $imc";
  }elseif ($imc > 18.5 && $imc < 24.9) {
    return "Peso normal, imc: $imc";
  }elseif ($imc > 25 && $imc < 29.9) {
    return "Acima do peso, imc: $imc";
  }elseif ($imc > 30 && $imc < 34.9) {
    return "Obesidade grau I, imc: $imc";
  }elseif ($imc > 35 && $imc < 40) {
    return "Obesidade grau II, imc: $imc";
  }else {
    return "Obesidade grau III, imc: $imc";
  }
}

//8 – Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 9%.
function descontoNove($val){
  $desc = $val*0.09;
  return $val-$desc;
}

//9 – Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.
function descontoSete($val){
  $valDesc = $val*0.07;
  return "Valor Original: $val, Valor do desconto: $valDesc, Valor com o desconto: " . $val-$valDesc;
}

//10 – Escreva um algoritmo que calcule e apresente o volume de uma caixa retangular por meio da seguinte fórmula: volume = comprimento x largura x altura.
function volume($comp,$larg,$alt){
  $vol = $comp*$larg*$alt;
  return $vol;
}

//11 – Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 27%.
function descontoVinteSete($val){
  $desc = $val*0.27;
  $desc = $val-$desc;
  return $desc;
}

//12 – Escreva um algoritmo que receba dois valores, calcule e apresente a área de um trapézio.
function areaTrapezio($b1,$b2,$alt){
  $area = (($b1+$b2)*$alt)/2;
  return $area;
}

//13 – Escreva um algoritmo que leia 3 notas de um aluno e calcule a média final deste aluno, considerando que a média é ponderada, ou seja, o peso das notas são, respectivamente, 2, 3 e 5.
function mediaPonderada($n1, $n2, $n3){
  $pesos = [2,3,5];
  $mediaPon = ($n1*$pesos[0]+$n2*$pesos[1]+$n3*$pesos[2]) / ($pesos[0]+$pesos[1]+$pesos[2]);
  return $mediaPon;
}

//14 – Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.
function parcelas($val){
  $valTotal = $val*0.16;
  $valTotal = $val+$valTotal;
  $valParc = $valTotal/10;
  return "Valor da parcela: $valParc, Valor total: $valTotal";
}

//15 – Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de combustível.  Fórmula: Consumo médio = Km / litros.
function consumoCombustivel($dis, $comb){
  $consMedio = $dis / $comb;
  return number_format($consMedio,2);
}

echo somaMultiplica(2,10) . "<br>";
echo media(8,9,6) . "<br>";
echo quinzePorcento(100) . "<br>";
echo cincoCinquentaPorcento(100) . "<br>";
echo quadradoSoma(2,2) . "<br>";
echo metrosEmKm(500) . "<br>";
echo imc(1.72,65) . "<br>";
echo descontoNove(100) . "<br>";
echo descontoSete(100) . "<br>";
echo volume(5,10, 15) . "<br>";
echo descontoVinteSete(100) . "<br>";
echo areaTrapezio(2,4,8) . "<br>";
echo mediaPonderada(8,9,10) . "<br>";
echo parcelas(70) . "<br>";
echo consumoCombustivel(1.5,0.8) . "<br>";