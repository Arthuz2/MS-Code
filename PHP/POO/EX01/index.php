<?php

use App\Poo\JuridicaFisica\CpfCnpj;
use App\Poo\JuridicaFisica\PessoaFisica;
use App\Poo\JuridicaFisica\PessoaJuridica;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once './vendor/autoload.php';

// use App\Poo\Pessoa;
// use App\Poo\Carro\Carro;
// use App\Poo\Calculadora;

// $pessoa = new Pessoa('pessoa', '2008-04-28', 'Masculino');
// echo $pessoa->getIdade();

// $carro = new Carro('Supra MK4', 'ABC1234', new DateTimeImmutable('2010-08-10'), 'SUPRA', 'Branco');
// echo $carro->getInfos();

// $calc = new Calculadora(2,"/",2);
// echo $calc->getResultado();

$pf = new PessoaFisica(
  'Fulano',
  '123.456.789-00'
);

$pj = new PessoaJuridica(
  'Di Tal',
  '12.345.678/0001-99'
);

var_dump(
  $pf->documento(),
  $pj->documento()
);