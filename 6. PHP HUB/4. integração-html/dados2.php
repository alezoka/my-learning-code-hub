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
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Valor não informado]"; // usar operador ternário aqui é só uma solução paliativa, que evita erros.
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset($_GET["sexo"]) ? $_GET["ano"] : "[Valor não informado]";
            $idade = date("Y") - $ano; //"Y" = ano completo (4 digitos), "y" = ano reduzido (2 digitos)
            echo "Olá, $nome!<br/>Você é um $sexo<br/>Sua idade é $idade" . " anos. " . "<br/>Seja bem vindo(a)!";           
        ?>
        <a href="./exercicio2.php"> Voltar</a>
    </div>
    
</body>
</html>

