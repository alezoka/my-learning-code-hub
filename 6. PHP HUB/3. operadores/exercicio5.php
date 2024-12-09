<?php

/* 5)
 Mostre se um eleitor é obrigado a votar ou não */
 echo "<br/><h3>Exercício 5</h3>";

 // solução 1 (minha)
 $idade = $_GET["idade"];
 $titulo = $_GET["titulo"];
 echo (($idade >= 18) && ($titulo == "sim")) ? "É OBRIGATÓRIO votar!!!":"Caso tenha 16 ou 17 anos, a votação é OPCIONAL. Se for menor que 16, é PROIBIDO VOTAR!!!";

 echo "<br/>";

 
 // solução 2 (correção)
 $ano_nascimento = $_GET["ano"];
 $idade = 2024 - $ano_nascimento;
 echo "Quem nasceu em $ano_nascimento tem $idade anos <br/>";
 $tipo = ($idade>=18 && $idade<65)?"É OBRIGATÓRIO VOTAR!!":"NÃO É OBRIGATÓRIO VOTAR!!";
 echo $tipo;
 