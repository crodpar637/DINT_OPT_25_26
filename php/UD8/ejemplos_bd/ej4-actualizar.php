<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Actualizar</title>
</head>

<body>
    <h4>Actualización de datos</h4>
    <?php
    require_once('funcionesBD.php');

    $conexion = obtenerConexion();

    $id = $_GET['txtID'];
    $nombre = $_GET['txtNombre'];

    $sql = "UPDATE Person SET name = '$nombre' WHERE id = $id;";
    
    mysqli_query($conexion, $sql);

    // Comprobar errores
    if (mysqli_errno($conexion) != 0) {
        $numerror = mysqli_errno($conexion);
        $descrerror = mysqli_error($conexion);
        echo "Se ha producido un error numero $numerror que corresponde a: $descrerror <br>";
    } else {
        echo "<p>Actualización correcta</p>";
    }
    ?>
    <a href="ejemplo4.php">Buscar otra persona</a>
</body>

</html>