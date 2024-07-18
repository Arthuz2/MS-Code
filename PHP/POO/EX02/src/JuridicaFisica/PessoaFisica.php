<?php

namespace App\Poo\JuridicaFisica;

class PessoaFisica extends Pessoa
{
  private CpfCnpj $cpfCnpj;

  public function __construct(string $nome, string $documento)
  {
    parent::__construct($nome, $documento);
    $this->cpfCnpj = new CpfCnpj($documento);
  }

  public function documento(): string
  {
    $this->cpfCnpj->limparDocumento($this->documento);
    return $this->cpfCnpj->documentoFormatado();
  }
}
