<?php
$hostname='localhost';
$database='Cabrerahe';
$username='root';
$password='';

try {
      $link = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
} catch(PDOException $e) {
      echo "Error de conexion a la base de datos";
      echo $e->getMessage();
      exit();
}

$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>