<?php

$servidor="localhost";
$baseDeDatos="mysql";
$usuario="root";
$contrasenia="";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    echo "conexion realizada..";
}
catch
(Exception $error){
    echo $error->getMessage();
}

?>