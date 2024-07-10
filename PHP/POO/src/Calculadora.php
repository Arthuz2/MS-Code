<?php

namespace App\Poo;

/** Crie uma classe Calculadora que deve ter as quatro operações básicas da matemática. Cada operação deve ser capaz de receber um ou mais ope$opeores e realizar a operação correspondente. Além disso, a classe deve tratar possíveis erros que possam ocorrer durante a execução das operações. */

class Calculadora
{
  private array $expressao;

  public function __construct(...$expressao)
  {
    $this->expressao = $expressao;
  }

  public function calcular()
  {
    $res = $this->expressao[0];

    for ($i = 1; $i < count($this->expressao); $i+= 2){
      $ope = $this->expressao[$i];
      $proxNum = $this->expressao[$i+1];

      if($ope == "+"){
        $res += $proxNum;
      }
      if ($ope == "-"){
        $res -= $proxNum;
      }
      if ($ope == "*") {
        $res *= $proxNum;
      }
      if ($ope == "/"){
        if ($proxNum == 0){
          echo "Divisão por Zero";
        }
        $res /= $proxNum;
      }
    }
    return $res;
  }

  public function getResultado()
  { 
    return $this->calcular();
  }
}