<?php


/* 1)
Aplique 10% de desconto ao preço de um produto.*/
echo "<br/><h3>Exercício 1</h3>";

$ps5 = 3299;
echo "O desconto de 10% será de ". ($ps5 * 0.10). "<br/>";

# resolução usando o GET
$ps5 = $_GET["preco"];
$ps5 += $ps5 * 0.10;
echo "O preço do PS5 com 10% de desconto será de R$". number_format($ps5, 2, ",", ".");
echo "<br/>";

/* 2)
Mostre qual foi o ano anterior ao ano atual. */
echo "<br/><h3>Exercício 2</h3>";

$ano_atual = $_GET["ano"];
echo "O ano anterior a $ano_atual é ". --$ano_atual;

/* 3)
Permita que o usuário escolha entre somar e multiplicar dois números
*/
echo "<br/><h3>Exercício 3</h3>";

$operacao = $_GET["opcao"];
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

echo $operacao=="soma" ? $numero1+$numero2 : $numero1*$numero2;

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

 /* 5)
 Mostre se um eleitor é obrigado a votar ou não */
 echo "<br/><h3>Exercício 5</h3>";

 // solução 1 (minha)
 $idade = $_GET["idade"];
 $titulo = $_GET["titulo"];
 echo (($idade >= 18) && ($titulo == "sim")) ? "É OBRIGATÓRIO votar!!!":"Caso tenha 16 ou 17 anos, a votação é OPCIONAL. Se for menor que 16, é PROIBIDO VOTAR!!!";

 echo "<br/>";
 // solução 2 (correção)
 $ano_nascimento = $_GET["ano"];
 $idade = 2024 - $ano_nascimento;
 echo "Quem nasceu em $ano_nascimento tem $idade anos <br/>";
 $tipo = ($idade>=18 && $idade<65)?"É OBRIGATÓRIO VOTAR!!":"NÃO É OBRIGATÓRIO VOTAR!!";
 echo $tipo;
 


