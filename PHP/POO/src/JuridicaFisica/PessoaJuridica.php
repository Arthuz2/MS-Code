<?php

namespace App\Poo\JuridicaFisica;

class PessoaJuridica extends Pessoa
{
  private CpfCnpj $cpfCnpj;

  public function __construct(string $nome, string $documento)
  {
    parent::__construct($nome, $documento);
    $this->cpfCnpj = new CpfCnpj($documento);
  }

  public function documento(): string
  {
    return $this->cpfCnpj->documentoFormatado();
  }
}
