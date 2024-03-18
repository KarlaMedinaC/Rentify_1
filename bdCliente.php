<?php
require('conexion.php');



    $nombre = $_POST["nombre"];
    $apellidoM = $_POST["apellidoM"];
    $apellidoP = $_POST["apellidoP"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];


            $consulta = "SELECT * FROM `cliente` WHERE email='$email'";
            $rtaa = mysqli_query($conectado, $consulta);
            
            $filas = mysqli_fetch_array($rtaa);

            

            if (isset($filas ["email"]) || $filas ["email"]== $email) {
                echo "<script text='text/javascript'>
                alert('!El correo ya existe!');
                window.location='registroCliente.php';
                </script>";
                ;
            } else {
                $insertar = "INSERT INTO `cliente` (`nombre`, `apellidoM`, `apellidoP`, `telefono`, `direccion`, `email`, `contrasena`) 
                VALUES ('$nombre', '$apellidoM', '$apellidoP', '$telefono', '$direccion', '$email', '$contrasena')";
                $rta = mysqli_query($conectado, $insertar);
                
    
                if (!$rta) {
                    echo "<script text='text/javascript'>
                    alert('!No se pudo resgistrar!');
                    window.location='registroCliente.php';
                    </script>";
                    ;
                } else {
                    echo "<script text='text/javascript'>
                    alert('Registro exitoso');
                        window.location='logNew.php';
                        </script>";
    
                }
                mysqli_free_result($rta);
            }
            

           
       
            mysqli_free_result($rtaa);
mysqli_close($conectado);
?>