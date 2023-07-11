<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "test";

    $conexao = mysqli_connect($host, $user, $password, $dbname);

    // verificação de erros de conexão
    if (mysqli_connect_errno()) {
        echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
    }
?>