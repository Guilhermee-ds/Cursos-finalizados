<?php

/**
 * 
 * Aula sobre Funções
 * 
 * Nos finalmente do curso, vamos falar sobre FUNÇÕES!!!
 * A ideia de uma função é criar um bloco de códigos reutilizável
 * aonde você pode aplicar tanto para ultilizar em outras partes do código
 * quanto para melhorar sua legibilidade.
 * 
 * Sintaxe de criação de uma função:
 * 
 *
 *  function NOME_DA_FUNÇÃO(argumentos) {}
 * 
 */


 function  sendMessage(string $nickname, string $message): string
 {
    return "[" . date(format:'Y-m-d H:i:s') . "] $nickname" . strtoupper ($message) . PHP_EOL;
    
 }

 $result = sendMessage(nickname:'CEO.Guilherme ', message:' Hi everyone');

 echo $result;