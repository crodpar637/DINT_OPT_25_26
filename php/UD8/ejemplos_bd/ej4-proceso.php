<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Busqueda</title>
</head>

<body>
    <h4>Actualizar datos</h4>
    <?php
    require_once('funcionesBD.php');

    $conexion = obtenerConexion();

    $nombre = $_GET['txtNombre'];

    // Sustituir nombre de la tabla y filtros
    $sql = "SELECT * FROM Person WHERE name ='$nombre';";

    $resultado = mysqli_query($conexion, $sql);

    $numeroFilas = mysqli_num_rows($resultado);
    if ($numeroFilas == 0) {
    // Poner aquí lo que pasa si no se devuelven filas
        echo "No encontramos la persona llamada $nombre";
    } else {
    // Procesar los datos
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<form action='ej4-actualizar.php' method='get'>";
            echo "<label>ID</label>";
            echo "<input type='text' disabled value='" . $fila['id'] . "' />";
            echo "<input type='hidden'  name='txtID' id='txtID' value='" . $fila['id'] . "' />";
            echo "<br>";
            echo "<label>Nombre</label>";
            echo "<input type='text' name='txtNombre' id='txtNombre' value='" . $fila['name'] . "' />";
            echo "<br>";
            echo "<input type='submit' name='btnAceptar' id='btnAceptar' value='Aceptar' />";

        }
    }
    ?>
</body>

</html>