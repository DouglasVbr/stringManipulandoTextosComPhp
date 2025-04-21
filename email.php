<?php
function geraEmail(string $nome): void
{
    $nome = 'Douglas Vieira';
    $conteudoEmail = <<<'FIM'
        olá, $nome!

        Estamos entrando em contato para
        {motivo do contato}

        {assinatura}

    FIM;

    echo $conteudoEmail;
}

geraEmail('Douglas Vieira');




