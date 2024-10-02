<?php

    $asociativo = array(
            array("nombre" => "Juan Pérez", "altura" => 1.75, "email" => "juan.perez@example.com"),
            array("nombre" => "María López", "altura" => 1.65, "email" => "maria.lopez@example.com"),
            array("nombre" => "Carlos García", "altura" => 1.80, "email" => "carlos.garcia@example.com"),
            array("nombre" => "Ana Fernández", "altura" => 1.60, "email" => "ana.fernandez@example.com"),
            array("nombre" => "Luis Martínez", "altura" => 1.70, "email" => "luis.martinez@example.com")
    );

    echo "<table>
        <tr>
        <td><b>Nombre: </b></td>
        <td><b>Altura: </b></td>
        <td><b>Email: </b></td>
        </tr>
    ";

    foreach ($asociativo as $persona) {
            
        echo "
        <tr>
        <td>{$persona['nombre']}</td>
        <td>{$persona['altura']}</td>
        <td>{$persona['email']}</td>
        </tr>
    ";
    
    }

    echo "</table>";

?>