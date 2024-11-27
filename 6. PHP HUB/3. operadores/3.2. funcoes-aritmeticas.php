<?php

$valor1 = $_GET["x"];
$valor2 = $_GET["y"];
$valor3 = $_GET["z"];

# abs -> valor absoluto
echo "O valor absoluto de $valor2 é ". abs($valor2). "<br/>";

# pow -> potenciação
echo "O valor $valor1<sup>$valor2</sup> é ". pow($valor1, $valor2). "<br/>";

# sqrt -> raiz quadrada
echo "A raiz quadrada de $valor1 é ". sqrt($valor1). "<br/>";

# round -> arredondar
/*
segue as regras de arredondamento da matemática: se for menor que 5, arredonda pra baixo; se for 5 ou maior que 5, arredonda pra cima 
*/
echo "O valor de $valor3 arredondado é ". round($valor3). "<br/>";

# ceil -> arredondar pra cima SEMPRE
echo "O valor de $valor3 arredondado pra CIMA é ". ceil($valor3). "<br/>";

# floor -> arredondar pra baixo SEMPRE
echo "O valor de $valor3 arredondado pra BAIXO é ". floor($valor3). "<br/>";

# intval -> pega a parte inteira de um número REAL
echo "A parte inteira de $valor3 é ". intval($valor3). "<br/>";

# number_format -> formata um número em formato monetário
echo "O valor de $valor1 em moeda é ". number_format($valor1, 2, ",", ".");

/*
arg 1 = o valor que vai ser formatado
arg 2 = a quantidade de casas decimais após a vírgula
arg 3 = o sinal que vai delimitar o valor inteiro do decimal (vírgula ou ponto)
arg 4 = o sinal que vai ser o separador de milhar
*/


