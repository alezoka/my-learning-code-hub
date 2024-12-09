<?php 

// 3)
/* Ler 2 notas de um aluno. Se a média for maior que 6, ele está aprovado. Se for entre 5 e 6, ele está em recuperação. Se for menor que 5, ele está reprovado. */

$nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
$nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
$media = ($nota1 + $nota2) / 2;

if ($media < 5){
    echo "A média foi $media. O aluno está REPOVADO!";
}
elseif ($media >= 5 && $media < 7) {
    echo "A média foi $media. O aluno está EM RECUPERAÇÃO!";
}
else {
    echo "A média foi $media. O aluno está APROVADO!";
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
    <a href="./modelo2.html"> Voltar</a>
</body>
</html>