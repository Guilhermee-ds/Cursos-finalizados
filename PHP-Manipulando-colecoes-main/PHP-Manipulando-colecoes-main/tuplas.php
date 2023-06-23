<?php


$dados = [
    'nome' =>'Guilherme', 
    'idade' =>19, 
    'nota' =>10
];

//list($nome, $nota, $idade) = $dados;

extract($dados);

var_dump($nome, $nota, $idade);