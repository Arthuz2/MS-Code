<?php

namespace App\Produto;

use const App\ELETRODOMESTICO;
use const App\MOVEL;

class Geladeira implements ProdutoInterface
{
  public function tipo(): string
  {
    return ELETRODOMESTICO;
  }

  public function nome(): string
  {
    return 'Geladeira Brastemp Frost Free';
  }

  public function ano(): int
  {
    return 2018;
  }

  public function isMovel(ProdutoInterface $produto): bool
  {
    return $this->tipo() == MOVEL;
  }
}
