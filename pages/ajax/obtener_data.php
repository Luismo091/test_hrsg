<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'glpie';
$tabla = 'nombres_generados';
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
$query = "SELECT * FROM $tabla";
$resultado = mysqli_query($conexion, $query);
$datos = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $datos[] = $fila;
}
mysqli_close($conexion);
echo json_encode($datos);
?>
