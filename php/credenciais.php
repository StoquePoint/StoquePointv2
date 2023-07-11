<?php
$host   =   "localhost";
$name   =   "root";
$senha  =   "";
$bd_name    =   "stoquepoint";

$conexao = mysqli_connect($host,$name,$senha,$bd_name);

if (mysqli_connect_errno($conexao)) {
    echo "erro ao conectar com o banco de dados: ". mysqli_connect_error();
}
?>