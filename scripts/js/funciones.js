function msgError() {
    Swal.fire({
        icon: "error",
        title: "Usuario incorrecto",
        showConfirmButton: false,
        timer: 2000
    }).then(function () {
        window.location = "index.php";
    });
}

function msgPasswordError() {
    Swal.fire({
        icon: "error",
        title: "Contraseña incorrecta",
        showConfirmButton: false,
        timer: 2000
    }).then(function () {
        window.location = "index.php";
    });
}

function closeSession() {
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
        if (result.isConfirmed) {
            window.location = "logout.php"
        }
    }).catch((error) => {
        console.log(error);
    })
}

function msgSave() {
    Swal.fire({
        icon: "success",
        title: "Registro exitoso",
        showConfirmButton: false,
        timer: 2000
    }).then(function () {
        window.location = "menu.php";
    });
}

function loadDiv(div, url) {
    $(div).load(url);
}

function registrarCliente() {
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();


    $.post("registrar/registrarCliente.php", {
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo
    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }

        // Clear input fields regardless of the response
        $("#nombre").val("");
        $("#direccion").val("");
        $("#telefono").val("");
        $("#correo").val("");
    });
}



function registrarVehiculo() {
    var matricula = $("#matricula").val();
    var modelo = $("#modelo").val();
    var color = $("#color").val();
    var puertas = $("#puertas").val();
    var tipo = $("#tipo").val();
    var clienteID = $("#id_cliente").val();

    $.post("registrar/registrarVehiculo.php", {
        "matricula": matricula,
        "modelo": modelo,
        "color": color,
        "puertas": puertas,
        "tipo": tipo,
        "id_cliente": clienteID
    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }

        $("#matricula").val("");
        $("#modelo").val("");
        $("#color").val("");
        $("#puertas").val("");
        $("#tipo").val("");
        $("#id_cliente").val("");
        

    });
}



function registrarCajon() {
    var numero = $("#numero").val();
    var estatus = $("#estatus").val();

    $.post("registrar/registrarCajon.php", {
        "numero": numero,
        "estatus": estatus
    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }

        $("#numero").val("");
        $("#estatus").val("");        

    });
}



function registrarEmpleado() {
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    var usuario = $("#usuario").val();
    var contrasena = $("#contrasena").val();

    $.post("registrar/registrarEmpleado.php", {
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo,
        "usuario": usuario,
        "contrasena": contrasena
    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }

        $("#nombre").val("");
        $("#direccion").val("");
        $("#telefono").val("");
        $("#correo").val("");
        $("#usuario").val("");
        $("#contrasena").val("");

    });
}

function registrarTarifa() {
    var tarifa = $("#tarifa").val();
    var monto = $("#monto").val();

    $.post("registrar/registrarTarifa.php", {
        "tarifa": tarifa,
        "monto": monto
    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }

        $("#tarifa").val("");
        $("#monto").val("");        

    });
}

function registrarRegistro() {

    var id_vehiculo = $("#id_vehiculo").val();
    var id_cajon = $("#id_cajon").val();
    var id_tarifa = $("#id_tarifa").val();
    

    $.post("registrar/registrarRegistro.php", {

        "id_vehiculo": id_vehiculo,
        "id_cajon": id_cajon,
        "id_tarifa": id_tarifa,

    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }

   
        $("#id_vehiculo").val(""); 
        $("#id_cajon").val("");
        $("#id_tarifa").val("");        

    });
}


function eliminarCajon(id_cajon){
    $.post("eliminar/eliminarCajon.php",{
        
        "id_cajon":id_cajon
        
    },function(result){
        alert(result)
    })
    loadDiv($("#result"), 'consultar/consultarCajon.php')
}
function eliminarRegistro(id_registro){
    $.post("eliminar/eliminarRegistro.php",{
        
        "id_registro":id_registro
        
    },function(result){
        alert(result)
    })
}
function eliminarCliente(id_cliente){
    $.post("eliminar/eliminarRegistro.php",{
        
        "id_cliente":id_cliente
        
    },function(result){
        alert(result)
    })
}
function eliminarVehiculo(id_vehiculo){
    $.post("eliminar/eliminarRegistro.php",{
        
        "id_vehiculo":id_vehiculo
        
    },function(result){
        alert(result)
    })
}
function eliminarTarifa(id_tarifa){
    $.post("eliminar/eliminarRegistro.php",{
        
        "id_tarifa":id_tarifa
        
    },function(result){
        alert(result)
    })
}
