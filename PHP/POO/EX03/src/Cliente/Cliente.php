<?php

namespace App\Cliente;

use App\Produto\ProdutoInterface;

class Cliente
{
  private ProdutoInterface $produto;

  public function __construct(ProdutoInterface $produto)
  {
    $this->produto = $produto;
  }

  public function temDesconto(): bool
  {
    return $this->produto->isMovel($this->produto);
  }
}