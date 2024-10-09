<?php

    //ucwords: devuelve la cadena con la primera letra mayuscula
    $a = "hola";
    $a2 = ucwords($a);
    echo $a2. "<br>";

    // strrev: devuelve la cadena del reves
    $e = "Hola que tal";
    $e2 = strrev($e);
    echo $e2. "<br>";

    //str_repeat: repite la cadena tantas veces como digas
    $i = "Hola";
    $i2 = str_repeat($i, 10);
    echo $i2. "<br>";

    //md5: sirve para obtener el hash encriptado de una cadena de texto
    $str = "Hello";
    echo md5($str);

?>
