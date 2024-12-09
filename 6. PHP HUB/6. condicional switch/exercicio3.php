<?php

$estado = isset($_GET["estados"]) ? $_GET["estados"] : 0;

switch ($estado) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
    case 7:
        echo "Você é do estado $estado e é da região NORTE";
        break;
    case 8:
    case 9:
    case 10:
    case 11:
    case 12:
    case 13:
    case 14:
    case 15:
    case 16:
        echo "Você é do estado $estado e é da região NORDESTE";
        break;
    case 17:
    case 18:
    case 19:
    case 20:
        echo "Você é do estado $estado e é da região CENTRO-OESTE";
        break;
    case 21:
    case 22:
    case 23:
    case 24:
        echo "Você é do estado $estado e é da região SUDESTE";
        break;
    case 25:
    case 26:
    case 27:
        echo "Você é do estado $estado e é da região SUL";
        break;
    default:
        echo "Opção inválida!";
}

echo "<br/><a href='javascript:history.go(-1)'> Voltar<a/>";
