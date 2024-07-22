<?php

namespace App\Pessoa;

use App\Veiculo\Veiculo;

class PessoaFisica extends Pessoa
{
  private CpfCnpj $cpfCnpj;
  private Veiculo $veiculo;

  public function __construct(string $nome, string $documento, Veiculo $veiculo)
  {
    parent::__construct($nome, $documento);
    $this->cpfCnpj = new CpfCnpj($documento);
    $this->veiculo = $veiculo;
  }

  public function documento(): string
  {
    $this->cpfCnpj->limparDocumento($this->documento);
    return $this->cpfCnpj->documentoFormatado();
  }

  public function sabeDirigir(): bool
  {
    return $this->dirige($this->veiculo);
  }
}