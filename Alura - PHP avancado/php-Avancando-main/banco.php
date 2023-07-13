<?php

require_once 'funcoes.php';

$contasCorrentes = [
'234.56.333-11' => [
        'titular' => 'Guilherme',
        'saldo' => 1000
],
'234.56.111-13' => [
        'titular' => 'Maria',
        'saldo' => 100
],
'234.56.222-12' => [
        'titular' => 'Eduardo',
        'saldo' => 20000
    ]
];


$contasCorrentes ['234.56.333-11'] = sacar(
    $contasCorrentes ['234.56.333-11'], valorAsacar:100 );



$contasCorrentes['234.56.333-11'] = depositar(

    $contasCorrentes ['234.56.333-11'],
    1000
);

unset($contasCorrentes['234.56.111-13']);


titularComLetrasMaiuscula($contasCorrentes['234.56.333-11']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>