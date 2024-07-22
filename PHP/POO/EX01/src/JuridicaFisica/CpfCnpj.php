<?php

namespace App\Poo\JuridicaFisica;

class CpfCnpj
{
  private string $documento;

  public function __construct(string $documento)
  {
    $this->limparDocumento($documento);
  }

  public function limparDocumento(string $documento): string
  {
    $this->documento = str_replace(['.', '-', '/'], '', $documento);
    return $this->documento;
  }

  public function documentoFormatado(): string
  {
    if (strlen($this->documento) == 11) {
      return sprintf(
        '%s.%s.%s-%s',
        substr($this->documento, 0, 3),
        substr($this->documento, 3, 3),
        substr($this->documento, 6, 3),
        substr($this->documento, 9, 2)
      );
    }

    return sprintf(
      '%s.%s.%s/%s-%s',
      substr($this->documento, 0, 2),
      substr($this->documento, 2, 3),
      substr($this->documento, 5, 3),
      substr($this->documento, 8, 4),
      substr($this->documento, 12, 2)
    );
  }
}
