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
            <img src="../ABCMySql/img/tecnm.png" alt="" class="logo">
            <h1 class="title"> Iniciar sesion </h1>
            <form action="">
                <label for="">Usuario</label>
                <input type="text" name ="usuario">
                <span class="msg-error"></span>
                <label for="">Contraseña</label>
                <input type="text" name="contraseña">
                <span class="msg-error"> </span>
                <input type="submit" value="Iniciar sesion">
            </form>
            <span class="text-footer">¿No tienes cuenta?
                <a href="#">Registrarse</a>
            </span>
        </div>

    </div>
</body>
</html>