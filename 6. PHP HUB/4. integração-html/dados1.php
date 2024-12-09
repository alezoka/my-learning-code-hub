<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <div>
        <?php 
            // EXERCÍCIO 1
            $valor= $_GET["numero"];
            $raiz = sqrt($valor);
            echo "A raiz quadrada de $valor é " . number_format($raiz, 2);
        ?>
        <a href="./exercicio2.php"> Voltar</a>
    </div>
    
</body>
</html>

