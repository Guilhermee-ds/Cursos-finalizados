<?php

/**
 * Aula sobre Operadores Lógicos
 * 
 * Nessa aula eu explico como ultilizar operadores lógicos, onde
 * tudo é convertido para boleano antes de checar a expressão
 * 
 * Operadores :  && || ^ !
 */

// Operador 'E' AND &&
 
 $empregado = true;
 $homeOffice = true;

 var_dump(value:$empregado && $homeOffice);


// Operador 'OU' OR ||

 $empregado = true;
 $homeOffice = false;

 var_dump(value:$empregado || $homeOffice);


// Operador 'OU Exclusivo' XOR ^

 $empregado = true;
 $homeOffice = false;

 var_dump(value:$empregado  ^ $homeOffice);


// Operador 'Não' NOT !

 $empregado = true;

 var_dump(value:!$empregado); // Colocando o ! na frente va variavel eu consigo modificar se ele é true or false.

