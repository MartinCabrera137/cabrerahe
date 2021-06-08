<?php
 require_once "conexion.php";
 $NControl=$Nombres=$Apellidos=$Carrera="";
 $NControl_error=$Nombres_error=$Apellidos_error=$Carrera_error="";
 
 
      $salida = "";

                $query = "SELECT * FROM estudiantes WHERE Nombres NOT LIKE '' ORDER By NControl LIMIT 25";
            
                if (isset($_POST['BuscarEstudiante'])) {
                    $q = $link->real_escape_string($_POST['BuscarEstudiante']);
                    $query = "SELECT * FROM estudiantes WHERE NControl LIKE '%$q%' OR Nombres LIKE '%$q%' OR Apellidos LIKE '%$q%' OR Carrera LIKE '%$q%'";
                }
            
                $resultado = $link->query($query);
            
                if ($resultado->num_rows>0) {
            
                    $salida.="<table border=1 class='tabla_datos'>
                            <thead>
                                <tr id='titulo'>
                                <th>Numero de Control</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Carrera</th>                         
                                </tr>
            
                            </thead>
                            
            
                    <tbody>";
            
                    while ($fila = $resultado->fetch_assoc()) {
                        $salida.="<tr>
                                    <td>".$fila['NControl']."</td>
                                    <td>".$fila['Nombres']."</td>
                                    <td>".$fila['Apellidos']."</td>
                                    <td>".$fila['Carrera']."</td>
                                </tr>";
            
                    }
                    $salida.="</tbody></tabla_datos>";
                }else{
                    $salida.="No se encontraron resultados para su busqueda";
                }
            
            
                echo $salida;
            
                $link->close();
 
?>