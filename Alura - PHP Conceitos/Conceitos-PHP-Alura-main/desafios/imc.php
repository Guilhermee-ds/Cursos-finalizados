<?php

$peso = 60;
$altura = 1.;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18 ){
    echo " Abaixo";
}elseif ($imc < 25 ) {
    echo " Dentro";
} else {
    echo " Acima";
}
echo " do recomendado";