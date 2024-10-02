<?php

    $filas2 = $_GET["fil"];
    $columnas2 = $_GET["col"];

    echo "
        <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        tr,td {
            border: 1px solid black;
            padding: 8px;
        }
        </style>
    ";

    echo "<table>";

    for ($i = 1; $i <= $filas2; $i++) {
        echo "<tr>"; 
        for ($j = 1; $j <= $columnas2; $j++) {
            echo "<td></td>"; 
        }
        echo "</tr>"; 
    }
    echo "</table>";

?>