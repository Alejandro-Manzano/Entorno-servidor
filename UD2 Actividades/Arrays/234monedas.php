<?php
function descomponerDinero($cantidad) {
    
    $denominaciones = [
        "Billetes de 500" => 500,
        "Billetes de 200" => 200,
        "Billetes de 100" => 100,
        "Billetes de 50" => 50,
        "Billetes de 20" => 20,
        "Billetes de 10" => 10,
        "Billetes de 5" => 5,
        "Monedas de 2" => 2,
        "Monedas de 1" => 1
    ];
    

    $resultado = [];
    

    foreach ($denominaciones as $nombre => $valor) {
        if ($cantidad >= $valor) {
            // Intval lo convierte en entero
            $cantidadBilletesOMonedas = intval($cantidad / $valor);
            $resultado[$nombre] = $cantidadBilletesOMonedas;
        
            $cantidad = $cantidad % $valor;
        }
    }
    
    return $resultado;
}


function mostrarResultado($cantidad) {
    $descomposicion = descomponerDinero($cantidad);
    echo "La cantidad es: ". $cantidad. "<br>";
    echo "<ul>";
    foreach ($descomposicion as $nombre => $cantidad) {
        echo "<li>$nombre: $cantidad</li>";
    }
    echo "</ul>";
}


$cantidad = 1287; 
mostrarResultado($cantidad);
?>
