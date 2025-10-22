<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select multiple</title>
</head>

<body>
    <form name="frmPersonas" id="frmPersonas" action="ej2-proceso.php" method="GET">
    <?php
    require_once("funcionesBD.php");

    $conexion = obtenerConexion();

    // Sustituir nombre_desplegable
    echo "<select multiple name='personas[]' id='personas[]'>";
    // Option para opción inicial, comentar si no debe salir
    // echo "<option value='-1'>Seleccione...</option>";

    // Sustituir nombre del campo clave y del campo valor.
    // Tb. nombre de la tabla
    $sql = "SELECT id,name FROM Person;";

    $resultado = mysqli_query($conexion, $sql);

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo " <option value='" . $fila["id"] . "'>" . $fila["name"] . "</option>";
    }
    echo "</select>";
   ?>
    <input type="submit" value="Aceptar" name="btnAceptar" id="btnAceptar"/>
    </form>

</body>

</html>