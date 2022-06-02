<?php

require_once "vendor/autoload.php";

Use Wead\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('06673-785');

print_r($resultado);