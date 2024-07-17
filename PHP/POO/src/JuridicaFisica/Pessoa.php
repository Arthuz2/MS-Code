<?php

namespace App\Poo\JuridicaFisica;

abstract class Pessoa
{
  protected string $nome;
  protected string $documento;

  public function __construct(
    string $nome,
    string $documento
  ) {
    $this->nome = $nome;
    $this->documento = $documento;
  }
}
