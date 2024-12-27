<!--
3)
Criar um contador personalizável, que tenha um valor de início e um valor final e uma opção de QUANTO EM QUANTO contar. O contador deve exibir os valores na tela, de acordo com o incremento escolhido pelo usuário. Caso o valor de início seja MAIOR que o valor final, o programa deve fazer uma contagem regressiva.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <div>
        <form method="get" action="modelo_ex3.php">
            Início: <input type="number" name="inicio"></br>
            Final: <input type="number" name="final"></br>
            Incremento: <input type="number" name="incremento" value="0"></br>
            <input type="submit" class="botao" value="Enviar!">
        </form>
    </div>
</body>
</html>