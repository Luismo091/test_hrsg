<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'glpie';
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
?>