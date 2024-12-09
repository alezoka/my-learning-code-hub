<?php

// 2)
/* Ler o ano de nascimento de uma pessoa e dizer se o voto dela é obrigatório ou opcional */


$nome = $_GET["nome"];
$ano = $_GET["ano"];
$idade = date("Y") - $ano;

if ($idade < 16) {
    $tipoVoto = "Você é menor de idade. O voto NÃO é permitido!";
} 
else {
    if (($idade >= 16 && $idade < 18) || ($idade > 65)){
        $tipoVoto = "Você tem $idade anos. Seu voto é OPCIONAL!";
    }
    else {
        $tipoVoto = "Você tem $idade anos, logo, é maior de idade. O voto é OBRIGATÓRIO!";
    }
}

echo $tipoVoto . "<br/><br/>";
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