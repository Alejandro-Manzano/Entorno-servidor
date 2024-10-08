<?php

function analizadorPalabras($frase){

    $caracteres = str_split($frase);
    $longitud = count($caracteres);
    $longitudPalabras = str_word_count($frase);

    $letrasAcc = 0;

    for ($i=0; $i < $longitud; $i++) { 
        if ($caracteres[$i] != " ") {
            $letrasAcc++;
        }
    }
 
    echo $frase. " ==> ";
    echo $letrasAcc. " letras y ";
    echo $longitudPalabras. " palabras. ". "<br>";
    echo "Imprimimos tantas líneas como palabras hay: ";
    for ($i=0; $i < $longitudPalabras ; $i++) { 
        echo "<hr>";
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
    analizadorPalabras($frase);
 
} else {
    echo "Introduce una frase";
}

?>