<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        echo "Ejercicio 1: Dados dos números, mostrar la suma, resta, división y multiplicación de ambos" . "<br>";

        $a = 2;
        $b = 4;

        echo $a + $b. ", "; 
        echo $a - $b. ", "; 
        echo $a * $b. ", "; 
        echo $a / $b. ", "; 
 

        echo "<br><br>"."Ejercicio 2: Realiza un programa que reciba una cantidad de minutos y 
        muestre por pantalla a cuantas horas y minutos corresponde. Por ejemplo: 1000 minutos son 16 horas y 40 minutos."."<br>";
        
        $minutos = 199;
        echo "Minutos dados: $minutos <br>";
        $horasYm = $minutos/60;

        //Parte entera
        $parteEntera = floor($horasYm);
        //Parte decimal
        $parteDecimal = $horasYm - $parteEntera;
        $redondear = round($parteDecimal, 2);
        $totalS = $redondear*100;

        echo "Horas: $parteEntera <br>";
        echo "Minutos: $totalS";


        echo "<br><br>". "Ejercicio 3: Dado un número de dos cifras, diseñe un algoritmo que permita obtener el número
        invertido. Ejemplo, si se introduce 23 que muestre 32."."<br>";

        $numDado = 27;
        echo "Número principal: $numDado <br>";


        echo "<br><br>". "Ejercicio 4: Diseñar un algoritmo que nos diga el dinero que tenemos (en euros y céntimos) después 
        de pedirnos cuantas monedas tenemos (de 2€, 1€, 50 céntimos, 20 céntimos o 10
        céntimos)."."<br>";

        $moneda2 = 21423; 
        $moneda1 = 5342;
        $moneda05 = 44321;
        $moneda02 = 9439;
        $moneda01 = 445421431;

        $total = $moneda2*2 + $moneda1 + $moneda05*0.5 + $moneda02*0.2 + $moneda01*0.6;
        echo $total. "<br>";
        $euros = floor($total);
        echo "Euros: $euros <br>";
        //Parte decimal
        $partDecimal = $total - $euros;
        $red = round($partDecimal, 2);
        
        echo "Cts: $red <br>";


        echo "<br><br>"."Ejercicio 5: Realiza un algoritmo que calcule la potencia, para ello pide por teclado la base y el exponente. Pueden ocurrir tres cosas:
                • El exponente sea positivo, sólo tienes que imprimir la potencia.
                • El exponente sea 0, el resultado es 1.
                • El exponente sea negativo, el resultado es 1/potencia con el exponente positivo."."<br>";

    
        $base = 3;
        $exponente = -3;

        $result = $base ** $exponente;

        echo $result;


    echo "<br><br>"."Ejercicio 6: Algoritmo que pida dos números ‘nota’ y ‘edad’ y un carácter ‘sexo’ y muestre el mensaje
        ‘ACEPTADA’ si la nota es mayor o igual a cinco, la edad es mayor o igual a dieciocho y el
        sexo es ‘F’. En caso de que se cumpla lo mismo, pero el sexo sea ‘M’, debe imprimir
        ‘POSIBLE’. Si no se cumplen dichas condiciones se debe mostrar ‘NO ACEPTADA’"."<br>";

        $nota = 8;
        $edad = 17;
        $sexo = "F";

        if($nota >=5 && $edad>=18 && $sexo == "F"){
            echo "ACEPTADA";
        } elseif ($nota >=5 && $edad>=18 && $sexo == "M") {
            echo "POSIBLE";
        }else{
            echo "NO ACEPTADA";
        }

    echo "<br><br>"."Ejercicio 7: Escribe un programa que, dados dos números, uno real (base) y un entero positivo
            (exponente), saque por pantalla el resultado de la potencia. No se puede utilizar el
            operador de potencia"."<br>";

            $base = 2;
            $ex = -9;
        
            if($ex == 0){
                echo "Resultado: 1";
            }
           if($ex > 0){
                    $res = 1;
                    for ($i = 1; $i <= $ex; $i++) {
                    $res*=$base;
                    }
                    echo $res;
            }
            if($ex < 0){
                $resT=1;
                $exT = $ex * -1;
                for ($i = 1; $i <= $exT; $i++) {
                    $resT*=$base;
                }
                echo 1/$resT;
            }    
            
    echo "<br><br>"."Ejercicio 8: Programa que lea 3 datos de entrada A, B y C. Estos corresponden a las dimensiones de los lados de un triángulo. El programa debe determinar que tipo de
            triangulo es, teniendo en cuenta los siguiente:
            • Si se cumple Pitágoras entonces es triángulo rectángulo
            • Si sólo dos lados del triángulo son iguales entonces es isósceles.
            • Si los 3 lados son iguales entonces es equilátero.
            • Si no se cumple ninguna de las condiciones anteriores, es escaleno. "."<br>";

       $ladoA = 2;
       $ladoA2 = $ladoA**2;
       $ladoB = 5;
       $ladoB2 = $ladoB**2;
       $ladoC = 3;
       $ladoC2 = $ladoC**2;

    
       if(($ladoA == $ladoB && $ladoA != $ladoC && $ladoC != $ladoB) || ($ladoA == $ladoC && $ladoA != $ladoB && $ladoC != $ladoB) || ($ladoC == $ladoB && $ladoA != $ladoC && $ladoA != $ladoB)){
        echo "Es isósceles "."<br>";
        if($ladoA2 + $ladoB2 = $ladoC2 || $ladoA2 + $ladoC2 = $ladoB2 || $ladoC2 + $ladoB2 = $ladoA2 ){
            echo "Cumple pitágoras";
       }
       }
       elseif($ladoA == $ladoB && $ladoA == $ladoC && $ladoC == $ladoB ){
        echo "Es equilatero"."<br>";
        if($ladoA2 + $ladoB2 = $ladoC2 || $ladoA2 + $ladoC2 = $ladoB2 || $ladoC2 + $ladoB2 = $ladoA2 ){
            echo "Cumple pitágoras";
       }
       }else{
        echo "Es ecaleno ". "<br>";
        if($ladoA2 + $ladoB2 = $ladoC2 || $ladoA2 + $ladoC2 = $ladoB2 || $ladoC2 + $ladoB2 = $ladoA2 ){
            echo "Cumple pitágoras";
       }
       }
        
    ?>
    
</body>
</html>