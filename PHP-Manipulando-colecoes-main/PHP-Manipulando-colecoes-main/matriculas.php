<?php

$alunos2023 =[
    'Guilherme',
    'Eduardo' ,
    'Vinicius' ,
];

$novosAlunos =[
    'Roberto',
    'Jorge',
    'nico'
];

//$alunos2024 = array_merge($alunos2023, $novosAlunos);

$alunos2024 = [...$alunos2023,'Bem vindo, Novos Alunos', ...$novosAlunos];
array_push($alunos2024, 'Rodrigo');

var_dump($alunos2024);



 //funcao(...[1, 2, 3]);

//function funcao (int $a, int $b, int $c) {
//}
 