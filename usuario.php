<?php

$email = 'douglascanal1998@gmail.com';
$senha = 'Iaomiofaile06!';

echo mb_strlen($senha) . PHP_EOL;
if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;

echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

