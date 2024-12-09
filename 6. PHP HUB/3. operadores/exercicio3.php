<?php

/* 3)
Permita que o usuário escolha entre somar e multiplicar dois números
*/
echo "<br/><h3>Exercício 3</h3>";

$operacao = $_GET["opcao"];
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

echo $operacao=="soma" ? $numero1+$numero2 : $numero1*$numero2;