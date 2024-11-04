<?php

    $cantidad = $_GET["name"];

    if ($cantidad > 0) {
        
        echo "<form action='237gestionarPersonas.php' method='get'>";
        echo "<input type='hidden' value='$cantidad' name='number'>";

        for ($i=0; $i < $cantidad ; $i++) { 
            echo"
                <input type='text' placeholder='Nombre persona $i' name='name$i'>
                <input type='number' placeholder='Altura persona $i' name='altura$i'>
                <input type='email' placeholder='Email persona $i' name='email$i'>
                <br><br>
            ";
        }
        echo"<button type='submit'>Enviar</button></form>";

    }

?>