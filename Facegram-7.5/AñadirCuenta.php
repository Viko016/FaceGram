<?php
$Nombre = $_POST["usuario"];
$Contraseña = $_POST["Contraseña"];

$conexion = new mysqli("BaseDatosAskMe",null,null,"Perfil-Usuarios");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>