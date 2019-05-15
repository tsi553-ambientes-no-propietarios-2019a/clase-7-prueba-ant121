<?php
session_start();
error_reporting(0);
$usuario = $_SESSION['user']['username'];
if($usuario == null || $usuario == ''){
    header('Location: ../index.php');
    exit;
}

if(isset($_POST['txtCodigo']) && isset($_POST['txtNombre']) && isset($_POST['txtStock']) && isset($_POST['txtPrecio'])){
    if(is_numeric ($_POST['txtStock'])== false){
        header('Location: nuevo_producto.php?error_message3=La variable stock no es un numero');
        exit;
    }
    if(is_numeric ($_POST['txtPrecio'])== false){
        header('Location: nuevo_producto.php?error_message3=La variable precio no es un numero');
        exit;
    }
     $conn = new mysqli('localhost','root','','pruebab1');
                                $idTienda = $_SESSION['user']['id'];
                                $codigo=$_POST['txtCodigo'];
                                $nombre=$_POST['txtNombre'];
                                $tipo=$_POST['tipo'];
                                $stock=$_POST['txtStock'];
                                $precio=$_POST['txtPrecio'];
                                

    $sql_insert = "INSERT INTO producto (idTienda, codigo, nombre, tipo, cantidadStock, precio) VALUES ($idTienda,'$codigo', '$nombre', '$tipo', '$stock', '$precio')";
    $res=$conn->query($sql_insert);

    if($conn->error){
        echo $sql_insert;
        header('Location: nuevo_producto.php?error_message3=Ocurrio un error: ' . $conn->error);
        exit;
    }else{
       header('Location: inicio.php?error_message3=El producto se ha registrado correctamente!');
    }
}
?>