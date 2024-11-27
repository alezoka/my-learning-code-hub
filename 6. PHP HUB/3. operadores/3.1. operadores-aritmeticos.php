<?php

# operações aritméticas
$input1 = 10;
$input2 = 10;

# soma
$soma = $input1 + $input2;
echo "A soma entre $input1 e $input2 é igual a $soma". "<br/>";

# subtração
$sub = $input1 - $input2;
echo "A subtração entre $input1 e $input2 é igual a $sub". "<br/>";

# multiplicação
$mult = $input1 * $input2;
echo "A multiplciação entre $input1 e $input2 é igual a $mult". "<br/>";

# divisão
$div = $input1 / $input2;
echo "A divisão entre $input1 e $input2 é igual a $div". "<br/>";

# módulo
$mod = $input1 % $input2;
echo "O resto da divisão entre $input1 e $input2 é igual a $mod". "<br/>";

# operações direto dentro de strings
echo "A soma é ". ($input1 + $input2). "<br/>"; 

# ordem de precedência
echo $input1 + $input2 * 5; // resultado: 60
echo "<br/>";
echo ($input1 + $input2) * 5; // resultado: 100

echo "<br/>";
# calculando a média
$nota1 = 7.5;
$nota2 = 9.0;
$media = ($nota1 + $nota2) / 2;
echo $media;

echo "<br/>";
# fazendo o usuário fazer input de valores na URL
/*para fazer o input, você deve inserir os valores (exemplo: ?a=5&b=10) após a extensão do arquivo, na URL do localhost, nesse formato:
    http://localhost:8000/operadores.php?a=5&b=10
Feito isso você faz o código nas linhas abaixo */

$input1 = $_GET["a"];
$input2 = $_GET["b"];
echo "<h2>Valores recebidos:</h2> $input1 e $input2". "<br/>";
echo "A soma entre $input1 e $input2 é igual a $soma". "<br/>";
echo "A subtração entre $input1 e $input2 é igual a $sub". "<br/>";
echo "A multiplciação entre $input1 e $input2 é igual a $mult". "<br/>";
echo "A divisão entre $input1 e $input2 é igual a $div". "<br/>";
echo "O resto da divisão entre $input1 e $input2 é igual a $mod". "<br/>";
echo "A média entre $input1 e $input2 é igual a ". ($input1 + $input2) / 2;