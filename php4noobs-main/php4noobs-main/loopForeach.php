<?php

/**
 * 
 * Aula sobre laços de Repetição ForEach
 * 
 * Nessa aula eu explico sobre o laço de repetição ForEach, onde
 * você passará algum dado que seja iteravel como uma stdClass ou 
 * array, podendo separar por chave e valor.
 * 
 * 
 * foreach(dadoIteravel as dados) {}
 * 
 */


 $users =[
    [
    'name' =>'CEO.Guilherme',
    'age' => 19,
    'employeed' => true
    ],
     
    [
    'name' =>'Dev.Guilherme',
    'age' => 18,
    'employeed' => true
    ],

    [
    'name' =>'Dev.Junir',
    'age' => 17,
    'employeed' => true
    ],

    [
    'name' =>'Dev.pleno',
    'age' => 22,
    'employeed' => true
    ],
];

 foreach($users as $key => $value){

    echo $key . " " . $value['name'] . PHP_EOL;

 }
 

 $user = new stdClass;

 $user -> name = "Guilherme.dev";
 $user -> age = 19;

 foreach($user as $key => $value) {
    echo $key . " " . $value . PHP_EOL;
 }