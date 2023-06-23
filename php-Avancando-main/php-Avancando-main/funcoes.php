<?php
function sacar(array $conta,float $valorAsacar) : array 
{

    if ($valorAsacar >$conta['saldo']){
        echo "Você não pode sacar esse valor! " . PHP_EOL;
    } else {
        $conta ['saldo'] -= $valorAsacar;
    }
    return $conta;
}  

// Função de exibir mensagem
 function ExibeMensagem($mensagem) 
{
    echo $mensagem  . '<br>';
}

// Função de deposito
function depositar (array $conta,float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta ['saldo'] += $valorADepositar;
    } else{
        ExibeMensagem ("Depositos precisam ser positivos");
    }
    return $conta;

}

function titularComLetrasMaiuscula(array &$conta) 
{

    $conta['titular'] = strtoupper($conta['titular']);
}

function Exibeconta (array $conta)


{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li> Titular: $titular . Saldo: $saldo}</li>";
}