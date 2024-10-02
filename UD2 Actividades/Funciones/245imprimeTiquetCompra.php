<?php

    include '244euros.php';

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
            text-align: center;
            padding: 13px;
        }
        .black{
            background-color: beige;
            color: black;
        }
    </style>
    ";

    $cantidad = $_GET["cantidad"];

    echo "<table>
        <tr>
            <td><b>Producto:</b></td>
            <td><b>Precio en euros:</b></td>
            <td><b>Precio en pesetas:</b></td>
        </tr>
    ";

    for ($i=0; $i < $cantidad ; $i++) {

        $producto = $_GET["producto$i"];
        $precio = $_GET["precio$i"];
        $precioPesetas = euros2pesetas($precio);

        echo "<tr>
            <td>$producto</td>
            <td>$precio</td>
            <td>$precioPesetas</td>
        </tr>";
    }
    echo "</table>";

?>