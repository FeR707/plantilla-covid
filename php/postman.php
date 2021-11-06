<?php

require("conexcion.php");

$nombre="";
$telefono="";
$email="";
$mensaje="";

if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];   
}

if (isset($_POST["telefono"])) {
    $telefono = $_POST["telefono"];
}

if (isset($_POST["email"])) {
    $email = $_POST["email"];
}

if (isset($_POST["mensaje"])) {
    $mensaje = $_POST["mensaje"];
}

$sql = "INSERT INTO datos (nombre, telefono, email, mensaje) VALUES ('$nombre', '$telefono','$email', '$mensaje')";

if(mysqli_query($conn,$sql)){
    echo "New record created successfully";
}
else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
