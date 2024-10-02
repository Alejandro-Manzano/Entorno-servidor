<?php

    $filas = 11;
    $columnas = 11;

    echo "
        <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        tr,td {
            border: 1px solid black;
        }
        td{
            width: 20px;
            height: 20px;
            text-align: center;
            padding: 8px;
        }

        .blue {
            background-color: blue;
            color: white;
        }

        .orange {
            background-color: orange;
            color: white;
        }

        </style>
    ";

    echo "<table>";

    for ($i = 0; $i <= $filas; $i++) {
        echo "<tr>"; 
        for ($j = 0; $j <= $columnas; $j++) {
            
            $val = $j-1;
            $val2 = $i-1;
            $val3 = $val * $val2;

            if ($i==0 && $j==0) {
                echo "<td class='blue'>X</td>";
            }
            elseif ($i==0 && $j>0) {
                echo "<td class='blue'>$val</td>";
            }
            elseif ($j==0 && $i>0) {
                echo "<td class='orange'>$val2</td>";
            }elseif ($i!=0 && $j!=0) {
                echo "<td>$val3</td>";
            }
            else{
                echo "<td></td>";
            }

        }
        echo "</tr>"; 
    }

    echo "</table>";

?>