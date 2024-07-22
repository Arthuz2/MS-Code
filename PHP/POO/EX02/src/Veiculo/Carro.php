<?php

namespace App\Veiculo;

class Carro implements Veiculo
{
  public function qntRodas(): int
  {
    return 4;
  }

  public function dirigeOuPilota(): string
  {
    return 'Dirige';
  }

  public function descricao(): string
  {
    return 'Roooon';
  }
}
