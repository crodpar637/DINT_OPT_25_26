<?php

$a = 2;
{
	$a = 5;
	$b = 'Hola';
}
echo $a, $b;  // 5Hola

$a = 2;
if (true){
	$a = 5;
	$b = 'Hola';
}
echo $a, $b;  // 5Hola


function saludo(){
	global $nombre;
    if(true){     
    $nombre = 'Pepe';  
    }
    return "Hola " . $nombre . "<br>";
}

$nombre = 'Javier';
echo saludo();  

$nombre = 'Adrian';
echo saludo();  
echo $nombre . "<br>";