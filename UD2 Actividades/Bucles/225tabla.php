<?php

    $filas2 = $_GET["filas"];
    $columnas2 = $_GET["columnas"];

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
            echo "<td>Fila $i, col $j</td>"; 
        }
        echo "</tr>"; 
    }
    echo "</table>";

?>