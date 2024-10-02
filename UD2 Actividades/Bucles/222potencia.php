<?php

/* A partir de una base y exponente, mediante la acumulación de productos, calcula la potencia utilizando la instrucción for */

$base = 3;
$exponente = 4;
$res = 1;

   for ($i=1; $i <= $exponente; $i++) { 
        $res*=$base;
   }
   echo $res;
?>