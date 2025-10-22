<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Borrar</title>
</head>

<body>
    <h4>Borrar una persona</h4>
    <?php
    require_once('funcionesBD.php');

    $conexion = obtenerConexion();

    $nombre = $_GET['txtNombre'];

    $sql = "DELETE FROM Person WHERE name = '" . $nombre . "';";

    $resultado = mysqli_query($conexion, $sql);
    if (mysqli_errno($conexion) != 0) {
        $numerror = mysqli_errno($conexion);
        $descrerror = mysqli_error($conexion);
        echo "Se ha producido un error número $numerror que corresponde a: $descrerror <br>";
    } else {
        
        echo "<p>Borrado correcto.</p>";
        echo "<p>Se han borrado " . mysqli_affected_rows($conexion) . " filas.</p>";
       
    }
    ?>
     <a href="ejemplo6.php">Borrar otra persona</a>
</body>

</html>