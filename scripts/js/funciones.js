function msgError(){
    Swal.fire({
        icon: "error",
        title: "Usuario incorrecto",
        showConfirmButton: false,
        timer: 2000
    }).then(function() {
        window.location = "index.php";
    });
}

function msgPasswordError(){
    Swal.fire({
        icon: "error",
        title: "Contraseña incorrecta",
        showConfirmButton: false,
        timer: 2000
    }).then(function() {
        window.location = "index.php";
    });
}

function closeSession(){
    Swal.fire({
        title: "Quieres salir del sistema",
        text: "Seleccciona si para salir",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Salir",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if(result.isConfirmed){
            window.location = "logout.php"
        }
    }).catch((error) => {
        console.log(error);
    })
}

function msgSave(){
    alert("Datos guardados correctamente con javascript");   
}

function loadDiv(div, url){
    $(div).load(url);
}

function registrarCliente(){
    var nombre=$("#nombre").val();
    var direccion=$("#direccion").val();
    var telefono=$("#telefono").val();
    var correo=$("#correo").val();

    alert(nombre+direccion+telefono+correo);

    $.post("registrarcliente.php",{"nombre":nombre,"direccion":direccion,"telefono":telefono,"correo":correo},function(respuesta){
        alert(respuesta);
        $("#nombre").val("");
        $("#direccion").val("");
        $("#telefono").val("");
        $("#correo").val("");
    });
}