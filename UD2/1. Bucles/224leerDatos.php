
<!-- A partir de cantidad, prepara un formulario con tantas cajas de datos
como su valor. Finalmente, en 224sumarDatos.php: a partir de los datos de todas las cajas de la página
anterior, súmalos y muestra el total. -->

<?php

    $value = $_GET['cantidad'];

    echo "<form action='224sumarDatos.php' method='get'>";

    for ($i=1; $i <=$value ; $i++) { 
        echo "<input name='ipt$i' type='number'> <br><br>";
    }

    echo "<input type='hidden' name='cantidad' value='$value'>";
    echo "<button type='submit'>Send</button>";
    echo "</form>";

?>