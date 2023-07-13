<?php

/**
 * 
 * Aula sobre Laços de Repetição WHILE, onde
 * você só precisa que a condição seja verdadeira para que
 * o laço continue repetindo
 * 
 * 
 * while(condição) {}
 * 
 */

$estouEmpregado = true;
$commitsZoados = 0;
 
 while($estouEmpregado) {
    echo "Eu fiz " . $commitsZoados . " Commits zoados e meu superior não curtiu" . PHP_EOL;
    $commitsZoados++;

    if($commitsZoados == 8) {
        $estouEmpregado = false;
        echo "Pronto agora estou desempregado, tambem conhecido como freelancer" . PHP_EOL;
    }

 }

 // While em um teste de um jogo RPG

 $healthPoints = 100;
 $maxHealthPoints = 100;


 $monterAttackDamage = 5;


 while ($healthPoints > 0) {
    echo "HP: $healthPoints/$maxHealthPoints" . PHP_EOL;
    echo "Personagem atacando! -$monterAttackDamage de HP" . PHP_EOL;

    $healthPoints -= $monterAttackDamage;

    if($healthPoints<= 0) {
        echo "Personagem morreu infelizmente" . PHP_EOL;
    }


 }
 