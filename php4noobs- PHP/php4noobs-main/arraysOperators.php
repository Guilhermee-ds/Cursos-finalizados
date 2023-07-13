<?php
/**
 * Aula sobre Operadores de Arrays
 * 
 * Nessa aula eu explico como ultilizar operadores para trabalhar 
 * com arrays. Os operadores serverm tanto para junção quanto para 
 * a checagem de arrays
 * 
 * Operadores: + = 
 */


// Operadores de União + ==


 $user = [
    'name' => 'Guilherme',
    'age' => 19

 ];

 $workplace = [
    'companyName' => 'Gui.DEV Company',
    'role' => 'Full-stack Developer'
 ];

 $all = $user + $workplace;

 print_r($all);


// Operadores de igualdade ==

$userOne = [
    'name' => 'Guilherme',
    'age' => 19
 ];

 $userTwo = [
    'name' => 'CEO.dev',
    'age' =>30
 ];
 var_dump(value: $userOne == $userTwo);


// Idéntico

 $userOne = [
 'name' => 'Guilherme',
 'age' => 19
 ];

 $userTwo = [
 'name' => 'CEO.dev',
 'age' =>30
 ];
 var_dump(value: $userOne === $userTwo);

 
// Diferença

$userOne = [
 'name' => 'Guilherme',
 'age' => 19
 ];
   
 $userTwo = [
 'name' => 'CEO.dev',
 'age' =>30
 ];
 var_dump(value: $userOne != $userTwo);

//  Não Idêntico
 $userOne = [
 'name' => 'Guilherme',
 'age' => 19
 ];
   
 $userTwo = [
 'name' => 'Guilherme',
 'age' =>10
 ];
 var_dump(value: $userOne !== $userTwo);


