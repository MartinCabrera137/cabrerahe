<?php
include "Code-insert.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Login Basico</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, maximun-scale=1.0">
</head>
<body>
    <div class="container-all">
        <div class="ctn-form">
            <img src="img/tecnm.png" alt="" class="logo">
            <h1 class="title"> Insertar nuevo estudiante </h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="Post">
            
                <label for="">Numero de control</label>
                <input type="text" name ="NControl">
                <span class="msg-error"><?php echo $NControl_error ?> </span>

                <label for="">Nombres</label>
                <input type="text" name ="Nombres">
                <span class="msg-error"><?php echo $Nombres_error ?> </span>

                <label for="">Apellidos</label>
                <input type="text" name ="Apellidos">
                <span class="msg-error"><?php echo $Apellidos_error ?> </span>

                <label for="">Carrera</label>
                <input type="text" name ="Carrera">                
                <span class="msg-error"><?php echo $Carrera_error ?> </span>

                <input type="submit" value="Registrar Estudiante">
            </form>
            <span class="text-footer">
                <a href="Home.php">Regresar al inicio</a>
            </span>
        </div>

    </div>
</body>
</html>