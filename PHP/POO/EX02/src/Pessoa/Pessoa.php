<?php

namespace App\Pessoa;

use App\Veiculo\Veiculo;
use App\Veiculo\Carro;
use App\Veiculo\Moto;

abstract class Pessoa
{
  protected string $nome;
  protected string $documento;

  public function __construct(
    string $nome,
    string $documento,
  ) {
    $this->nome = $nome;
    $this->documento = $documento;
  }

  protected function dirige(Veiculo $veiculo): bool
	{
    if($veiculo instanceof Carro){
      return true;
    }
    if($veiculo instanceof Moto){
      return true;
    }
    return false;
	}
}
