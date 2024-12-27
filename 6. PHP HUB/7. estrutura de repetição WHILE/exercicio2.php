<!--
2)
Criar dinamicamente 5 caixas de texto em um formulário.
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
        <form method='get' action='modelo_ex2.php'>
            <?php
                $contador = 1;
                while ($contador <= 5) {
                    echo "
                    </br> 
                    <label for='campo $contador'>Campo $contador</label>
                    <input type='text' name='nome$contador' id=$contador/></br>";
                    $contador ++;
                }
                echo "</br><input type='submit' class='botao' value='Enviar!'/>";
            ?>
        </form>
    </div>
</body>
</html>

<!-- 
- Caso formos usar HTML dentro de uma tag HTML, o ideal é que os atributos do HTML sejam colocados em ASPAS SIMPLES, pois eles estarão dentro de um ECHO com ASPAS DUPLAS.

- Dá pra usar variáveis PHP como atributos de tags HTML

- Criando conteúdo no HTML de forma dinâmica através do PHP
-->
