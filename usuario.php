<?php
$nome = 'Douglas Vieira';
$email = ' douglascanal1998@gmail.com ';
$senha = 'Iaomiofaile06!';

echo mb_strlen($senha) . PHP_EOL;
if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;

echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome:' . $nome . PHP_EOL;
echo 'SobreNome:' . $sobrenome . PHP_EOL;

$csv = 'Douglas Vieira, 26, douglascanal1998@gmail.com';
var_dump(explode(',', $csv));

echo trim($email) . PHP_EOL;

