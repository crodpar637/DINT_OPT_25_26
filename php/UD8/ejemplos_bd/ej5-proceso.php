<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Insertar</title>
</head>

<body>
    <h4>Inserción de datos</h4>
    <?php
    require_once('funcionesBD.php');

    $conexion = obtenerConexion();

    $nombre = $_GET['txtNombre'];

    // El campo que va a NULL es la PK autoincremental
    $sql = "INSERT INTO Person VALUES (NULL,  '" . $nombre . "');";

    $resultado = mysqli_query($conexion, $sql);
    if (mysqli_errno($conexion) != 0) {
        $numerror = mysqli_errno($conexion);
        $descrerror = mysqli_error($conexion);
        echo "Se ha producido un error número $numerror que corresponde a: $descrerror <br>";
    } else {
        // Obtener id asignado al Insertar cuando PK es AUTO_INCREMENT
        // Sirve por si hay que insertar registros relacionados
        // Por ejemplo, factura -> líneas
        $ultimo_id = mysqli_insert_id($conexion);
        echo "<p>Inserción correcta.</p>";
        echo "<p>ID asignado: " . $ultimo_id . "</p>";
    }
    ?>
     <a href="ejemplo5.php">Insertar otra persona</a>
</body>

</html>