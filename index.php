<?php
if($_GET){
    if(isset($_GET['error_message'])){
        $error_message = $_GET ['error_message'];
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
    <title>Inciar Sesion</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
             <div class="jumbotron">
                <center>
                    <h1 class="display-6 titulos">Iniciar Sesion</h1>
                </center>
                <hr class="my-4">
                <form action="php/iniciarSesion.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="formGroupExampleInput">Usuario:</label>
                            <input type="text" class="form-control" name="username" 
                            placeholder="Ingrese su nombre de usuario" required>
                    </div>
                    <div class="form-group">
                            <label for="formGroupExampleInput">Contraseña</label>
                            <input type="password" class="form-control" name="password" 
                            placeholder="Ingrese su contraseña" required>
                    </div>
                <center>
                    <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                    <a href="php/registro_tienda.php" class="btn btn-success">Registrar mi tienda</a>
                    <br>
                    <br>
                    <?php
                    if(isset($error_message)){
                        echo $error_message;
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