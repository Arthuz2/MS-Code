<?php

namespace App\Produto;

use const App\MOVEL;

class Cama implements ProdutoInterface
{
  public function tipo(): string
  {
    return MOVEL;
  }

  public function nome(): string
  {
    return 'Cama Box Emma';
  }

  public function ano(): int
  {
    return 2020;
  }

  public function isMovel(ProdutoInterface $produto): bool
  {
    return $this->tipo() == MOVEL;
  }
}
