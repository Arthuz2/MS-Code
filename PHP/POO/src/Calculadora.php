<?php

namespace App\Poo;

/** Crie uma classe Calculadora que deve ter as quatro operações básicas da matemática. Cada operação deve ser capaz de receber um ou mais valores e realizar a operação correspondente. Além disso, a classe deve tratar possíveis erros que possam ocorrer durante a execução das operações. */

class Calculadora
{

  private string $calculo;
  private int $resultado;

  public function __construct(string $calculo)
  {
    $this->calculo = $calculo;
  }

  private function calcular()
  {
    
  }

  public function getResultado(): int
  {
    return $this->resultado;
  }
}
