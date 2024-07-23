<?php

namespace App\Pessoa;

use App\Veiculo\Veiculo;

class PessoaJuridica extends Pessoa
{
  private CpfCnpj $cpfCnpj;
  private array $veiculos;

  public function __construct(string $nome, string $documento, Veiculo ...$veiculos)
  {
    parent::__construct($nome, $documento);
    $this->cpfCnpj = new CpfCnpj($documento);
    $this->veiculos = $veiculos;
  }

  public function documento(): string
  {
    return $this->cpfCnpj->documentoFormatado();
  }

  public function getVeiculos(): array
  {
    return $this->veiculos;
  }
}