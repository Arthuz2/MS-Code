<?php

namespace App\Poo\JuridicaFisica;

class PessoaJuridica extends Pessoa
{
  public CpfCnpj $documento;

  public function documento(): string
  {
   return $this->documento(); 
  }
}
