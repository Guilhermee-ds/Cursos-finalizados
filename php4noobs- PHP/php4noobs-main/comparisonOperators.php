<?php


/**
 * Aula  sobre Operadores de Comparação
 * 
 * Nessa aula eu explico como Ultilizar operadores de comparação
 * onde você conseguirá retornar expressões boleanas o seu código
 * 
 * Operadores: == , ===, !=, !===
 * Operadores = > , >=, <, <=
 * 
 */

// Operador de Igualdade  ==

 var_dump(value: 1 == 1);
 var_dump(value: 1 == 2);

 $password = 'secret';
var_dump(value:$password == 'secret123');

// Operador de Diferença !=
 
 var_dump(value: 1 != 2);
 $password = 'teste';
 var_dump(value:$password != 'secret123');
 
// Operador de Idêntico ====

 var_dump(value: '1' === 1);
 var_dump(value: 1 === 1);

// Operador Não Idêntico !==

  var_dump(value: '1' !== 1);
  var_dump(value: 1 !== 1);

// Operador de Maior

 $number = 6;
 var_dump(value:$number > 6);

// Operador de Maior ou igual

 $number = 8;
 var_dump(value:$number >= 6);

// Operador de Menor

 $number = 7;
 var_dump(value:$number < 7);

// Operador de Menor ou igual

 $number = 2;
 var_dump(value:$number <= 7);

