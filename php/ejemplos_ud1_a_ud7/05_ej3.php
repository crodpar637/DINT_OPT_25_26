<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="05_ej3.php" method="get">
        <label>Numero 1</label>
        <input type="text" name="n1" id="n1">
        <br>
        <label>Numero 2</label>
        <input type="text" name="n2" id="n2">
        <br>
        <input type="submit" name="btnEnviar">
    </form>

    <?php
    if (isset($_GET["n1"]) && isset($_GET["n2"])) {
        // Recojo las variables
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];

        $numeros = []; // array vacío

        // Rellenar con 100 números aleatorios entre 0 y 20
        for ($i = 0; $i < 100; $i++) {
            $numeros[] = rand(0, 20); // Inserto al final un nº aleatorio
        }

        echo "<p>Array original<p>";
        foreach ($numeros as $num) {
            echo "<span>$num</span> ,";
        }

        $modificado = [];
        echo "<p>Array modificado<p>";
        foreach ($numeros as $num) {
            if ($num == $n1) { // Si encuentro el primer numero
                $modificado[] = $n2; // lo cambio por el segundo en el array modificado
                echo "<span style='color:red;font-weight:bold'>$n2</span> ,";
            } else {
                $modificado[] = $num;
                echo "<span>$num</span> ,";
            }
        }
    } else {
        echo "<p> Introduce dos numeros </p>";
    }
    ?>

</body>

</html>