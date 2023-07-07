<?php

/**
 * Aula sobre Laço de Repetição FOR
 * 
 * Nessa aula eu explico sobre os Laço de repetição for de um jeito bem 
 * simples de se entender
 * 
 * 
 * for(valor inicial; condição; incremento/decremento){}
 *                              ++             --
 */

echo "Guilherme está prestando atenção na aula!" . PHP_EOL;

 for($borrachada = 0; $borrachada <= 7; $borrachada++ ) {
    echo "O Guilherme tomou " .$borrachada. " borrachada do amiguinho!" . PHP_EOL;
 }

 echo "O Guilherme está extremamente bravo com o amiguinho" . PHP_EOL;



 // Fazendo uma tabuada com For
 $tabuada = 7;
 for($i = 1; $i <=10; $i++) {
    echo "$tabuada x $i = " . ($tabuada * $i) . PHP_EOL;
 }


