<?php

$contasCorrentes = [
'234.56.333-11' => [
        'titular' => 'Guilherme',
        'saldo' => 1000
],
'234.56.111-13' => [
        'titular' => 'Maria',
        'saldo' => 500
],
'234.56.222-12' => [
        'titular' => 'Eduardo',
        'saldo' => 20000
    ]
];
$contasCorrentes ['111.222.333-44'] = [
    'titular' => 'Ederson',
    'saldo' => '2000'
];

foreach ($contasCorrentes as  $cpf => $conta) {
    echo $cpf. " " . $conta['titular']  . PHP_EOL;
}