<?php

# atribuindo expressões
$n1 = 10;
$n2 = 20;
$numeros = $n1 + $n2;


# fazendo reatribuições #1 
$soma = $numeros + 1;
$sub = $numeros - 1;
$mult = $numeros * 2;
$div = $numeros / 2;
$mod = $numeros % 2;
$concat = $numeros. + " resultado";

# fazendo reatribuições # 2 (usando operadores de atribuição)
$soma += 1;
$sub -= 1;
$mult *= 2;
$div /= 2;
$mod %= 2;
$concat .= " resultado";


# usando operadores de INCREMENTO
$numeros ++;
echo $numeros;
/*Aqui você não precisa fazer a reatribuição e nem usar operadores de atribuição.
Basta usar o operador de incremento de forma direta na variável e printar */

# pré incremento -> incrementa +1 ANTES da variável ser usada
++$numeros;

# pós incremento -> incrementa +1 APÓS a variável ser usada
$numeros++;

# pré decremento -> tira -1 ANTES da variável ser usada
--$numeros;
/*caso você queira ver o decremento de forma imediata, o ideal é usar o pré decremento 
porque ele vai tirar ou acrescenter 1 ANTES mesmo da variável ser usada, garantindo que você visualize essa operação*/

# pós decremento -> tira -1 APÓS a variável ser usada
$numeros--;
/*No pós decremento, ao printar pode parecer que não mudou nada, mas o decremento ocorreu após você ter printado... 
isso significa que se você printar a variável novamente, ela vai ter decrementado ou incrementado*/

