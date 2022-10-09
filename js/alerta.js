if(window.location.href.split('?').includes('ok=true')) {
    Swal.fire({
        icon: 'success',
        title: 'Ok',
        text: 'Operación Exitosa',
    })
} else if(window.location.href.split('?').includes('ok=nsp')) {
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: "Formato No Soportado",
    });
} else if(window.location.href.split('?').includes('ok=err')) {
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: "Error al cargar el documento",
    });
} else if(window.location.href.split('?').includes('ok=err-doc')) {
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: "Error al obtener el listado de documentos",
    });
}