<?php

use dateTimeImmutable;

class Pessoa {
  protected string $nome;
  protected DateTimeImmutable $dataNascimento;

  protected function __construct(
      string $nome,
      DateTimeImmutable $dataNascimento
    ){
      $this->nome = $nome;
      $this->dataNascmento = $dataNascimento;
    }
}