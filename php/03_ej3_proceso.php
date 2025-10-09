<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03_ej3_proceso.php</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>

<body>

    <?php
    // Recoger las variables que llegan desde el formulario
    $hora = $_GET['lstHora'];
    $minuto = $_GET['lstMinuto'];

    // Convertimos a número entero
    $hora_numero = intval($hora);

    switch ($minuto) {
        case "00":
            $minuto_letra = "en punto";
            break;
        case "15";
            $minuto_letra = "y cuarto";
            break;
        case "30";
            $minuto_letra = "y media";
            break;
        case "45";
            $minuto_letra = "menos cuarto";

            $hora_numero = (($hora_numero + 1) % 23);
            break;
    }

    switch ($hora_numero) {
        case 0:
        case 12:
            $hora_letra = "doce";
            break;
        case 1:
        case 13:
            $hora_letra = "una";
            break;
        case 2:
        case 14:
            $hora_letra = "dos";
            break;
        case 3:
        case 15:
            $hora_letra = "tres";
            break;
        case 4:
        case 16:
            $hora_letra = "cuatro";
            break;
        case 5:
        case 17:
            $hora_letra = "cinco";
            break;
        case 6:
        case 18:
            $hora_letra = "seis";
            break;
        case 7:
        case 19:
            $hora_letra = "siete";
            break;
        case 8:
        case 20:
            $hora_letra = "ocho";
            break;
        case 9:
        case 21:
            $hora_letra = "nueve";
            break;
        case 10:
        case 22:
            $hora_letra = "diez";
            break;
        case 11:
        case 23:
            $hora_letra = "once";
            break;
    }

    if ($hora_numero >= 6 && $hora_numero <= 12) {
        $tramo_dia = "mañana";
    } else if ($hora_numero >= 13 and $hora_numero <= 20) {
        $tramo_dia = "tarde";
    } else {
        $tramo_dia = "noche";
    }

    // La cita se ha elegido a las seis y media de la mañana.
    echo "La cita se ha elegido a " . ( ($hora_numero == 13 || $hora_numero == 1) ? "la " : "las " ) . $hora_letra . " " . $minuto_letra . " de la " . $tramo_dia;

    ?>
    <br>
    <a href="03_ej3_form.html">Otra cita</a>
</body>

</html>