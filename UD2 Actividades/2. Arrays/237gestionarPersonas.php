<?php 

    echo "
        <style>
        table {
            border: 1px solid black;
            border-collapse: 'collapse';
        }
        td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        
    </style>
    ";

    $number = $_GET["number"];

    $principal = array();

    for ($i=0; $i < $number ; $i++) { 
        
        $nombre = $_GET["name$i"];
        $altura = $_GET["altura$i"];
        $email = $_GET["email$i"];

        $personaCompleta = array(
            "Nombre" => $nombre,
            "Altura" => $altura,
            "Email" => $email,
        );

        array_push($principal, $personaCompleta);
    
    }

    echo "<table>";

    echo "
            <tr>
            <td><b>Nombre</b></td>
            <td><b>Altura</b></td>
            <td><b>Email</b></td>
            </tr>
    ";

    foreach ($principal as $persona) {
        
        echo "
            <tr>
            <td>{$persona['Nombre']}</td>
            <td>{$persona['Altura']}</td>
            <td>{$persona['Email']}</td>
            </tr>
        ";

    }

    echo "</table>";

?>