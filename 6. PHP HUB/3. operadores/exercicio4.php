<?php

/* 4)
Mostre a situação de um aluno, de acordo com a sua média obtida
 */
echo "<br/><h3>Exercício 4</h3>";

$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];
 $media = ($nota1+$nota2) / 2;
 $resultado = ($media>=6)?"APROVADO":"REPROVADO";
 echo "O aluno está $resultado <br/>"; // forma 1 -> operador unário atribuído em uma variável
 echo "O aluno está ". (($media>=6)?"APROVADO":"REPROVADO"); // forma 2 -> operador unário usado direto no echo (tem que colocar a expressão inteira entre parênteses)
