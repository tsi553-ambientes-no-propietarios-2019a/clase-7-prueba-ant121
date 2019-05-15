<?php
if($_GET){
    if(isset($_GET['error_message2'])){
        $error_message2 = $_GET ['error_message2'];
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
    <title>Registro de tienda</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
             <div class="jumbotron">
                <center>
                    <h1 class="display-6 titulos">Registro de Tienda</h1>
                </center>
                <hr class="my-4">
                <form action="registrarDatos.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="formGroupExampleInput">Nombre de la Tienda:</label>
                            <input type="text" class="form-control" name="txtTienda" 
                            placeholder="Ingrese su nombre de usuario" required>
                    </div>
                    <div class="form-group">
                            <label for="formGroupExampleInput">Usuario:</label>
                            <input type="text" class="form-control" name="txtusername" 
                            placeholder="Ingrese su contraseña" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="formGroupExampleInput">Contraseña:</label>
                            <input type="password" class="form-control" name="txtpassword1" 
                            placeholder="Ingrese su contraseña" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="formGroupExampleInput">Repita su contraseña:</label>
                            <input type="password" class="form-control" name="txtpassword2" 
                            placeholder="Ingrese su contraseña" required>
                        </div>
                    </div>
                    
                <center>
                <br>
                    <button type="submit" class="btn btn-primary">Registrar</button>&nbsp;&nbsp;&nbsp;
                    <a href="../index.php" class="btn btn-danger">&nbsp;&nbsp;Atras&nbsp;&nbsp;</a>
                    <br>
                    <?php
                    if(isset($error_message2)){
                        echo $error_message2;
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