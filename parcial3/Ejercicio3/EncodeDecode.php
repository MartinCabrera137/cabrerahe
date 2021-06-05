<?php

//Cadena String JSON
$Cadena = '
        {
        "Nombre": "Pedro",
        "Apellido": "Cabrera",
        "Carrera": "Mecanica"
    }';
//Impresion de prueba
print "</b>--Json antes de codificar--</br>";
print "</b></br>";
var_dump($Cadena);

print "</b></br>";
print "</b></br>";

//jSON TO ARRAY
print "<b>--Json decode--<br>";
print "</b></br>";
$jsonDecode = json_decode($Cadena);
$jsonDecode->Carrera = "Sistemas";
echo 'Nombre : '.$jsonDecode->Nombre.'<br>';
echo 'Apellido : '.$jsonDecode->Apellido.'<br>';
echo 'Carrera : '.$jsonDecode->Carrera.'<br>';
print "</b></br>";
print "</b></br>";

//Array to Jason
print "<b>--Json encode--<br>";
$CadenaJson = json_encode($Cadena);

print "</b></br>";
var_dump ($CadenaJson);




?>