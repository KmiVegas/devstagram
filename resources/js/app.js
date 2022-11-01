import Dropzone from "dropzone";

Dropzone.autoDiscover = false;
const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: "Sube aquí tu imagen",
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar Archivo",
    maxFiles: 1,
    uploadMultiple: false,
});

dropzone.on('sending', function(file,xhr,formData){
    console.log(file);
});

dropzone.on('success', function(file, response){
    console.log(response.imagen);
    //asignar el nombre de la imagen al campo oculto en el formulario de crear posts
    document.querySelector('[name="imagen"]').value = response.imagen;
});

dropzone.on('error', function(file, message){
    console.log(message);
})

dropzone.on('removedFile', function(){
    console.log("Archivo Eliminado");
})

