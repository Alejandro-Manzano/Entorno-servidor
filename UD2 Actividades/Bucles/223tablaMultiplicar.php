<?php

/* Muestra dentro de una tabla HTML la tabla demultiplicar del numero que reciba como parámetro.
 Utiliza <thead> con sus respectivos <th>y <tbody> para dibujar la tabla. Por ejemplo: */


    $num = 7;
   

    for ($i=0; $i <=10 ; $i++) { 
        $res = $num *$i;
        echo "
        <table>
            <tr>
                <td>$num</td>
                <td>*</td>
                <td>$i</td>
                <td>=</td>
                <td>$res</td>
            </tr>
        </table>
        ";
    }

?>