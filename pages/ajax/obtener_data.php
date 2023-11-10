<?php
include('../../conexion.php');
$tabla = 'nombres_generados';

$query = "SELECT * FROM $tabla";
$resultado = mysqli_query($conexion, $query);
$datos = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $datos[] = $fila;
}
mysqli_close($conexion);
echo json_encode($datos);
?>
