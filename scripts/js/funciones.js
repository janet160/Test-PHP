function msgError(){
    alert("Error de usuario con javascript.");
    window.location.href="index.php"
};

function msgPasswordError(){
    alert("Error de contraseña con javascript");
    window.location.href="index.php"
}

function msgSave(){
    alert("Datos guardados correctamente con javascript");   
}

function loadDiv(div, url){
    $(div).load(url);
}

function registrarCliente(){
    let nombre =$("#nombre").val();
    let direccion =$("#direccion").val();
    let telefono =$("#telefono").val();
    let correo =$("#correo").val();
    alert(nombre);

}