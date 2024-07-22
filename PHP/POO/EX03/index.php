<?php

use App\Cliente\Cliente;
use App\Produto\Cama;
use App\Produto\Geladeira;

require_once('./vendor/autoload.php');

/* Em um sistema de venda, sempre que o produto for móveis, o cliente ganha 10% de desconto.
Crie um interface que obrigue a classe a ter um método que retorne se o produto é móveis ou não. */

$cliente = new Cliente(
  new Geladeira()
);

var_dump($cliente->temDesconto());