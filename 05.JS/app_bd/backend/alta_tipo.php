<?php
include_once("config.php");
$conexion = obtenerConexion();

// Recoger datos
$tipo = $_POST['tipo'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO tipo VALUES (null,'$tipo','$descripcion');";

mysqli_query($conexion, $sql);

if (mysqli_errno($conexion) != 0) {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);

    // Prototipo responder($datos,$ok,$mensaje,$conexion)
    responder(null, false, "Se ha producido un error número $numerror que corresponde a: $descrerror <br>", $conexion);

} else {
    // Prototipo responder($datos,$ok,$mensaje,$conexion)
    responder(null, true, "Se ha insertado el tipo de componente", $conexion);
}
?>
