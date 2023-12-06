<?php
$servidor ="localhost";
$baseDeDatos="php_login_database";
$usuario="root";
$contrasenia="";
try{
    $conexion=new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
}catch(Exception $ex){
    echo $ex->getMessage();
}

?>