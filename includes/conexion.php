<?php // Código para establecer la conexión a la base de datos

$host = 'localhost'; // Señala o hace referencia al localhost
$db   = 'db_ejercicio1'; //reconoce la base de datos
$username = 'root'; //reconoce el usuario
$password = 'lalolanda28'; //contraseña

$conexion = new mysqli($host,$username,$password,$db);

if ($conexion->connect_errno){
    echo "Nuestro sitio experimenta fallos ...";
    exit();
}   
?>