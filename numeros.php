<?php


$anoNascimento = '1998';

$idade = 2025 - $anoNascimento;

echo $idade . PHP_EOL;

if($anoNascimento === 1998){ //SAIDA VAI SER NÃO PQ NÃO SÃO IDENTICOS SE FOSSE == SAIRIA SIM!
    echo 'SIM' . PHP_EOL;
}else{
    echo 'NÃO' . PHP_EOL;
}



