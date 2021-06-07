<?php
include 'code-register.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, maximun-scale=1.0">
</head>
<body>
    <div class="container-all">
        <div class="ctn-form">
            <img src="img/tecnm.png" alt="" class="logo">
            <h1 class="title"> Registrarse </h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <label for="">Usuario</label>
                <input type="text" name="usuario">               
                <span class="msg-error"><?php echo $usuario_error ?></span>
                <label for="">Nombre Completo</label>
                <input type="text" name="nombre">
                <span class="msg-error"><?php echo $nombre_error ?></span>
                <label for="">Contraseña</label>
                <input type="password" name="contraseña">
                <span class="msg-error"><?php echo $contraseña_error ?></span>
                <input type="submit" value="Crear cuenta">
            </form>
            <span class="text-footer">¿Ya tienes cuenta?
                <a href="Index.php">Inicia Sesion</a>
            </span>
        </div>

    </div>
</body>
</html>