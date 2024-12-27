<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div>
        <form method="get" action="modelo_correcao_ex2.php">
            <?php
                $contador = 1;
                while ($contador <= 5) {
                    echo "Valor $contador: <input type='number' name='v$contador' max='100' min='0' value='0'></br>";
                    $contador++;
                }
            ?>
            <input type="submit" value="Enviar!" class="botao">
        </form>
    </div>
</body>
</html>