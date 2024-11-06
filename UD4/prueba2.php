<?php

// Verifica si el formulario fue enviado comprobando que el botón 'btnSubir' existe en $_POST
// y que su valor es "Subir". Solo ejecutará el código dentro del bloque si ambas condiciones son verdaderas.
if (isset($_POST["btnSubir"]) && $_POST['btnSubir'] == "Subir") {

    // Verificar que se haya cargado un archivo
    if (is_uploaded_file($_FILES["archivoEnviado"]["tmp_name"])) {

        // Obtener el nombre del archivo original
        $nombre = $_FILES['archivoEnviado']['name'];

        // Mover el archivo a la carpeta "descargas" con el nombre original
        if (move_uploaded_file($_FILES['archivoEnviado']['tmp_name'], "./descargas/{$nombre}")) {
            echo "Archivo subido: $nombre";
        } else {
            echo "Error al mover el archivo.";
        }

    } else {
        echo "No se ha subido ningún archivo.";
    }
}
?>
