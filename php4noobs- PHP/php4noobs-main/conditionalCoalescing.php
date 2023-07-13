<?php

/**
 * Aula sobre Condições de Coalescência Nula
 * 
 * Nessa aula eu explico  sobre Coalescência nula, onde você faz uma  checagem.
 * de uma variavel e vê se há um valor dentro da mesma, caso não você já retorna
 * um valor padrão.
 * 
 * ValorPredefinido ?? retorno caso não exista valor;
 * 
 * isset(valorPredefinido) ? valorPredefinido : retorno caso não exista valor
 * 
 */

 $user = [
    'name' => 'CEO.Guilherme',
    'age' => 19,
    'status' => 'Fullstack - Developer'
 ];

 echo $user ['name'] ?? 'Guilherme.Stage';
 //echo isset($user['name']) ? $user ['name'] : 'Guilherme.Dev';