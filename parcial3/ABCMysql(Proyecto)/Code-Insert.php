<?php
 require_once "conexion.php";
 $NControl=$Nombres=$Apellidos=$Carrera="";
 $NControl_error=$Nombres_error=$Apellidos_error=$Carrera_error="";
 
 
 
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Input de NControl (listo)
      if(empty(trim($_POST["NControl"])))
      {
          $NControl_error="Por favor escriba el NControl";
      }
      else
      {
          $sql = "SELECT Ncontrol FROM estudiantes WHERE NControl =?";
          if($stmt=mysqli_prepare($link,$sql))
          {
             mysqli_stmt_bind_param($stmt,"s",$parametro_NControl);
             $parametro_NControl=trim($_POST["NControl"]);                 
             if(mysqli_stmt_execute($stmt))
             {
                 mysqli_stmt_store_result($stmt);
                 if(mysqli_stmt_num_rows($stmt)==1)
                 {
                     $NControl_error="El numero de control ya existe";
                 }
                 else{
                     $NControl = trim($_POST["NControl"]);
                 }
             }else{
                 echo"Aquí hay uin error";
             }
          }
      }
    
    //Input de Nombres
     if(empty(trim($_POST["Nombres"])))
     {
         $Nombres_error="Por favor escriba su/sus nombre/s";
     }
     else
     {
        $Nombres = trim($_POST["Nombres"]);
     }
    
   
     
      //Input de Apellidos
      if(empty(trim($_POST["Apellidos"])))
      {
          $Apellidos_error="Por favor escriba la Apellidos";
      }
      else
      {
         $Apellidos = trim($_POST["Apellidos"]);
      }

    //Input de Carrera
      if(empty(trim($_POST["Carrera"])))
      {
          $Carrera_error="Por favor escriba la Carrera";
      }
      else
      {
         $Carrera = trim($_POST["Carrera"]);
      }



      //Insertar en la base de datos si se llenaron todos los campos
      if(empty($Nombres_error)&& empty($NControl_error) && empty($Apellidos_error) && empty($Carrera_error)){
        $sql="INSERT INTO estudiantes (NControl, Nombres, Apellidos, Carrera) values (?,?,?,?)";
        if($stmt=mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt,"ssss",$parametro_NControl,$parametro_Nombres,$parametro_Apellidos,$parametro_Carrera);
            $parametro_NControl = $NControl;
            $parametro_Nombres = $Nombres;
            $parametro_Apellidos = $Apellidos;
            $parametro_Carrera = $Carrera;
            if(mysqli_stmt_execute($stmt)){
                echo "<script>
                alert('Estudiante registrado con exito.');
                </script>";
            }else{
                echo "algo salió mal 93 code";
            }
        }
      }
      mysqli_close($link);
 }
?>