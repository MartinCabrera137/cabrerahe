<?php
 require_once "conexion.php";

 $nombre=$usuario=$contraseña="";
 $nombre_error=$usuario_error=$contraseña_error="";
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Input de usuario
     if(empty(trim($_POST["usuario"])))
     {
         $usuario_error="Por favor escriba el usuario";
     }
     else
     {
         $sql = "SELECT id FROM usuarios WHERE Usuario =?";
         if($stmt=mysqli_prepare($link,$sql))
         {
            mysqli_stmt_bind_param($stmt,"s",$parametro_usuario);
            $parametro_usuario=trim($_POST["usuario"]);
            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)==1)
                {
                    $usuario_error="El usuario ya existe";
                }
                else{
                    $usuario = trim($_POST["usuario"]);
                }
            }else{
                echo"Aquí hay uin error";
            }
         }
     }
     //Input de nombre completo
     if(empty(trim($_POST["nombre"])))
     {
         $nombre_error="Por favor escriba el nombre";
     }
     else
     {
         $sql = "SELECT id FROM Usuarios WHERE nombre =?";
         if($stmt=mysqli_prepare($link,$sql))
         {
            mysqli_stmt_bind_param($stmt,"s",$parametro_nombre);
            $parametro_nombre=trim($_POST["nombre"]);
            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)==1)
                {
                    $nombre_error="El nombre ya existe";
                }
                else{
                    $nombre = trim($_POST["nombre"]);
                }
            }else{
                echo"Aquí hay uin error";
            }
         }
     }
      //Input de contraseña
      if(empty(trim($_POST["contraseña"])))
      {
          $contraseña_error="Por favor escriba la contraseña";
      }
      else
      {
          if(strlen(trim($_POST["contraseña"])<2)){
            $contraseña_error="La contraseña debe tener al menos 2 caracteres";
          }
          else{
            $contraseña=trim($_POST["contraseña"]);
          }
      }
      
      if(empty($usuario_error)&& empty($nombre_error) && empty($contraseña_error)){
        $sql="INSERT INTO Usuarios (Usuario, Nombre, Contraseña) values (?,?,?)";
        if($stmt=mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt,"sss",$parametro_usuario,$parametro_nombre,$parametro_contraseña);
            $parametro_usuario = $usuario;
            $parametro_nombre = $nombre;
            $parametro_contraseña = password_hash($contraseña, PASSWORD_DEFAULT); //encriptar
            if(mysqli_stmt_execute($stmt)){
                echo "<script>
                alert('Mensaje');
                window.location= 'index.php'
                </script>";
            }else{
                echo "algo salió mal 93 code";
            }
        }
      }
      mysqli_close($link);
 }
?>