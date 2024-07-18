<?php

namespace App;

class Trator implements Veiculo
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
    return 'Vuuuuuum';
  }
}
