<?php
$nombre = $_GET['txtNombre'];
$edad = $_GET['txtEdad'];

echo "Hola" . htmlspecialchars($nombre) . "<br>";
echo "Tú edad es $edad";

