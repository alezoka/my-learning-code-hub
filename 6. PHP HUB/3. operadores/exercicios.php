<?php

/* 1)
Aplique 10% de desconto ao preço de um produto.*/

$ps5 = 3299;
echo "O desconto de 10% será de ". ($ps5 * 0.10). "<br/>";

# resolução usando o GET
$ps5 = $_GET["preco"];
$ps5 += $ps5 * 0.10;
echo "O preço do PS5 com 10% de desconto será de R$". number_format($ps5, 2, ",", ".");
echo "<br/>";

/* 2)
Mostre qual foi o ano anterior ao ano atual. */

$ano_atual = $_GET["ano"];
echo "O ano anterior a $ano_atual é ". --$ano_atual;