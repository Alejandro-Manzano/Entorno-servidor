<?php

$al = [];
$media = 0;

for ($i=0; $i < 33 ; $i++) { 
   
    array_push($al, rand(0,100));
    $media+= $al[$i];
    echo $al[$i]. ", ";

}

    $mediaTotal = $media/33;
    echo "<hr> La media es, ". $mediaTotal;

    $mayor = $al[0];
    for ($i=1; $i < 33 ; $i++) { 
        if ($mayor<$al[$i]) {
            $mayor = $al[$i];
        }
    }
    echo "<hr> El mayor es, ". $mayor;

    $menor = $al[0];
    for ($i=1; $i < 33 ; $i++) { 
        if ($menor>$al[$i]) {
            $menor = $al[$i];
        }
    }
    echo "<hr> El menor es, ". $menor;

?>