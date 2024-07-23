<?php

namespace App\Veiculo;

interface Veiculo
{
  public function qntRodas(): int;
  public function dirigeOuPilota(): string;
  public function descricao(): string;
}