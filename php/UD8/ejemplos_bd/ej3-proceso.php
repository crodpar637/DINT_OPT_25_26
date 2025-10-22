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
    if (isset($_GET["tabla"]) && is_array($_GET["tabla"])) {
        $opcionesSeleccionadas = $_GET["tabla"];
        // Procesa las opciones seleccionadas
        foreach ($opcionesSeleccionadas as $opcion) {
            echo "Opción seleccionada: " . $opcion . "<br>";
        }
        // Realiza cualquier otra operación con las opciones seleccionadas
    } else {
        echo "No se seleccionaron opciones.";
    }


    if (is_array($_GET['tabla'])) {
        // Procesar array de Checkbox para generar lista texto separada por comas
        $array_checks = $_GET['tabla'];
        // Esto vale si los valores son numéricos
        $texto_IN = implode("," , $array_checks );
        // Si es para montar una lista de cadenas o fechas entrecomilladas
        // $texto_IN = "";
        // for ($i = 0; $i < count($array_checks); $i++) {
        //     $texto_IN .= "'" . $array_checks[$i] . "'";
        //     if ($i < (count($array_checks) - 1)) {
        //         $texto_IN .= ",";
        //     }
        // }
        // $texto_IN sirve para una SELECT donde campo IN ( $texto_IN )
        echo "Texto IN:" .$texto_IN;
    } else {
        // No se ha seleccionado ninguno
        echo "<p>Debe seleccionar alguno</p>";
    }
    ?>
</body>

</html>