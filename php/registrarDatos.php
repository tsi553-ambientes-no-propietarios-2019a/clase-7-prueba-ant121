<?php
if(isset($_POST['txtTienda']) && isset($_POST['txtusername']) && isset($_POST['txtpassword1']) && isset($_POST['txtpassword2'])){
    if($_POST['txtpassword1'] == $_POST['txtpassword2']){
     $conn = new mysqli('localhost','root','','pruebab1');
                                $tienda=$_POST['txtTienda'];
                                $username=$_POST['txtusername'];
                                $password=$_POST['txtpassword1'];

    $sql_insert = "INSERT INTO tienda (nombreTienda, username, password ) VALUES ('$tienda','$username', MD5('$password'))";
    $res=$conn->query($sql_insert);

    if($conn->error){
        echo $sql_insert;
        header('Location: registro_tienda.php?error_message2=Ocurrio un error: ' . $conn->error);
        exit;
    }else{
       header('Location: ../index.php?error_message=Tienda registrada correctamente, puede iniciar sesión.');
    }
   }else{
   header('Location: registro_tienda.php?error_message2=Las contraseñas no coinciden por favor intentelo de nuevo');
   exit;
   }
}else{
    header('Location: registro_tienda.php');
    exit;
}
?>