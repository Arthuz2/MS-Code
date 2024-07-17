<?php

namespace App\Poo\JuridicaFisica;

class PessoaFisica extends Pessoa
{
  private CpfCnpj $cpfCnpj;

  public function __construct()
  {
    $this->cpfCnpj = new CpfCnpj();
  }

  public function documento(): string
  {
    return $this->cpfCnpj->documentoFormatado();
  }
}
