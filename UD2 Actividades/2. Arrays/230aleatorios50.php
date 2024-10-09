

<?php

/* Rellena un array con 50 números aleatorios comprendidos
entre el 0 y el 99, y luego muéstralo en una lista desordenada. Para crear un número aleatorio,
utiliza la función rand(inicio, fin). Por ejemplo: */

    $array = [];

    for ($i=0; $i < 50 ; $i++) { 
       
        array_push($array, rand(0,99));

        echo "
        <ul>
            <li>$array[$i]</li>
        </ul>";

    }

?>