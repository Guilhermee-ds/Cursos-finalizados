<?php

/**
 * 
 * Aula sobre Argumentos em Scripts PHP
 * 
 * Saber como criar scripts em PHP pode te salvar um bom tempo
 * enquanto faz algum tipo de tarfa cotidiana, porém saber usar
 * seus argumentos de forma simples, pode ajudar ainda mais.
 * 
 * Execultando script sem Aragumentos:
 * php argumentsScript.php
 * 
 * Execultando script com argumentos:
 * 
 * php arguemntScript.php variavel1 variavel2
 */


$age=$argv[1];
 
if(!isset($argv[1])){
    die('preencha um argumento');
}


if($age >= 18){
    echo "Pode entrar!";
} else{
    echo "Você tem . $age . não pode entrar" .PHP_EOL;
}