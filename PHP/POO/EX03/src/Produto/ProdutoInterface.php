<?php

namespace App\Produto;

interface ProdutoInterface
{
  public function tipo(): string;
  public function nome(): string;
  public function ano(): int;
  public function isMovel(ProdutoInterface $produtoInterface): bool;
}