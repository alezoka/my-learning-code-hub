<!-- 
Esse arquivo é um auxiliar usado lá no arquivo ex-02 (formulario).php
-->

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    echo "Olá, $nome! Seja bem-vindo(a)!";
}