<?php
   
    if (isset($_GET['cnt']) && is_numeric($_GET['cnt'])) {
        $cantitad = intval($_GET['cnt']); 

       
        echo "<form method='get' action='246listaCompra.php'>";
        for ($i = 0; $i < $cantitad; $i++) {
            echo "<input name='producto$i' placeholder='producto $i'> ====> <input name='precio$i' placeholder='precio $i'> <br><br>";
        }
       
        echo "<input type='hidden' value='$cantitad' name='cantidad'>"; 
        echo "<button type='submit'>Enviar</button>";
        echo "</form>";
    } else {
        echo "Por favor, proporciona un número válido para 'cnt'.";
    }
    
?>
