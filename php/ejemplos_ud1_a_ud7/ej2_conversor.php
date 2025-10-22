<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="conversor_resultado.php" method="get" name="frmConversor">
        <input type="text" name="numero" id="numero" placeholder="millas por galon"/>
        <input type="submit" value="Calcular"/>
    </form>

    <script>
        frmConversor.addEventListener("submit", validarDatos);

        function validarDatos(event){
            let num = parseInt(frmConversor.numero.value.trim());

            if( isNaN(num) ){
                event.preventDefault(); // Cancelar el submit
                alert(frmConversor.numero.value.trim()+ " no es un número");
            } else {
                if( num < 1 || num > 100){
                    event.preventDefault(); // Cancelar el submit
                    alert(num + " debe estar entre 1 y 100");
                }
            }
        }
    </script>
</body>
</html>