<?php

/* Reescribe el ejercicio anterior haciendo uso sólo de while.  */

$base = 3;
$exponente = 3;
$res = 1;
$a=1;
    while ($a <= $exponente) {
        $res *= $base;
        $a++;
    }
    echo $res;
?>