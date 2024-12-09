<?php
$a = 10;
$b = 15;

# maior
//echo $a > $b;

# menor
//echo $a < $b;

# maior ou igual
//echo $a >= $b;

# menor ou igual
//echo $a <= $b;

# diferente
//echo $a <> $b; // 1º forma
//echo $a != $b; // 2º forma

# igual
//echo $a == $b;

# idêntico
//echo $a === $b;

/*A diferença do == para === é que:

== -> testa se o conteúdo da variável A é igual o conteúdo da variável B; se a variável A for o inteiro 3 e a variável B for a string 3, ainda assim o resultado será VERDADEIRO (1), ou seja, ambos são iguais

=== -> também testa se o conteúdo da variável A é igual o conteúdo da variável B; se a variável A for o inteiro 3 e a variável B for a string 3 o resultado será NEGATIVO (VAZIO), ou seja, mesmo sendo 3, como os valores são de TIPOS diferentes, o === não classificou como idênticos... para ser verdadeiro, tanto o valor quanto o tipo devem ser iguais */

# operador TERNÁRIO expressão?valor_verdadeiro:valor_falso
//echo $a > $b?$a:$b;

# é possível fazer atribuições usando operações unárias também
$maior = $a>$b ? $a:$b; // situação 1

/*nesse caso, caso A seja maior que B, $maior vai receber o valor de A (verdadeiro), e se não for maior, então $maior vai receber o valor de B (falso/vazio) */
/*essa operação unária consegue substituir um algoritmo de IF, que faria a mesma coisa... lembra uma list comprehension*/

$r = $a>$b ? $a+$b:$a-$b; // situação 2

$media = 8.0;
$situacao = $media>7 ? "aprovado":"recuperação";  // situação 3
echo $situacao;
echo "<br/>";

/*você só pode usar o operador ternário caso as variáveis da expressão sejam as mesmas das variáveis envolvidas na operação verdadeiro e falso (as que ficam entre :)  */

/*o operador ternário não substitui a condicional IF, porque o unário só consegue fazer comparações BÁSICAS entre 2 coisas */

# igual x identico
$a = 3;
$b = "3";
$teste1 = $a == $b ? "A variável A é igual a variável B":"A variável A não é igual a variável B";
$teste2 = $a === $b ? "A variável A é igual a variável B":"A variável A não é igual a variável B";
echo $teste1 . " -> Operador IGUAL (==)<br/>";
echo $teste2 . " -> Operador IDÊNTICO (===)";