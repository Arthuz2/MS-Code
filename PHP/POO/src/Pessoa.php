<?php

namespace App\Poo;
use DateTimeImmutable;

class Pessoa {
  protected string $nome;
  protected DateTimeImmutable $dataNascimento;
  protected string $genero;

  public function __construct(
      string $nome,
      string $dataNascimento,
      string $genero
  ){
      $this->nome = $nome;
      $this->dataNascimento = new DateTimeImmutable($dataNascimento);
      $this->genero = $genero;
  }

  public function getIdade(){
    $idade = $this->dataNascimento->diff(new DateTimeImmutable('now'));
    return $idade->format('%y');
  }
}