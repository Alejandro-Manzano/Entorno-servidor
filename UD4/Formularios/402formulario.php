<?php
   
    echo "<style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            }
        </style>";

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $sexo = $_POST['sexo'];
    $convivientes = $_POST['convivientes'];
    $aficiones = isset($_POST["aficiones"]) ? implode(",", $_POST["aficiones"]): "No hay aficiones";
    $menu = isset($_POST["menu[]"]) ? $_POST["menu"] : "No hay platos";
    

    echo "
        <table>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Nombre y Apellidos</td>
                <td>$nombre</td>
            </tr>   
            <tr>
                <td>Email</td>
                <td>$email</td>
            </tr>
            <tr>
                <td>URL de la Página Personal</td>
                <td>$url</td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td>$sexo</td>
            </tr>
            <tr>
                <td>Número de Convivientes</td>
                <td>$convivientes</td>
            </tr>
            <tr>
                <td>Aficiones</td>
                <td>$aficiones</td>
            </tr>
            <tr>
                <td>Menú Favorito</td>
                <td>$menu</td>
            </tr>
        </table>";
?>