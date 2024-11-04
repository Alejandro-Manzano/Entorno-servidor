<?php

/* Reescribe el ejercicio anterior haciendo uso sólo de do-while */

$base = 3;
$exponente = 3;
$res = 1;
$a=1;

do {
    
    $res*=$base;
    $a ++;

} while ($a <= $exponente);

echo $res;

?>