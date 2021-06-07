<?php
    //Aquí iniciarmos la sesion
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        echo "<script>
        window.location= 'index.php'
        </script>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Home</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, maximun-scale=1.0">
</head>
<body>
<div class="ctn-welcome">
    <img src="../ABCMySql/img/tecnm.png" alt="" class="logo-welcome">
    <h1 class="title-welcome">¡Bienvenido al sistema!</h1>
    <h1 class="title-welcome"><?php echo $_SESSION['nombre'] ?></h1>
    <a href="CerrarSesion.php" class="close-sesion">Cerrar sesion</a>
</div>

</body>
</html>