<?php

// 1.3)
/* Mostrar na tela uma contagem regressiva de 10 até 0, de 2 em 2. */

$contador = 10;
while ($contador >= 0) {
    echo $contador . "</br>";
    $contador -= 2;
}

// Como não dá pra fazer o operador incremental -- diminuir de 2 em 2, usei a reatribuição normal.