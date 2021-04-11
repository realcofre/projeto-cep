<?php 

require_once "vendor/autoload.php";

use RenatoAlexandre\ProjetoCEP\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('62930000');

print_r($resultado);