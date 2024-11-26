<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com PHP</title>
    <style>
        h2 {
            color: blue;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>
    <?php
        $mensagem = '<h2>Olá Mundo!<h2>';
        // echo $mensagem;
        /* echo mensagem;*/
        # echo mensagem;
    ?>
    <?php
        $mensagem = "Parágrafo onde eu vou<br>pular de linha!";
        echo $mensagem;
    ?>

    <h1>Este é um teste onde <?php # echo 'insiro um comentário php';?> dentro da tag h1 </h1>
    <?php
        echo 'Printando uma mensagem diretamente <strong>SEM</strong> variáveis';
    ?>
</body>
</html>

