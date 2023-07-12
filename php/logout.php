<?php

    session_start();
    
    unset($_SESSION['usuario']);
    unset($_SESSION['nome']);

    session_destroy();

    header('location: StoquePointv2/index.php');

    exit;
?>