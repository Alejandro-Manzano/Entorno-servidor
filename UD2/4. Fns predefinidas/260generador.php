<?php

    function generarLetra(){

        $mayusulas = [];
        for ($i=ord("a"); $i <= ord("z") ; $i++) { 
            array_push($mayusulas, chr($i));
        }
   
        $random = rand(1,2);

        if ($random===1) {
            $random2 = rand(0,25);
            echo $mayusulas[$random2];
        } elseif ($random === 2) {
            $random3 = rand(0,25);
            echo strtoupper($mayusulas[$random3]);
        }
    
    }

   generarLetra();

?>