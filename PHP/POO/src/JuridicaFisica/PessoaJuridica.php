<?php

namespace App\Poo\JuridicaFisica;

class PessoaJuridica extends Pessoa
{
  private CpfCnpj $cpfCnpj;

  public function __construct()
  {
    $this->cpfCnpj = new CpfCnpj($this->documento);
  }

  public function documento(): string
  {
    return $this->cpfCnpj->documentoFormatado();
  }
}
