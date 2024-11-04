<?php

function convertir($number){

    $contraseña = [];

    $letras = [];
    for ($i=ord("a"); $i <= ord("z") ; $i++) { 
        array_push($letras, chr($i));
    }

    for ($i=0; $i < $number ; $i++) { 
        
        $ran = rand(1,3);

        if ($ran == 1) {
            
            $contraseña[$i] = rand(1,9);
            echo $contraseña[$i];

        }elseif ($ran == 2) {
            
            $contraseña[$i] = $letras[rand(0,25)];
            echo $contraseña[$i];

        }elseif ($ran == 3) {
            
            $contraseña[$i] = strtoupper($letras[rand(0,25)]);
            echo $contraseña[$i];

        }

    }

}

echo "
<form action='' method='get'>
    <label>Escribe un número para decir el tamaño de tu contraseña</label>
    <input type='number' min='0' placeholder='Introduce un número' name='number'>
    <button type='submit'>Enviar</button>
</form>
";

if (isset($_GET['number'])) {

    $number = $_GET['number'];
    convertir($number);
 
} else {
    echo "Introduce un número";
}

?>