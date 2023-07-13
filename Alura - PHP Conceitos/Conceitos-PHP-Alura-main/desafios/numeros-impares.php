// Faça um programa que mostre todos os números ímpares de 0 à 100.

<?php

for($contador = 1; $contador < 100; $contador ++) {
    if ($contador % 2 != 0 ) {
        echo "$contador" . PHP_EOL;
    }
}