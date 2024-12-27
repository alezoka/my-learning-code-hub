<?php

$c = 1;
while ($c <= 20) {
    echo "$c";
    break; //esse break vai impedir que o while continue sendo executado
    $c++;
    continue; // esse continue faz o código parar e voltar para o começo do while 
}

// break e continue são duas formas de INTERROMPER um loop while no php