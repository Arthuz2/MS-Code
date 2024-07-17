<?php

namespace App\Poo\JuridicaFisica;

class CpfCnpj
{
  public function __construct(
    private string $documento
  )
  {
    $this->documento = $documento;
  }

  public function documentoFormatado(): string
  {
    if($this->documento == 11){
      return $this->documento = sprintf(
        '%s.%s.%s-%s',
        substr($this->documento, 0,3),
        substr($this->documento, 3,3),
        substr($this->documento, 6,2),
        substr($this->documento,-2)
       );
    }

    return $this->documento = sprintf(
      '%s.%s.%s/%s-%s',
      substr($this->documento, 0,2),
      substr($this->documento, 2,3),
      substr($this->documento, 5,3),
      substr($this->documento, 8,4),
      substr($this->documento, -2)
     );
  }
}
