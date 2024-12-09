<?php

echo "<h3>IF simples</h3>";
$a = 100;
$b = 200;

if($a > $b) {
    $maior = $a;
    echo "O maior número é $maior";
}
else {
    $maior = $b;
    echo "O maior número é $maior";
}

/* 
Essa é uma condicional SIMPLES.
Esse é o único caso onde o operador TERNÁRIO pode substituir o IF
Quando você precisa fazer atribuições em mais de uma variável o ternário não funciona
*/

echo "<h3>Operador Ternário</h3>";
($a > $b) ? $maior = $a : $maior = $b;
echo "O maior número é " . $maior;