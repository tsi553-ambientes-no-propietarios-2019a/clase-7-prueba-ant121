<?php
session_start();
error_reporting(0);
$usuario = $_SESSION['user']['username'];
if($usuario == null || $usuario == ''){
    header('Location: ../index.php');
    exit;
}
if($_GET){
    if(isset($_GET['error_message3'])){
    $error_message3 = $_GET ['error_message3'];
    }
}
session_start();
$tiendaID=$_SESSION['user']['id'];
$conn = new mysqli('localhost','root','','pruebab1');
$sql_insert = "SELECT * FROM producto where idTienda=$tiendaID";
$res=$conn->query($sql_insert);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>TiendasEC</title>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                 <div class="jumbotron">
                        <h1 class="display-6 titulos">Bienvenido: <?php echo $_SESSION['user'] ['username']; ?></h1>
                        <h1 class="display-5 titulos">Nombre de la tienda: <?php echo $_SESSION['user'] ['tienda'];?></h1>
                    <hr class="my-4">
                        <h3 class="display-6 titulos">Productos de la tienda: </h1>
                        <br>
                        <table class="table table-hover">
                        <tr>
                            <td><b>Codigo</b></td>
                            <td><b>Nombre</b></td>
                            <td><b>Tipo</b></td>
                            <td><b>Cantidad en Stock</b></td>
                            <td><b>Precio</b></td>
                        </tr>
                        <?php
                        while($mostrar = $res-> fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $mostrar['codigo'] ?> </td>
                            <td><?php echo $mostrar['nombre'];?> </td>
                            <td><?php echo $mostrar['tipo'];?> </td>
                            <td><?php echo $mostrar['cantidadStock'];?> </td>
                            <td><?php echo $mostrar['precio'];?> </td>
                        </tr>
                        <?php
                        }?>

                    </table> 
                    <center>
                        <a href="nuevo_producto.php" class="btn btn-primary">Registrar nuevo producto</a>
                        <a href="cerrarSesion.php" class="btn btn-danger">Cerrar Sesion</a>
                        <br>
                        <br>
                        <?php
                        if(isset($error_message3)){
                            echo $error_message3;
                        }
                        ?>
                    </center>
                 </div>
                </div>
            </div>
        </div> 
    </body>
    </html>