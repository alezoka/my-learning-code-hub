<?php

// 1)
/* Ler o ano de nascimento de uma pessoa e dizer se ela pode votar e dirigir */
$nome = $_GET["nome"];
$ano = $_GET["ano"];
$idade = date("Y") - $ano;
if($idade >= 18) {
    $votar = true;
    $dirigir = true;
    echo "$nome, sua idade é $idade anos e você está apto para votar e dirigir!";
} 
else {
    $votar = false;
    $dirigir = false;
    echo "$nome, sua idade é $idade anos e você NÃO apto para votar e dirigir!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <a href="./modelo.html"> Voltar</a>
</body>
</html>

