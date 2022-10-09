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

$resultArchivo = mysqli_query($db, $query);
$archivo = mysqli_fetch_all($resultArchivo, MYSQLI_ASSOC);   
$nombreArchivo = $archivo[0]['archivo_nombre_sistema'];

header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$nombreArchivo");

readfile("../../archivos/$nombreArchivo");
