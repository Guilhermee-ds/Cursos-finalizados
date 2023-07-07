<?php

/**
 * Aula sobre Condições Ternárias
 * 
 * Nessa aula eu explico sobre extruturas Condicionais Ternáriias.
 * Usar operador ternário ajuda na escrita de condições if/else diminuindo
 * para uma única linha. Ou sej, será algo para ser usado quanndo
 * você tem uma fácil comparação e um retorno SIMPLES
 * 
 * Condição ? retorna Verdadeiro : retorno Falso
 */

$age = 19;

echo $age >= 18 
            ? 'Sim, Você é maior de idade'. PHP_EOL
            : 'Você não é maior de idade'. PHP_EOL ;



$name = 'CEO.Guilherme';

echo $name != 'CEO.Guilherme'
        ? 'Sim, é diferente' . PHP_EOL 
        : 'Não é diferente' . PHP_EOL ;