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
