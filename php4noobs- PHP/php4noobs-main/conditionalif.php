<?php

/**
 * Aula sobre Condições IF/ELSE
 * 
 * Nessa aula eu explico sobre as Estruturas Condicionais de controle
 * O resultado final é você conseguir fazer checagens para caso algo
 * For Verdadeiro ou Falso, dando um fim diferente oara cada uma das
 * Condições.
 */


 $name = 'CEO.Guilherme';
 $employed = false;
 $age = 21;

 if(($name == 'Guilherme.dev') && $employed) {

    echo "Acesso liberado" . PHP_EOL;

 } else  if (($name == "CEO.Guilherme") || $employed){

    echo "Acesso liberado" . PHP_EOL;

 }else{
    echo "Você não pode entrar" . PHP_EOL;
 }