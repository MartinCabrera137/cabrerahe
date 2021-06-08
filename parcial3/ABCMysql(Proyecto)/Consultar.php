<?php
include "code-consultar.php";
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
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">       
                <label for="">Buscar Estudiante:</label>
                <input type="text" name ="BuscarEstudiante">
                <span class="msg-error"><?php echo $NControl_error ?> </span>                       
            </form>
        <div>
        <span class="text-footer">
    <a href="Home.php">Regresar al incio</a>
    <label for=""></label>
    <label for=""></label>
    </span>  
        </div>
   
    </div>
</body>
</html>