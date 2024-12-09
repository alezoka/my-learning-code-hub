<?php

// Também chamadas de condicionais compostas

$idade = 20;

if ($idade < 16) {
    $tipoVoto = "não vota";

}
else {
    if ($idade >= 16 && $idade < 18) {
        $tipoVoto = "voto opcional";
    }
    else {
        $tipoVoto = "obrigatorio";
    }
}