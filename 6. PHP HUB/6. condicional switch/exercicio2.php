<?php

// 2)
/* Ler o dia da semana (2-7) e mostrar se precisa ir ou não para a escola. */

$dias_semana = isset($_GET["dias"]) ? $_GET["dias"] : 0;

switch ($dias_semana) {
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
        echo "Segunda a Sexta é dia de ir pra escola!!";
        break;
    case 7:
    case 8:
        echo "Sábado e Domingo dia de descansar!";
        break;
    default:
        echo "Dia inválido"; // usei um default aqui, porque no ternário ali em cima eu usei o valor O caso não fosse escolhido nenhum número... e pra cair no default eu tive que tirar o atributo checked da caixa input lá no html
}

echo "<br/><a href='javascript:history.go(-1)'> Voltar<a/>";
// esse código javascript volta 1 página no histórico de navegação