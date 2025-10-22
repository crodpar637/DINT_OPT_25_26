<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Números menores de 50 no divisibles por 3</h2>
    <?php
        $resultado = "";
        for($i=1; $i<=50; $i++){
            if($i % 3 != 0){
                $resultado .= (($i == 1) ? " " : ", ") . $i;
            }
        }

        echo "<p>" . $resultado . "</p>";
    ?>
</body>
</html>