<?php
if(isset($_POST['username']) && isset($_POST['password'])){
     $username = $_POST['username'];
     $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','pruebab1');

    $sql_insert = "SELECT * FROM tienda WHERE username = '$username' AND password=MD5('$password')";
    $res=$conn->query($sql_insert);

    if($conn->error){
        echo $sql_insert;
        header('Location: ../index.php?error_message=Ocurrio un error: ' . $conn->error);
        exit;
    }
    
    if($res->num_rows > 0){
        while($row = $res-> fetch_assoc()){
            session_start();
            $_SESSION['user'] = ['username' =>$row['username'], 'id'=>$row['id'], 'tienda'=>$row['nombreTienda']];
            header('Location: ../paginas/inicio.php');
            exit;
        }
        
    }else{
        header('Location: ../index.php?error_message=Usuario o contraseña incorrectos.!');
        exit;
    }
 }else{
    header('Location: ../index.php');
    exit;
 }
?>