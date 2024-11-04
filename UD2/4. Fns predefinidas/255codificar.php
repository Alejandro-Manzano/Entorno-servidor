<?php

function convertir($frase, $number){

    //convierto la frase a una cdena y saco su longitud
    $caracteres = str_split($frase);
    $longitud = count($caracteres);
    
    if ($number == 0) {
        echo $frase;
    }else{

        foreach ($caracteres as $c) {
            echo ord($c)+$number;
        }

    }

}

echo "
<form action='' method='get'>
    <input placeholder='Escribe una frase' name='frase'>
    <input type='number' min='0' placeholder='Introduce un número no negativo' name='number'>
    <button type='submit'>Enviar</button>
</form>
";

if (isset($_GET['frase']) && isset($_GET['number'])) {

    $frase = $_GET['frase'];
    $number = $_GET['number'];
    convertir($frase, $number);
 
} else {
    echo "Introduce una frase";
}

?>