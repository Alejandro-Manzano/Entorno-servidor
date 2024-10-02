<?php
/* 
Rellena un array de 100 elementos de manera aleatoria con valores M o F (por ejemplo ["M", "M", "F", "M", ...]). Una vez completado, vuelve a recorrerlo y
calcula cuantos elementos hay de cada uno de los valores almacenando el resultado en un array asociativo ['M' => 44, 'F' => 66] (no utilices variables para contar las M o las F).
Finalmente, muestra el resultado por pantalla  */

    $arraySex = [];

    $arrayElección = ["M", "F"];
    $asociativo = array();


    $asociativo["F"] = 0;
    $asociativo["M"] = 0;

    for ($i=0; $i < 50 ; $i++) { 
        
        $random = $arrayElección[rand(0, 1)];
        array_push($arraySex, $random);
        echo $arraySex[$i]. ", ";

        if ($random == "F") {  
            $asociativo["F"] ++;
        } elseif ($random == "M") {
            $asociativo["M"] ++;
        }

    }
    echo "<hr>";
    print_r ($asociativo);

?>