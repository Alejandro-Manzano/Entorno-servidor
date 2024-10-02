<?php

$personas = array(
    "Carlos" => 1.75, 
    "María" => 1.62, 
    "Pedro" => 1.80, 
    "Ana" => 1.68, 
    "Javier" => 1.85
);

    $media = 0;
    echo "<table>
        <tr>
            <td><b>Nombre:</b></td>
            <td><b>Altura:</b></td>
        </tr>
    ";
    
    foreach ($personas as $nombre => $altura) {
        $media += $altura;
        echo "
            <tr>
            <td>$nombre</td>
            <td>$altura</td>
            </tr>
        ";

    }
    $mediaTotal = $media/5;
    echo "<tr>
        <td>Media:</td>
        <td>$mediaTotal</td>
    </tr>";

?>