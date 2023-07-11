<?php
session_start();
include_once('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header ('Location: Location: ../index.php');
    exit();
}


$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query = "select * from colaborador where colaborador.usuario = '{$usuario}' and colaborador.senha ='{$senha}'";

$result = mysqli_query($conexao, $query);


$row = mysqli_fetch_assoc($result);

if ($row != null) {
    $_SESSION['usuario'] = $usuario;
    header('Location: ../html/menu.html');
    exit();
    
}else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../index.php');
    exit();
}

?>