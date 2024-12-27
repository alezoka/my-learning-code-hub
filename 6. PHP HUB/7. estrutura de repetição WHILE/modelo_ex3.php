<?php 

$valor_inicial = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
$valor_final = isset($_GET["final"]) ? $_GET["final"] : 0;
$incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : 0;

// Lógica dupla (Minha versão - CORRETO)
while ($valor_inicial < $valor_final) {
    if ($incremento == 0) {
        $valor_inicial++;
        echo $valor_inicial . "</br>";
    }
    else {
        $valor_inicial += $incremento;
        echo $valor_inicial . "</br>";
        if ($valor_inicial > $valor_final) {
            break;
        }
    }

}

while ($valor_inicial > $valor_final) {
    if ($incremento == 0) {
        $valor_inicial--;
        echo $valor_inicial . "</br>";
    }
    else {
        $valor_inicial -= $incremento;
        echo $valor_inicial . "</br>";
        if ($valor_inicial < $valor_final) {
            break;
        }
    }
}

// Lógica única (Minha versão - ERRADO)
/*while ($valor_inicial < $valor_final || $valor_inicial > $valor_final) {
    if ($incremento !== 0 && $valor_inicial < $valor_final) {
        $valor_inicial += $incremento;
        echo $valor_inicial . "</br>";
        if ($valor_inicial > $valor_final) {
            break;
        }
    }
    elseif ($incremento !== 0 && $valor_inicial > $valor_final) {
        $valor_inicial -= $incremento;
        if ($valor_inicial < $valor_final) {
            break;
        }
    }
    elseif ($incremento == 0 && $valor_inicial < $valor_final) {
        $valor_inicial++;
        if ($valor_inicial > $valor_final) {
            break;
        }
    }
    else {
        $valor_inicial--;
        if ($valor_inicial < $valor_final) {
            break;  
        }
    }
}*/

// Lógica única (Correção Chat GPT)
/*while ($valor_inicial != $valor_final) {
    if ($valor_inicial < $valor_final) {
        $valor_inicial += ($incremento == 0) ? 1 : $incremento;
    } else {
        $valor_inicial -= ($incremento == 0) ? 1 : $incremento;
    }
    echo $valor_inicial . "</br>";
}*/