<?php

namespace App\Poo\Carro;
use DateTimeImmutable;

class Carro {
  private string $nome;
  private string $placa;
  private DateTimeImmutable $ano;
  private string $modelo;
  private string $cor;
  private string $idade;

  public function __construct(
    string $nome,
    string $placa,
    DateTimeImmutable $ano,
    string $modelo,
    string $cor
  ){
    $this->nome = $nome;
    $this->placa = $placa;
    $this->ano = $ano;
    $this->modelo = $modelo;
    $this->cor = $cor;
  }
 
  public function getIdade(){
    $idade = $this->ano->diff(new DateTimeImmutable('now'));
    return $idade->format('%y'); 
  }

  public function __toString()
  {
    return sprintf("
    Nome: %s <br>
    Modelo: %s <br>
    Ano de Compra: %d <br>
    Placa: %s<br>Cor: %s <br>
    Idade: %d",
    $this->nome,$this->modelo,$this->ano->format('Y'),$this->placa,$this->cor,$this->getIdade());
  }

  public function getInfos(){
    return $this->__toString();
  }

}