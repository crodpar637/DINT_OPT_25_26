<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select multiple</title>
</head>

<body>
    <?php
    // Proceso de select multiple
    if (isset($_GET["personas"]) && is_array($_GET["personas"])) {
        $opcionesSeleccionadas = $_GET["personas"];
        // Procesa las opciones seleccionadas
        foreach ($opcionesSeleccionadas as $opcion) {
            echo "Opción seleccionada: " . $opcion . "<br>";
        }
        // Realiza cualquier otra operación con las opciones seleccionadas
    } else {
        echo "No se seleccionaron opciones.";
    }
    ?>
</body>

</html>