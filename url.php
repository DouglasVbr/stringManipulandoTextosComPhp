<?php

$url = 'https://alura.com.br';

// verifica se a url começa com https
if (str_starts_with($url, 'https')) {

    echo 'É uma url segura!';
} else {
    echo 'Não é uma url segura';
}



echo PHP_EOL; //QUEBRA DE LINHA

if(str_ends_with($url, 'br')){ // verifica se a string termina com br se sim é dominio do brasil caso contrario não é
    echo 'É um domínio do Brasil ';
}else{

    echo 'Não é um domínio do Brasil';
}

echo PHP_EOL;

