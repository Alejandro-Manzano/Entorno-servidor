<?php

function convertirAPal($frase) {

    // Convierto la frase a una cadena y saco su longitud
    $cadena_limpia = str_replace(' ', '', $frase); // Quitar espacios directamente de la frase
    $vuelta = strrev($cadena_limpia);
    
    if ($cadena_limpia === $vuelta) {
        echo "$frase es un palíndromo <br>";
        echo "$cadena_limpia = $vuelta";
    } else {
        echo "$frase no es un palíndromo";
    }
}

echo "
<form action='' method='get'>
    <input placeholder='Escribe una frase' name='frase' required>
    <button type='submit'>Enviar</button>
</form>
";

if (isset($_GET['frase'])) {
    $frase = $_GET['frase'];
    convertirAPal($frase);
} else {
    echo "Introduce una frase";
}

?>
