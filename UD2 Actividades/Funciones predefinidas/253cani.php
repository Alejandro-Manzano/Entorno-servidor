<?php

function convertirACani($frase){

    //convierto la frase a una cdena y saco su longitud
    $caracteres = str_split($frase);
    $longitud = count($caracteres);

    echo "Frase: ";
    foreach($caracteres as $ca){
        echo $ca;
    }
    echo "<br><br>";

    //array en el que tengo las posiciones de los espacios
    $posiciones = [];

    //guardo donde hay espoacios en blanco en la frase
    for ($i=0; $i < $longitud; $i++) { 

        if ($caracteres[$i] == " ") {
            array_push($posiciones, $i);
        }
    }

    //tamaño del array donde están los espacios en blanco
    $tamPosiciones = count($posiciones);

    //le quito los espacio a la cadena
    $cadena_limpia = str_replace(' ', '', $frase);
    //hago un array de la cadena sin espacios
    $caracteres2 = str_split($cadena_limpia);
    //tamaño de la cadena sin espacios
    $longitud2 = count($caracteres2);
    
    //convierto 1 si 1 no a mayuscula
    for ($i=0; $i < $longitud2; $i++) {  
        if ($i%2 == 0) {
            $caracteres2[$i] = strtoupper($caracteres2[$i]);
            $caracteres2[$i];
        } else {
            $caracteres2[$i];
        }
    }

    //Una vez que est amodo cani introduzco los espacios que guarde antes
    for ($i=0; $i < $tamPosiciones; $i++) { 
        array_splice($caracteres2, $posiciones[$i], 0, ' ');
    }

    foreach($caracteres2 as $car){
        echo $car;
    }
}

echo "
<form action='' method='get'>
    <input placeholder='Escribe una frase' name='frase'>
    <button type='submit'>Enviar</button>
</form>
";

if (isset($_GET['frase'])) {

    $frase = $_GET['frase'];
    convertirACani($frase);
 
} else {
    echo "Introduce una frase";
}

?>