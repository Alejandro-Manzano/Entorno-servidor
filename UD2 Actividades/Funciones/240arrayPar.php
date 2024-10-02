<?php

    function esPar($n){
       return ($n % 2 == 0) ? true : false;
    }
    echo esPar(8). "<hr>";


    function tamArray($tam, $min, $max){

        $listaAleatorios = [];

        echo "[";
        for ($i=0; $i < $tam; $i++) { 
            $random = rand($min, $max);
            $listaAleatorios[0] = $random;
            echo $listaAleatorios[0]. ", ";
        }
        echo "] <hr>";

    }
    tamArray(7, 45, 99);


    function esParArray(array $miArray){

        $acc = 0;
        for ($i=0; $i < count($miArray) ; $i++) { 
            if ($miArray[$i] % 2 == 0) {
                $acc++;
            }
        }
        echo "Hay ". $acc. " nºs pares";
    }

    $array2 = [3,6,4,2,8,9,10,7,7,6];
    esParArray($array2);
    

?>