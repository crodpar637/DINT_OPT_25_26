<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "06_funciones_auxiliares.php";

        echo "Longitud de una cadena:" . longitud("En un lugar de la Mancha") . "<br>";

        echo "Cadena camelizada:" . camelizarPalabras("se hace lo que se puede") . "<br>";

        echo "Cadena descamelizada: " .descamelizarMetodo("seHaceLoQueÉticaPuedeConLasÁguilas") . "<br>";

        echo "Pega por delante: " . pegaPorDelante(5, 76);

    ?>
</body>
</html>