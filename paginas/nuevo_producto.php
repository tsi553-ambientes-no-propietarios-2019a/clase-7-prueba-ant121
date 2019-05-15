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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Nuevo Producto</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
             <div class="jumbotron">
                <center>
                    <h1 class="display-6 titulos">Registro de producto</h1>
                </center>
                <hr class="my-4">
                <form action="guardarDatos.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="formGroupExampleInput">Codigo:</label>
                            <input type="text" class="form-control" name="txtCodigo" 
                            placeholder="Ingrese el codigo del producto" required>
                    </div>
                    <div class="form-group">
                            <label for="formGroupExampleInput">Nombre:</label>
                            <input type="text" class="form-control" name="txtNombre" 
                            placeholder="Ingrese el nombre del producto" required>
                    </div>
                    <div class="form-group">
                            <label for="formGroupExampleInput2">Tipo:</label>
                                <select class="custom-select form-control" id="inputGroupSelect01" name="tipo" required>
                                    <option value="">Seleccione</option>
                                    <option value="Alimento">Alimento</option>
                                    <option value="Vestimenta">Vestimenta</option>
                                    <option value="Salud">Salud</option>
                                </select>
                    </div>
                    <div class="form-group">
                            <label for="formGroupExampleInput">Cantidad en stock:</label>
                            <input type="text" class="form-control" name="txtStock" 
                            placeholder="Ingrese la cantidad del producto" required>
                    </div>
                    <div class="form-group">
                            <label for="formGroupExampleInput">Precio:</label>
                            <input type="text" class="form-control" name="txtPrecio" 
                            placeholder="Ingrese el precio del producto" required>
                    </div>
                    
                <center>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a href="inicio.php" class="btn btn-danger">Atras</a>
                    <br>
                    <br>
                    <?php
                    if(isset($error_message3)){
                        echo $error_message3;
                    }
                    ?>
                </center>
                </form>
             </div>
            </div>
        </div>
    </div> 
</body>
</html>