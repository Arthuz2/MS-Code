<?php

require_once './vendor/autoload.php';

//criar um metodo na class pessoa ,com o nome q quiser, essa pessoa ira precisar saber se ela sabe dirigir;
//esse metodo tem que retornar um boleano
//trator,moto e carro
//interface chamada veiculo
// quantidade de rodas, se dirigi, e descrição

use App\Veiculo\Carro;
use App\Veiculo\Trator;
use App\Veiculo\Moto;
use App\Pessoa\PessoaFisica;
use App\Pessoa\PessoaJuridica;

$pf = new PessoaFisica(
  'Fulano',
  '123.456.789-00',
  new Trator
);

$pj = new PessoaJuridica(
  'Di tal',
  '12.345.678/0001-99',
  new Moto,
  new Carro,
  new Carro,
  new Trator
);

var_dump(
  $pf->sabeDirigir(),
  $pj->getVeiculos()
);

/* Adicionar na class PessoaJuridica uma lista de veiculos que ela possui */