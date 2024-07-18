<?php

namespace App;

class Pessoa
{

	public function __construct
	(
		Veiculo $veiculo
	)
	{
		$this->sabeDirigir($veiculo);
	}

	private function sabeDirigir(Veiculo $veiculo): bool
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
