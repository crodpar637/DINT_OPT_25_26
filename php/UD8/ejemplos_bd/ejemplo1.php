<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("funcionesBD.php");

    $conexion = obtenerConexion();

    // Sustituir nombre_desplegable
    echo "<select name='nombre_desplegable' id='nombre_desplegable'>";
    // Option para opción inicial, comentar si no debe salir
    echo "<option value='-1'>Seleccione...</option>";

    // Sustituir nombre del campo clave y del campo valor.
    // Tb. nombre de la tabla
    $sql = "SELECT id,name FROM Person;";

    $resultado = mysqli_query($conexion, $sql);

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo " <option value='" . $fila["id"] . "'>" . $fila["name"] . "</option>";
    }
    echo "</select>";



   ?>

</body>

</html>