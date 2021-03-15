<?php

use Xcris\DigitalCep\Search;

require_once "vendor/autoload.php";

$busca = new Search();

$resultado = $busca->getAddressFromZipeCode('01001000');

print_r($resultado);
