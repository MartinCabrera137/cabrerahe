<?php
include "code-delete.php";
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
            <h1 class="title"> Eliminar estudiante </h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="POST">
           <!--  Buscar el usuario al dar enter en el txt de busqueda -->
                <label for="">Buscar estudiante con su numero de control:</label>
                <input type="text" name ="BuscarEstudiante">     
                <span class="msg-error"><?php echo $Busqueda_error ?> </span>         
     

            <label for=""></label>
            <label for=""></label>
        
           <!--  Eliminar al usuario usando los datos que metí a los txt -->

                <input type="text" name ="NControl" readonly=»readonly» placeholder = "Numero de Control" value = <?php echo $NControl ?>>
                <span class="msg-error"><?php echo $NControl_error ?> </span>

        
                <input type="text" name ="Nombres" readonly=»readonly» placeholder = "Nombres" value = <?php echo $Nombres ?> >
                <span class="msg-error"><?php echo $Nombres_error ?> </span>

           
                <input type="text" name ="Apellidos" readonly=»readonly» placeholder = "Apellidos" value = <?php echo $Apellidos ?>>
                <span class="msg-error"><?php echo $Apellidos_error ?> </span>


                <input type="text" name ="Carrera" readonly=»readonly» placeholder = "Carrera" value = <?php echo $Carrera ?>>                
                <span class="msg-error"><?php echo $Carrera_error ?> </span>
    
                <input type="submit" value="Eliminar" name="EliminarEstudiante" >   
            </form>      

            <span class="text-footer">
            <a href="Home.php">Regresar al inicio</a>
            </span>
        </div>

    </div>
</body>
</html>


