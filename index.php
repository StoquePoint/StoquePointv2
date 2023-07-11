<?php
include('./php/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../StoquePoint/css/meuestilo.css">
    <title>Document</title>
</head>

<body>

    <nav id="vertical">
        <div class="slogan">
            <img src="img/logo.svg" alt="">
        </div>
        <div class="logo">
            <img src="img/logo5.svg" alt="">
        </div>
    </nav>

    <div class="entra">

        <div class="slogan2">
            <img src="img/logo.svg" alt="">
            <h1>STOQUE POINT</h1>
        </div>

        <div class="input">
            <form action="php/login.php" class="inputs" method="POST">
                <input class="usuario" type="text" name="usuario" placeholder="Informe seu usuario" />
                
                <br />

                <input class="senha" type="password" name="senha" placeholder="Informe sua senha" />
                
                <br />

                <div class="buttonT">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>