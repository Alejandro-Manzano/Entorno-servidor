<?php

function procesarFrase($frase) {
   
    $caracteres = str_split($frase);
    $longitud = count($caracteres);

    for ($i = 0; $i < $longitud; $i++) {
        if ($i % 2 == 0) {
            echo $caracteres[$i];
        }
    }
}

echo "
    <form action='' method='get'>
        <input placeholder='Escribe una frase' name='frase'>
        <button type='submit'>Enviar</button>
    </form>
";

if (isset($_GET['frase'])) {
    procesarFrase($_GET['frase']);
}

?>
