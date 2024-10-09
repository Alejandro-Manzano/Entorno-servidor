<?php

    $value2 = $_GET["cantidad"];

    $suma = 0;

    for ($i = 1; $i <= $value2; $i++) {
        $suma += $_GET["ipt$i"];
    }

    echo $suma;

?>