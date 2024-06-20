<?php

//1 - Faça um algoritmo que leia os valores de A, B, C e em seguida imprima na tela a soma entre A e B é mostre se a soma é menor que C.
function verificaSoma(int $n1,int $n2,int $n3): string{
  $sum = $n1+$n2;
  if ($sum > $n3){
    return "Soma: $sum, Maior";
  }else{
    return "Soma: $sum, Menor";
  }
}

//2 - Faça um algoritmo para receber um número qualquer e imprimir na tela se o número é par ou ímpar, positivo ou negativo.
function parOuImpar(int $n): string{
  if ($n % 2 == 0){
    if ($n > 0){
      return "Par, positivo";
    }else if ($n == 0){
      return "Par, nulo";
    }else{
      return "Par, negativo";
    }
  }else {
    if ($n > 0){
      return "Impar, positivo";
    }else{
      return "Impar, negativo";
    }
  }
}

//3 - Faça um algoritmo que leia dois valores inteiros A e B, se os valores de A e B forem iguais, deverá somar os dois valores, caso contrário devera multiplicar A por B. Ao final de qualquer um dos cálculos deve-se atribuir o resultado a uma variável C e imprimir seu valor na tela.
function somaValoresIguais(int $n1,int $n2): string{
  if ($n1 == $n2){
    $res = $n1+$n2;
    return "Soma: $res";
  }else{
    $res = $n1*$n2;
    return "Multiplicação: $res";
  }
}

//4 - Faça um algoritmo que receba um número inteiro e imprima na tela o seu antecessor e o seu sucessor.
function antecessorSucessor(int $n): string{
  return "Antecessor: " . $n-1 . " Sucessor: " . $n+1;
}

//5 - Faça um algoritmo que leia o valor do salário mínimo e o valor do salário de um usuário, calcule quantos salários mínimos esse usuário ganha e imprima na tela o resultado. (Base para o Salário mínimo R$ 1.293,20).
function qtdSalariosMinimos(int $n): string{
  $salMin = 1293.20;
  $qtdSal = $n / $salMin;
  return "Quantidade de salarios minimos: " . number_format($qtdSal, 1);
}

echo verificaSoma(3,4,8) . "<br>";
echo parOuImpar(0) . "<br>";
echo somaValoresIguais(3,2) . "<br>";
echo antecessorSucessor(12) . "<br>";
echo qtdSalariosMinimos(8344.34) . "<br>";