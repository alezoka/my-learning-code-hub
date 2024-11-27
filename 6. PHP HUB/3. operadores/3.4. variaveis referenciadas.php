<?php

# forma simples
$a = 10;
$b = $a;
$b += 5;
echo "<h2>Variáveis ATRIBUÍDAS</h2><br/>";
echo "A variável A vale $a". "<br/>";
echo "A variável B vale $b". "<br/>";
/* aqui, o valor de A será 10 e não vai mudar. 
Só o valor de B que vai mudar */

# forma referenciada
/*Usar um &antes de uma variável que está sendo atribuída irá referenciá-la na variável atual 
nisso, elas vão passar a estarem INTERLIGADAS:
a variável B vai ter um valor determinado e, como ela está ligada com a variável A, a mesma também vai ter o mesmo valor de B */
$a = 5;
$b = &$a;
$b += 3;
echo "<h2>Variáveis REFERENCIADAS</h2><br/>";
echo "A variável A vale $a". "<br/>";
echo "A variável B vale $b";
/* aqui, o valor de A será IGUAL o de B, mesmo que o valor de A tenha começado diferente de B...
como essas 2 variáveis estão referenciadas (INTERLIGADAS), ambas terão o mesmo valor no final das contas*/
