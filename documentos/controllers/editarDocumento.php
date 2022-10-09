<?php
require_once "../../lib/database.php";
require_once "../../lib/funciones.php";

$db = conectarDB();

$archivoId = $_GET['id'];

$query = "SELECT
            archivo_nombre,                   
            archivo_descripcion
        FROM
            archivos
        WHERE
            archivo_id = '$archivoId'";

try {
    $resultArchivos = mysqli_query($db, $query);
    $archivos = mysqli_fetch_all($resultArchivos, MYSQLI_ASSOC); 
    $archivo = $archivos[0]; 
} catch (\Throwable $th) {
    header('Location: /sharepoint?ok=err-doc');
    exit;
}

require_once "../views/editarDocumento.html";