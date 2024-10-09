<?php

include "243biblioteca.php";

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$arrayFunciones = ['sumar', 'restar', 'multiplicar', 'dividir'];

foreach ($arrayFunciones as $function) {
    $resultado = $function($num1, $num2);
    echo $resultado. "<hr>";
}

?>