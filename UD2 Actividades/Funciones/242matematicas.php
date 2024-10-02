<?php

    /* function digitos(int $num): int {
        $tamaño = strlen((string)$num); 
        return $tamaño;
    }
    echo digitos(777). "<hr>";  */

    function digitos(int $num): int {

        if ($num == 0) {
            return 1;
        }else {
            $num = abs($num); //convierto el número siempre a positivo
            $acc = 0;

            while ($num > 0) {
               $num = intdiv($num,10); //hago la dividsión entera
               $acc++;
            }
            return $acc;
        }

    }
    echo digitos(45679999). "<hr>";

    /* function digitoN(int $num, int $pos): int {
        $digitos = str_split((string)$num);

        $posTotal = $pos+1;
        return $digitos[$posTotal];
    }
    echo digitoN(645, 1). "<hr>"; */

    function digitoN(int $num, int $pos): int {
        // Asegurarse de trabajar con un valor positivo, sin importar si es negativo
        $num = abs($num);
    
        // Calcular la cantidad de dígitos del número
        $digitos = 0;
        $temp = $num;
        while ($temp > 0) {
            $temp = intdiv($temp, 10); // Realiza la división entera, eliminando el último dígito
            $digitos++; // Incrementa el contador de dígitos
        }
    
        // Verificar si la posición solicitada es válida
        if ($pos < 1 || $pos > $digitos) {
            return -1; // Si la posición no es válida, retorna -1
        }
    
        // Calcular el divisor que necesitamos para llegar al dígito deseado
        // Por ejemplo, si el número es 4567 y queremos el segundo dígito, necesitamos dividir por 100
        $divisor = pow(10, $digitos - $pos);
        
        // Dividimos el número entre el divisor y luego usamos % 10 para obtener el dígito en la posición deseada
        return intdiv($num, $divisor) % 10;
    }
    
    // Ejemplo de uso
    echo digitoN(4567, 2). "<hr>"; // Salida: 5
    


  /*   function quitaPorDetras(int $num, int $cant): int {

        $digitos = str_split((string)$num);
        
        for ($i=0; $i < $cant ; $i++) { 
            array_pop($digitos);
        }
        foreach ($digitos as $dig) {
            return $dig;
        }
    }
    echo quitaPorDetras(2364, 2); 
 */

    function quitaPorDetras(int $num, int $cant): int {
       
            $num = abs($num); //convierto el número siempre a positivo
            $acc = 1;

            while ($acc <= $cant) {
               $num = intdiv($num,10); //hago la dividsión entera
               $acc++;
            }
        return $num;
    }
    echo quitaPorDetras(34,1). "<hr>";


   /*  quitaPorDelante(int $num, int $cant): int {



    } */

?>
