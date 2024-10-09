<?php

    $nums = $_GET["numbers"];

    $nms = explode(" ", $nums); //separa la frase e ignora los espacios

    foreach($nms as $n){
        $integerNumber = (int)$n; //convierto la cadena a numero
        if ($integerNumber%2 == 0) {
            echo "<p>$integerNumber</p>";
        }
    }

?>