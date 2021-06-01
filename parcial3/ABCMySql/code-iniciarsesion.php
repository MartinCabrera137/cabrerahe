<?php

    //Aquí iniciarmos la sesion
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
        echo "<script>
        window.location= 'Home.php'
        </script>";
        exit;
    }
    require_once "conexion.php";
    //inicializar las variables (mismas que en el register)
    $usuario=$contraseña="";
    $usuario_error=$contraseña_error="";

    if($_SERVER["REQUEST_METHOD"]==="POST"){
        if(empty(trim($_POST["usuario"]))){
            $usuario_error="Por favor escriba el usuario";
        }
        else{
            $usuario=trim($_POST["usuario"]);
        }

        if(empty(trim($_POST["contraseña"]))){
            $contraseña_error="Por favor escriba la contraseña";
        }
        else{
            $contraseña=trim($_POST["contraseña"]);
        }

        //Aqui valido los datos para entrar
        if(empty($usuario_error)&& empty($contraseña_error)){
            $sql="SELECT id, Usuario, Nombre, Contraseña FROM Usuarios where Usuario = ?";
        if($stmt=mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt, "s", $parametro_usuario);
            $parametro_usuario = $usuario;
            //$parametro_nombre = $nombre;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }
            if(mysqli_stmt_num_rows($stmt)==1){
                mysqli_stmt_bind_result($stmt,$id,$usuario,$nombre,$hashed_password);
                if(mysqli_stmt_fetch($stmt))
                {
                    if(password_verify($contraseña,$hashed_password))
                    {
                    session_start();
                    //Almecenar los datos en variables de sesion
                    $_SESSION["loggedin"] = true;
                    $_SESSION["nombre"] = $nombre;
                    $_SESSION["usuario"] = $usuario;

                    //Entrar al sistema
                    echo "<script>
                    window.location= 'Home.php'
                    </script>";
                    }
                    else{
                        $contraseña_error ="Contraseña incorrecta";
                    }
                }
               
            }     
            else
            {
            $usuario_error = "Usuario no registrado";
            }    
        }
        else{
            echo "<script>
            alert('Algo salió mal');
            </script>";
        }
        }
        
        mysqli_close($link);
    }
?>