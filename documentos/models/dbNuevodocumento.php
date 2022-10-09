<?php
require_once "../../lib/database.php";
require_once "../../lib/funciones.php";

$db = conectarDB();

$documentoNombre         = mysqli_real_escape_string($db, $_POST['documento_nombre']);
$documentoDescripcion    = mysqli_real_escape_string($db, $_POST['documento_comentario']);

if(!$documentoNombreSistema = generarNombreSistema($_FILES['documento_archivo'])) {
    header("Location: /sharepoint/documentos/controllers/nuevoDocumento.php?ok=nsp");
    exit;
}

if(!move_uploaded_file($_FILES['documento_archivo']['tmp_name'], "../../archivos/$documentoNombreSistema")) {
    header("Location: /sharepoint/documentos/controllers/nuevoDocumento.php?ok=err");
    exit;
}

$query = "INSERT INTO
                archivos
            SET
                archivo_nombre                    = '$documentoNombre',
                archivo_nombre_sistema            = '$documentoNombreSistema', 
                archivo_descripcion               = '$documentoDescripcion',
                archivo_fecha_carga               = CURRENT_TIMESTAMP(),
                archivo_fecha_ultima_modificacion = NULL";

try {
    mysqli_query($db, $query);
} catch (\Throwable $th) {
    header('Location: /sharepoint/documentos/controllers/nuevoDocumento.php?ok=err');
    exit;
}

header("Location: /sharepoint/documentos/controllers/listadoDocumentos.php?ok=true");