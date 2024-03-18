function ClienteVali() {
    var nombre, apellidoP, apellidoM, telefono, direccion, email, contrasena; 
    nombre = document.getElementById("nombre").value;
    apellidoP = document.getElementById("apellidoP").value;
    apellidoM = document.getElementById("apellidoM").value;
    telefono = document.getElementById("telefono").value;
    direccion = document.getElementById("direccion").value;
    email = document.getElementById("email").value; 
    contrasena = document.getElementById("contrasena").value;

    expresion = /\w+@\w+\.+[a-z]/;


    if(nombre === "" || apellidoP === "" || apellidoM === "" || telefono === "" || direccion === "" || email === "" || contrasena === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(nombre.length>30) {
        alert("El nombre es muy largo");
        return false;
    }
    else if(apellidoP.length>30) {
        alert("Los apellidos son muy largos"); 
        return false;
    }
    else if(apellidoM.length>30) {
        alert("Los apellidos son muy largos"); 
        return false;
    }
    else if(telefono.length!=10) {
        alert("Tu telefono solo deben ser 10 digitos"); 
        return false;
    }
    else if(isNaN(telefono)) {
        alert("El telefono no es valido"); 
        return false;
    }
    else if(direccion.length>30) {
        alert("Tu dirección esta mal"); 
        return false;
    }
    else if(email.length>100) {
        alert("El correo es muy largo"); 
        return false;
    }
    else if(!expresion.test(email)){
        alert("El correo no es valido"); 
        return false;
    }
    else if(contrasena.length!=12) {
        alert("La contraseña deber solo 12 caracteres"); 
        return false;
    }
    else{
        window.location = "../bdCliente.php";
    }
}
