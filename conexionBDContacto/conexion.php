<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    $bd="rentify";


    $con=mysqli_connect($host,$user,$pass, $bd);

     mysqli_select_db($con,$bd);

    return $con;
}
