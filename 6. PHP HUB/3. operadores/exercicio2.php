<?php
/* 2)
Mostre qual foi o ano anterior ao ano atual. */
echo "<br/><h3>Exercício 2</h3>";

$ano_atual = $_GET["ano"];
echo "O ano anterior a $ano_atual é ". --$ano_atual;