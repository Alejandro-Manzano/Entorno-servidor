<?php

    function mayor(): int{
        
        //Esta función seleciona todos los argumentos que metes a la funcion
        $nums = func_get_args();

        $mayor = $nums[0];

        foreach($nums as $num){
            if($mayor < $num){
                $mayor = $num;
            }
        }
        return $mayor;
    }
    echo mayor (1,2,3,4,5,6,785492,1,64126489678967). "<hr>";


    function concatenar() : string {

        $palabras = func_get_args();
        $acumulacion = "";

        foreach ($palabras as $palabra) {
           $acumulacion .= $palabra. " "; //.= es el operador d ela concatenacion
        }
        return $acumulacion;

    }
    echo concatenar("Hola", "que", "tal"). "<hr>";

?>