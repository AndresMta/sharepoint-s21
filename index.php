<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body class="bg-light">
    <?php require_once './auxiliares/navbar.php'; ?>
    
    <div class="container-fluid">
        <div class="row align-items-center" style="height: calc(100vh - 54px);">
            <div class="col text-center">
                <h1 class="text-center">SHARE<b>POINT</b></h1>
                <h4 class="text-center fw-light mb-5">Documentos Compartidos</h4>
                <a type="button" class="btn btn-outline-dark text-center" href="/sharepoint/documentos/controllers/nuevoDocumento.php">Nuevo Documento</a>
            </div>
        </div>
    </div>
    
    <script src="./js/alerta.js"></script>
</body>
</html>