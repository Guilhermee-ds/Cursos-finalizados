<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se estiver apartir de 18 anos ou" . PHP_EOL;
echo "a partir de 16 anos acompanhado" . PHP_EOL;


if ($idade == 18 || $idade > 18) {  // as duas || e o or é significa ou.
    echo "Você tem $idade anos pode entrar sozinho ";
}

else {
    if ($idade ==16 and $numeroDePessoas >1){
        echo "Você tem $idade anos, está com acompanhado (a), então pode entrar.";
    } else{
        echo "Você tem $idade anos. Você não pode entrar";
        }

}

echo PHP_EOL;
echo "Obrigado!";
