<?php

$idadeList = [19, 20, 18, 30, 10, 26];
$idadeList [] = 40; //para adicionar item na lista 
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] .PHP_EOL;
}


// Caso você pegue una lista e queira saber a quantidade nela basta rodar o seguinte comando
//echo count($idadeList);

