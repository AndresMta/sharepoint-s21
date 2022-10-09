<?php

function conectarDB() {
    $db = mysqli_connect('localhost', 'root', '', 'sharepoint');

    if(!$db) {
        echo 'Error en la base de datos';
        exit;
    } 

    return $db;
}