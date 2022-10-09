<?php 
require_once "../../lib/database.php";
require_once "../../lib/funciones.php";

$db = conectarDB();

$archivoId            = $_POST['archivo_id'];
$documentoNombre      = mysqli_real_escape_string($db, $_POST['documento_nombre']);
$documentoDescripcion = mysqli_real_escape_string($db, $_POST['documento_comentario']);

$query = "UPDATE
            archivos
        SET
            archivo_nombre      = '$documentoNombre',
            archivo_descripcion = '$documentoDescripcion'
        WHERE
            archivo_id = '$archivoId'";

mysqli_query($db, $query);

header("Location: /sharepoint/documentos/controllers/listadoDocumentos.php?ok=true");