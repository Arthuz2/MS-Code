<?php

namespace App\Poo;

/** Crie uma classe Calculadora que deve ter as quatro operações básicas da matemática. Cada operação deve ser capaz de receber um ou mais valores e realizar a operação correspondente. Além disso, a classe deve tratar possíveis erros que possam ocorrer durante a execução das operações. */

class Calculadora
{

  private string $expressao;

  public function __construct(string $expressao)
  {
    $this->expressao = $expressao;
  }

  public function calcular()
  {
    $nums = []; //Array de números da expressão
    $ope = []; //Array de operadores da expressão
    $calc = str_split($this->expressao); //Transforma a expressão em um Array
    $expressao = preg_replace("/[^0-9]/",",", $this->expressao);
    
    foreach($calc as $val){
      if(($val == "+") || ($val == "-") || ($val == "*") || ($val == "/")){
        $ope[] = $val;
      }
    }
    return $expressao;
  }

  public function getResultado()
  { 
    $resultado[] = $this->calcular();
    return $resultado;
  }
}
