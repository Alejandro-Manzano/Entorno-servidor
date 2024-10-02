<?php 

$arr = [ "Si", "no", "quizás", "claro que sí", "por supuesto que no", "no lo tengo claro", "seguro", "yo diría que sí", "ni de coña"];

$valor = $arr[rand(0, count($arr) - 1)]; 

echo $valor;

?>
