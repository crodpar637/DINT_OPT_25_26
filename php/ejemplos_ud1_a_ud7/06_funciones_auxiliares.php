<?php
function longitud($cadena)
{
    return strlen($cadena);
}

function camelizarPalabras($cadena)
{
    $array_palabras = explode(" ", $cadena);

    // procesamos todas menos la primera palabra
    for ($i = 1; $i < count($array_palabras); $i++) {
        // ucwords pone la primera letra de una palabra en mayúsculas
        // sustituyo la palabra original por la que tiene mayúscula en la primera letra
        $array_palabras[$i] = ucwords($array_palabras[$i]);
    }

    return implode($array_palabras);
}


function descamelizarMetodo($cadenaCamelizada)
{

    $descamelizada = "";
    for ($i = 0; $i < mb_strlen($cadenaCamelizada, "UTF-8"); $i++) {
        if ((mb_substr($cadenaCamelizada, $i, 1, "UTF-8") >= "A" &&  mb_substr($cadenaCamelizada, $i, 1, "UTF-8") <= "Z")
            || in_array(mb_substr($cadenaCamelizada, $i, 1, "UTF-8"), ["Á","É","Í","Ó","Ú","Ñ"] ) ) 
        {
            $descamelizada .= "_" . mb_strtolower(mb_substr($cadenaCamelizada, $i, 1, "UTF-8"), 'UTF-8');
        } else {
            $descamelizada .= mb_substr($cadenaCamelizada, $i, 1, "UTF-8");
        }
    }

    return $descamelizada;
}

function pegaPorDelante($digito, $numero){
    // 5 y 76  --> 576
    $str_digito = strval($digito);
    $str_numero = strval($numero);

    $str_resultado = $str_digito . $str_numero;

    return (int) $str_resultado;
}
