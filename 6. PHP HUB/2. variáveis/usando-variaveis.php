<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./_css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php         
        $n = 4;
        $int = (int) "10";
        $integer = (integer) "100";
        $float = (float) "105.5";
        $double = (double) "107.65";
        $str = (string) "Alexandre";
        $separador = "Tipo de dado: $double";       
        echo $separador. "<br/>";  

        $nome = "Alexandre";
        $idade = "24";
        echo "O ". $nome. " tem ". $idade. " anos";         

    ?>
</div>
</body>
</html>