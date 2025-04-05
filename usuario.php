<?php

$email = 'douglascanal1998@gmail.com';
$senha = 'Iaomiofaile06!';

$posicaoDoArroba = strpos($email, '@', '16');

echo substr($email, '0', $posicaoDoArroba) . PHP_EOL;

echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

