<?php

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
            padding: 13px;
        }
        .black{
            background-color: beige;
            color: black;
        }
    </style>
    ";


$filas = 6;
$columnas = 9;
$totalNumeros = $filas * $columnas;


$numeros = [];

while (count($numeros) < $totalNumeros) {
    $num = rand(100, 999);
    if (!in_array($num, $numeros)) {
        $numeros[] = $num;
    }
}

$mayor = $numeros[0];
for ($z = 1; $z < count($numeros); $z++) {
    if ($numeros[$z] > $mayor) { 
        $mayor = $numeros[$z];
    }
}
echo "Mayor: ". $mayor. " // ";

$menor = $numeros[0];
for ($z = 1; $z < count($numeros); $z++) {
    if ($numeros[$z] < $menor) { 
        $menor = $numeros[$z];
    }
}
echo "Menor: ".$menor;

$arrayBidimensional = [];
$indice = 0;
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $arrayBidimensional[$i][$j] = $numeros[$indice];
        $indice++;
    }
}

echo "<table>";
for ($i = 0; $i < $filas; $i++) {
    // Asegurarte de agregar la clase de fila
    echo "<tr class='f$i'>";
    for ($j = 0; $j < $columnas; $j++) {
        
        
        if($arrayBidimensional[$i][$j] == $mayor){
            echo "<td id='mayor' class='c$j'>" . $arrayBidimensional[$i][$j] . "</td>"; 
            $columnaMayor = $j;  
        } 
       
        elseif ($arrayBidimensional[$i][$j] == $menor) {
            echo "<td id='menor' class='c$j'>" . $arrayBidimensional[$i][$j] . "</td>";  
            $filaMenor = "f".$i;  
        }
        else{
            echo "<td class='c$j'>" . $arrayBidimensional[$i][$j] . "</td>"; 
        }
    }
    echo "</tr>";
}

echo "</table>";

echo "<style>
    .c$columnaMayor {
        background-color: #92C5FC;
    }
    .$filaMenor td {
        background-color: #77DD77;
    }
    #mayor{
        color: red;
        font-weight: bold;
    }
    #menor{
        color: red;
        font-weight: bold;
    }
</style>";
?>


