<?php

namespace App\Poo\JuridicaFisica;

class PessoaFisica extends Pessoa
{
  public CpfCnpj $documento;

  public function documento(): string
  {
   return $this->documento(); 
  }
}
