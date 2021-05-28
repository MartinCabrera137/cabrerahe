<?php
 require_once "conexion.php";

 $nombre=$correo=$contraseña="";
 $nombre_error=$correo_error=$contraseña_error="";

 if($_SERVER["REQUEST_METHOD"]=="POST"){

     if(empty(trim($_POST["nombre"]))){
         $nombre_error="Por favor escriba el nombre completo";
     }
 }
?>