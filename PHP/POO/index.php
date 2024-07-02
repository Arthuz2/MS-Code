<?php

require_once './vendor/autoload.php';

use App\Poo\Pessoa;

$pessoa = new Pessoa('pessoa', '2008-04-28', 'Masculino');

echo $pessoa->getIdade();