<?php 

require_once './vendor/autoload.php';

//criar um metodo na classe pessoa ,com o nome q quiser, essa pessoa vai precisar saber se ela sabe dirigir;
//esse metodo tem que retornar um boleano
//trator,moto e carro
//interface chamada veiculo
//quantidade de rodas, se dirigi, e descrição

use App\Moto;
use App\Pessoa;

$pessoa = new Pessoa(
  new Moto()
);

var_dump(
  $pessoa
);

/* Adicionar na classe pessoa juridica uma lista de veiculos que ela possui */