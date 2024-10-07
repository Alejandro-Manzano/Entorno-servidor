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

    include 'header.php';

    echo "<ul>
        <li>
            <p><b>Producto:</b></p>
            <p><b>Precio en euros:</b></p>
            <p><b>Precio en pesetas:</b></p>
        </li>
    ";

    for ($i=0; $i < $cantidad ; $i++) {

        $producto = $_GET["producto$i"];
        $precio = $_GET["precio$i"];
        $precioPesetas = euros2pesetas($precio);

        echo "<li>
            <p>$producto</p>
            <p>$precio</p>
            <p>$precioPesetas</p>
        </li>";
    }
    echo "</ul>";

    include 'footer.php';

?>