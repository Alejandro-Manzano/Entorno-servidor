<?php  

/* $name = $_GET['name'];
$apellido1 = $_GET['apellido1'];

echo "Hola $name $apellido1" . "<br>" ; */


if(isset($_GET['base'])/* si existe */ && isset($_GET['exponente']) && !empty($_GET['base']) && !empty($_GET['exponente'])/* si no es vacia  */){
    $base = $_GET['base'];
    $exponente = $_GET['exponente'];
    
    $resultado = $base ** $exponente;
    
    echo $resultado ;
} else{
    echo "No hay datos o no existe";
}

$nota = $_GET['nota'];
$edad = $_GET['edad'];
$sexo = $_GET['sexo'];

if($nota >=5 && $edad>=18 && $sexo == "F"){
    echo "ACEPTADA";
} elseif ($nota >=5 && $edad>=18 && $sexo == "M") {
    echo "POSIBLE";
}else{
    echo "NO ACEPTADA";
}

?>
