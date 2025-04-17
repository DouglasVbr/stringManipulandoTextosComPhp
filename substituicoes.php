<?php

$texto = 'Texto com qualquer coisa poxa e caramba';
echo str_replace(
        ['poxa', 'caramba'],
        ['p', 'c'], // so pega o poxa pq ta em array o outro ele anula ou seja não vai ser mostrado
        $texto
    ) . PHP_EOL;


echo strtr($texto, 'poxa', '****@') . PHP_EOL;
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL;
