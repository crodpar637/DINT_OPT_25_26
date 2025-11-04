<?php
include_once("config.php");
$conexion = obtenerConexion();

// Recoger datos
$libro = json_decode($_POST['libro']);

$sql = "INSERT INTO libro VALUES(null, $libro->idgenero , '$libro->titulo', '$libro->autor', '$libro->descripcion', '$libro->imagen' ); ";

mysqli_query($conexion, $sql);

if (mysqli_errno($conexion) != 0) {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);

    responder(null, true, "Se ha producido un error número $numerror que corresponde a: $descrerror <br>", $conexion);

} else {
    // Prototipo responder($datos,$error,$mensaje,$conexion)
    responder(null, false, "Se ha dado de alta el libro", $conexion);
}
?>
