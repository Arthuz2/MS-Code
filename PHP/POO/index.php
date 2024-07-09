<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once './vendor/autoload.php';

// use App\Poo\Pessoa;
// use App\Poo\Carro\Carro;
use App\Poo\Calculadora;

// $pessoa = new Pessoa('pessoa', '2008-04-28', 'Masculino');
// echo $pessoa->getIdade();

// $carro = new Carro('Supra MK4', 'ABC1234', new DateTimeImmutable('2010-08-10'), 'SUPRA', 'Branco');
// echo $carro->getInfos();

$calc = new Calculadora("120+15-5*2");

echo "<pre>";
print_r($calc->calcular());
echo "</pre>";
exit;