<?php
$notas = [
    [
    'Aluno' => 'Guilherme',
    'nota' => 10,
    ],
[
    'Aluno' => 'Luiz',
    'nota' => 9,
    ],
[
    'Aluno' => 'Eduardo',
    'nota' => 4,
    ]
];


function ordenaNotas (array $nota1, array $nota2) : int
{
    return $nota1 ['nota'] <=> $nota2['nota'];
    
}

usort($notas,'ordenaNotas');
var_dump($notas);