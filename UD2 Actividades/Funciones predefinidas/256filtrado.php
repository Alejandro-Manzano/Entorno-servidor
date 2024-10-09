<?php

    $nums = $_GET["numbers"];

    $nms = explode(" ", $nums);
    print_r($nms);
    
    foreach($nms as $n){
        $integerNumber = (int)$n; //convierto la cadena a numero
        if ($integerNumber%2 == 0) {
            echo "<p>$integerNumber</p>";
        }
    }

?>