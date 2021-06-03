<?php
include "conexion.php";

try {
        $consultaSql = "select * from Estudiantes";
    $consulta = $link -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);


    //Recorrer la tabla para imprimir todo
    //--------------------------------------
     print "<h3>Registros de la tabla Estudiantes</h3>";
     for ($i=0; $i<=count($resultado)-1; $i++) {
        printf("<b>Registro numero: </b>".($i+1)."<br>");
        printf("<b>Nombre     = </b> ".$resultado[$i]['Nombre']."<br>");
        printf("<b>Numero Control  = </b> ".$resultado[$i]['NControl']."<br>");
        printf("<b>Telefono  = </b> ".$resultado[$i]['Telefono']."<br>");
        printf("<b>Correo Electronico      = </b> ".$resultado[$i]['Email']."<br>");
        printf("<b>Carrera      = </b> ".$resultado[$i]['Carrera']."<br>");
        printf("</pre>");
        printf("<br>");
     }
    $consulta->closeCursor();
} catch(PDOException $e) {
        echo "Entro al catch ";
        echo $e->getMessage();
}
?>