<?php
require_once "../../lib/database.php";
require_once "../../lib/funciones.php";

$db = conectarDB();

$query = "SELECT
            archivo_id,
            archivo_nombre,                   
            archivo_descripcion,
            archivo_fecha_carga,              
            COALESCE(archivo_fecha_ultima_modificacion, '-') as modificado
        FROM
            archivos
        ORDER BY
            archivo_fecha_carga DESC";

try {
    $resultArchivos = mysqli_query($db, $query);
    $archivos = mysqli_fetch_all($resultArchivos, MYSQLI_ASSOC);   
} catch (\Throwable $th) {
    header('Location: /sharepoint?ok=err-doc');
exit;
}

require_once "../views/listadoDocumentos.html";