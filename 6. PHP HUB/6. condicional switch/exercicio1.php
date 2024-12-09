<?php

// 1)

/* Receber o input do usuário, contendo o número e a opção de qual operação ele quer fazer. Fazer operação de dobro, cubo ou raiz quadrada, baseado na escolha do usuário. */

$numero = isset($_GET["num"]) ? $_GET["num"] : 0;
$operacao = isset($_GET["operacao"]) ? $_GET["operacao"] : 1; // se não passar nenhuma operação, será a primeira que é de dobro

switch ($operacao){
    case 1:
        $resultado = $numero * 2;
        break;
    case 2:
        $resultado = $numero * 5;
        break;
    case 3:
        $resultado = sqrt($numero);
}

echo "O resultado da operação solicitada foi <span class='foco'>$resultado</span><br/>";

echo "<a href='modelo.html' class='botao'>Voltar</a>";

// A condicional switch pega o value="" do formulário html e usa esse número e o associa a cada case
// case 1 = se refere ao elemento de value="1", que é Dobro nesse caso. E assim por diante. Se o value não está na mesma ordem dos case, ou seja, começando em 1...2...3 e etc, o código não irá funcionar direito.
?>

