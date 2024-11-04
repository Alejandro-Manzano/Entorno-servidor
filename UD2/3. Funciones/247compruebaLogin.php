<?php 

    $user = $_GET['user'];
    $pass = $_GET['password'];

    if ($pass == "1234" && $user == "alex") {
        $ascociativo = ["Usuario" => $user, "Contraseña" => $pass];
        include '247ok.php';
    } else {
        include '247ko.php';
    }

?>
