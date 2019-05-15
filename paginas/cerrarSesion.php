<?php
    session_start();
    error_reporting(0);
    $usuario = $_SESSION['user']['username'];
    
    if($usuario == null || $usuario == ''){
        header('Location: ../index.php');
        exit;
    }
    session_destroy();
    header('Location: ../index.php');
?>