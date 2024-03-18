<?php
// Archivo login.php

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["contrasena"])) {
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    // Validar el email y la contraseña (por ejemplo, verificar si existen en la base de datos)

    // Aquí puedes escribir tu lógica para validar el email y la contraseña
    // Si la validación es exitosa, puedes redirigir al usuario a la página de inicio o realizar alguna otra acción
    // Por ejemplo:
    if (validarCredenciales($email, $contrasena)) {
        // Redirigir al usuario a la página de inicio
        header("Location: ./log.php");
        exit();
    } else {
        // Mostrar un mensaje de error
        echo "Credenciales inválidas";
    }
}

// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"]) && isset($_POST["apellidoM"]) && isset($_POST["apellidoP"]) && isset($_POST["telefono"]) && isset($_POST["direccion"]) && isset($_POST["email"]) && isset($_POST["contrasena"])) {
    $nombre = $_POST["nombre"];
    $apellidoM = $_POST["apellidoM"];
    $apellidoP = $_POST["apellidoP"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    // Validar y guardar los datos del formulario en la base de datos

    // Aquí puedes escribir tu lógica para validar y guardar los datos en la base de datos
    // Por ejemplo:
    if (guardarUsuario($nombre, $apellidoM, $apellidoP, $telefono, $direccion, $email, $contrasena)) {
        // Mostrar un mensaje de éxito
        echo "Registro exitoso";
        Header("Location: ../log.php");
    } else {
        // Mostrar un mensaje de error
        echo "Error al registrar";
    }
}

// Función para validar las credenciales del usuario en la base de datos
function validarCredenciales($email, $contrasena) {
    // Aquí puedes escribir tu lógica para validar las credenciales del usuario
    // Por ejemplo, utilizando la extensión mysqli:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rentify";

    // Conectarse a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar la conexión
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Escapar los datos para prevenir inyecciones de SQL
    $email = mysqli_real_escape_string($conn, $email);
    $contrasena = mysqli_real_escape_string($conn, $contrasena);

    // Consultar la base de datos para verificar las credenciales
    $sql = "SELECT * FROM cliente WHERE email='$email' AND contrasena='$contrasena'";
    $result = mysqli_query($conn, $sql);

    // Verificar si se encontró un resultado
    if (mysqli_num_rows($result) == 1) {
        return true;
    } else {
        return false;
    }

    // Cerrar la conexión
    mysqli_close($conn);
}

// Función para guardar el usuario en la base de datos
function guardarUsuario($nombre, $apellidoM, $apellidoP, $telefono, $direccion, $email, $contrasena) {
    // Aquí puedes escribir tu lógica para guardar el usuario en la base de datos
    // Por ejemplo, utilizando la extensión mysqli:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rentify";

    // Conectarse a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar la conexión
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Escapar los datos para prevenir inyecciones de SQL
    $nombre = mysqli_real_escape_string($conn, $nombre);
    $apellidoM = mysqli_real_escape_string($conn, $apellidoM);
    $apellidoP = mysqli_real_escape_string($conn, $apellidoP);
    $telefono = mysqli_real_escape_string($conn, $telefono);
    $direccion = mysqli_real_escape_string($conn, $direccion);
    $email = mysqli_real_escape_string($conn, $email);
    $contrasena = mysqli_real_escape_string($conn, $contrasena);

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO cliente (nombre, apellidoM, apellidoP, telefono, direccion, email, contrasena) VALUES ('$nombre', '$apellidoM', '$apellidoP', '$telefono', '$direccion', '$email', '$contrasena')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>