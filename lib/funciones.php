<?php

function generarNombreUnico() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $charactersLength; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}


function generarNombreSistema($archivo) {

    switch ($archivo['type']) {
        case 'application/pdf':
            $extension = 'pdf';
            break;
        
        case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
            $extension = 'xlsx';
            break;

        case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
            $extension = 'pptx';
            break;

        case 'text/plain':
            $extension = 'txt';
            break;

        case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
            $extension = 'docx';
            break;

        default:
            return false;
            break;
    }

    $nombreSistema = generarNombreUnico() . "." . $extension;

    return $nombreSistema;
}