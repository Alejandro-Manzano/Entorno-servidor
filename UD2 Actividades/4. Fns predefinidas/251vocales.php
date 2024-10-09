<?php

function printVocales($frase){

    $caracteres = str_split($frase);
    $longitud = count($caracteres);

    $acc= 0;
    $ecc=0;
    $icc=0;
    $occ=0;
    $ucc=0;
    
    foreach($caracteres as $car){

        if ($car == "a") {
            $acc++;
        } elseif ($car == "e"){
            $ecc++;
        } elseif ($car == "i"){
            $icc++;
        } elseif ($car == "o"){
            $occ++;
        } elseif ($car == "u"){
            $ucc++;
        }

    }
    $total = $acc + $ecc + $icc + $occ + $ucc;
    echo "A: " . $acc . "<br>";
    echo "E: " . $ecc . "<br>";
    echo "I: " . $icc . "<br>";
    echo "O: " . $occ . "<br>";
    echo "U: " . $ucc . "<br>";

    echo "Total: " . $total;

}

echo "
    <form action='' method='get'>
        <input placeholder='Escribe una frase' name='frase'>
        <button type='submit'>Enviar</button>
    </form>
";

if (isset($_GET['frase'])) {

    $frase = $_GET['frase'];
    printVocales($frase);
 
}

?>
