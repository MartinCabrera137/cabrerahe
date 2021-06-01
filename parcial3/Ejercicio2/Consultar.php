<?php
include "conexion.php";

try {
       $queryStr="select * from Usuarios";
       $query=$con->prepare($queryStr);
       $query->execute();

        while ($row = $query->fetch()) {
            echo $row['Nombre'].'-'.
                 $row['NControl'].'-'.
                 $row['Telefono'].'-'.
                 $row['Email'].'-'.
                 $row['Carrera'].'-'.
                 $row['Contraseña'].'<br>';
        }
        $query->closeCursor();

} catch(PDOException $e) {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
}
?>