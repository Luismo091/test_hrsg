<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'glpie';
$tabla = 'nombres_generados';
$area = $_POST['area'];
$seccion = $_POST['seccion'];
$cargo = $_POST['cargo'];
$equipo = $_POST['equipo'];
$tipo_equipo = $_POST['tipo_equipo'];
$inventario = $_POST['inventario'];
$codigo_pc = $_POST['codigo'];
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
$consulta = "SELECT * FROM $tabla WHERE codigo_pc = '$codigo_pc'";
$resultado = mysqli_query($conexion, $consulta);
if (mysqli_num_rows($resultado) > 0) {
    echo "Ya existe un registro con el mismo código PC: " . $codigo_pc;
} else {
    $query = "INSERT INTO $tabla (area, seccion, cargo, equipo, tipo_equipo, inventario, codigo_pc) 
              VALUES ('$area', '$seccion', '$cargo', '$equipo', '$tipo_equipo', '$inventario', '$codigo_pc')";
    if (mysqli_query($conexion, $query)) {
        echo "Código de PC insertado: " . $codigo_pc;
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }
}
mysqli_close($conexion);
?>
