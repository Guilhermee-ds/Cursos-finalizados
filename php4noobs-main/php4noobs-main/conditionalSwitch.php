<?php


/**
 * Aula sobre Condições IF/ ELSE
 * 
 * Nessa aula eu explico sobre Estruturas Condicionais de Casos
 * A ideia é fazer condições com uma lista pré definida de valore
 * que podem retornar Verdadeiro, tendo uma única opção para retornar
 * falso, sendo ela a default: (padrão).
 * 
 */

 $name = 'CEO.Guilherme';
switch($name) {
    case 'Guilherme';
        echo 'Você está cadastrado, pode entrar!';
        break;

    case 'CEO.Guilherme';
        echo 'Você tem acesso livre, pode entrar';
        break;
    default:
        echo 'Você não está na cadastrado!';
 }