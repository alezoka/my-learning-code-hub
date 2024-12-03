<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            $valor= $_GET["numero"];
            $raiz = sqrt($valor);
            echo "A raiz quadrada de $valor é " . number_format($raiz, 2);
        ?>
        <a href="./exercicios.php"> Voltar</a>
    </div>
    
</body>
</html>

