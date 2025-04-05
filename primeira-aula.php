<?php

$nome = "Douglas Vieira";

$ehDaMinhaFamilia = str_contains($nome, 'Vieira');

if ($ehDaMinhaFamilia){
    echo "\n$nome é da minha família\n" . PHP_EOL;
}else{
    echo "\n$nome  não é da minha família\n" . PHP_EOL;
}

