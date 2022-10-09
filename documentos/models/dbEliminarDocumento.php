<?php
require_once "../../lib/database.php";
require_once "../../lib/funciones.php";

$db = conectarDB();

$archivoId = $_POST['archivo_id'];

$query = "SELECT
            archivo_nombre_sistema
        FROM
            archivos
        WHERE
            archivo_id = '$archivoId'";

$resultArchivos = mysqli_query($db, $query);
$archivos = mysqli_fetch_all($resultArchivos, MYSQLI_ASSOC); 
$archivo = $archivos[0]['archivo_nombre_sistema']; 

$query = "DELETE FROM
            archivos
        WHERE
            archivo_id = '$archivoId'";

mysqli_query($db, $query);

unlink("../../archivos/$archivo");

header("Location: /sharepoint/documentos/controllers/listadoDocumentos.php?ok=true");