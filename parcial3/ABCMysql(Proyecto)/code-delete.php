<?php
 require_once "conexion.php";
 $NControl=$Nombres=$Apellidos=$Carrera="";
 $NControl_error=$Nombres_error=$Apellidos_error=$Carrera_error=$Busqueda_error="";
 $salida = "";      
 if($_SERVER["REQUEST_METHOD"]==="POST"){
 //Buscar el usuario
 if($_POST['BuscarEstudiante']){               
                $q = $link->real_escape_string($_POST['BuscarEstudiante']);
                $query = "SELECT * FROM estudiantes WHERE NControl = '$q'";
                 
                $resultado = $link->query($query);
            
                if ($resultado->num_rows==1) 
                {                    
                    $Busqueda_error.="Estudiante encontrado";
                    while ($fila = $resultado->fetch_assoc()) 
                    {
    
                                    $NControl= $fila['NControl'];
                                    $Nombres= $fila['Nombres'];
                                    $Apellidos= $fila['Apellidos'];
                                    $Carrera= $fila['Carrera'];                       
                    }
                    
                    
                }
                else
                {
                    $Busqueda_error.="Estudiante no encontrado";
                }

}

if($_POST['EliminarEstudiante'])
{ 
  
     if(empty("NControl"))
    {
        
        echo "<script>
        alert('Busca un estudiante primero');
        </script>";
    }
    else
    {
        $q = $_POST['NControl'];
        $sql="DELETE FROM estudiantes where NControl = $q";
        if($stmt=mysqli_prepare($link,$sql))
        {
            if(mysqli_stmt_execute($stmt))
            {
                echo "<script>
                alert('Estudiante eliminado con exito.');
                </script>";
            }
            else
            {
                echo "<script>
                alert('Estudiante no eliminado');
                </script>";
            }
       }
    } 
}


         
echo $salida;







                $link->close();
 } 
?>
