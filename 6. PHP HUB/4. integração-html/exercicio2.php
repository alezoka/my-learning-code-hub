<!-- 
2)
Leia o nome, ano de nascimento e sexo de uma pessoa, mostrando sua idade atual.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="get" action="dados2.php">
            Nome: <input type="text" name="nome"><br/>
            Ano de nascimento: <input type="number" name="ano"><br/>
            <fieldset><legend>Sexo</legend> <!--fieldset = borda do formulario, legend = nome que fica na borda-->
                <input type="radio" name="sexo" id="masc" value="Homem"/> <!-- value = valor que vai ser exibido no php-->
                <label for="masc">Masculino</label><br/> <!--label = pra você clicar na palavra e selecionar a bolinha radio-->
                <input type="radio" name="sexo" id="fem" value="Mulher"/>
                <label for="fem">Feminino</label>
            </fieldset>
            <input type="submit" value="Enviar dados"/>
        </form>
    </div>
</body>
</html>