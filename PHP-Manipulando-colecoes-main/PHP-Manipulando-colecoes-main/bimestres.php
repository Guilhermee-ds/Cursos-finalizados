<?php

$notasBimestre1 =[
    'Guilherme' => 10,
    'Eduardo' => 8,
    'Vinicius' => 9,
    'Jorge' => 0,
    'Roberto' => 7
];

 $notasBimestre2 =[
    'Guilherme' => 10,
    'Eduardo' => 8,
    'Jorge' => 0
];

// Ele retorna os valores que tem no primeiro array porem porem não tem nos proximos arrays (apenas os valores)
 var_dump(array_diff($notasBimestre1, $notasBimestre2));

 
 var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));


 echo "Os alunos faltantes são:" . PHP_EOL;
 $alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
 var_dump(array_keys($alunosFaltantes));

 $nomeAlunos = array_keys($alunosFaltantes);
 $notasAlunos = array_values($alunosFaltantes);
 

 echo "Esse é o nome e a nota dos alunos(a) :" .PHP_EOL;
 var_dump(array_combine($notasAlunos, $nomeAlunos));