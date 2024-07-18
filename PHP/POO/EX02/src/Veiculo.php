<?php 

namespace App;

interface Veiculo
{
	public function qntRodas(): int;
  public function dirigeOuPilota(): string; 
  public function descricao(): string;
}

//array shape