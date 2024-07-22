<?php

namespace App\Veiculo;

class Moto implements Veiculo
{
  public function qntRodas(): int
  {
    return 2;
  }

  public function dirigeOuPilota(): string
  {
    return 'Pilota';
  }

  public function descricao(): string
  {
    return 'radandandandan';
  }
}
