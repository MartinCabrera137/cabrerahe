<?php
 require_once "conexion.php";
 $NControl=$Nombres=$Apellidos=$Carrera="";
 $NControl_error=$Nombres_error=$Apellidos_error=$Carrera_error="";
 $salida = "";

 $query = "SELECT * FROM estudiantes WHERE Nombres NOT LIKE '' ORDER By NControl LIMIT 25";

 if (isset($_POST['BuscarEstudiante'])) {
     $q = $link->real_escape_string($_POST['BuscarEstudiante']);
     $query = "SELECT * FROM estudiantes WHERE NControl = '$q'";
 }

 $resultado = $link->query($query);

 if ($resultado->num_rows=1) {

   
  
 }else
     $NControl_error="No se encontraron resultados para su busqueda";
 }

 $link->close();
 
?>