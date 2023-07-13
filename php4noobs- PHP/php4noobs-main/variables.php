<?php

/**
 * Aula sobre Variáveis
 * 
 * Nessa aula eu explico como delcarar variávies no Php
 * e quais regras você tem que seguir para que isso aconteça.
 */

 $name = "Guilherme";

echo $name . PHP_EOL;


$age = 19;

echo $age . PHP_EOL;

$data = [
   'name' => 'Guilherme',
    'age' =>'19',
    'city' =>'São Paulo',
    'status' =>'full-stack Developer'
];

echo $data['status'] . PHP_EOL;

define('code', 'https:/code.devs.com');

echo code;