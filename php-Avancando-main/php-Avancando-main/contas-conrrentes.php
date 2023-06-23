<?php

$conta1 = [
    'titular' => 'Guilherme',
    'saldo' => 1000
];
$conta2 =[
    'titular' => 'Maria',
    'saldo' => 500
];
$conta3 =[
    'titular' => 'Eduardo',
    'saldo' => 20000
];
    
$contasCorrentes = [$conta1, $conta2, $conta3];


for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes [$i] ['titular'] . PHP_EOL;
}
