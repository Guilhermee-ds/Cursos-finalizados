<?php

$notas =[
   'First year' => 10,
   'Second  year' => 8,
   'Third year' => 9,
   'Fourth year' => 0
];

arsort ($notas);
var_dump($notas);

if (is_array($notas)){
   echo "Yes, this is one array!"  . PHP_EOL;
}

var_dump(array_is_list($notas));


echo "First year has note: " . PHP_EOL;
var_dump(isset($notas['First year']));
//var_dump(array_key_exists('First year', $notas));

echo "Someone got 10 ?" .PHP_EOL;
var_dump(in_array(10,$notas, true));

echo "who took 10?" . PHP_EOL;
echo array_search(10,$notas), true;

/**
 * Array_key_exists = Verifica se o array existe.
 * 
 * is_array =  Verifica se o valor existe.
 * 
 * isset = verifica se a chave exite e não é nula.
 */