<?php

$nombre = $_POST["nombre"];
$nombremascota = $_POST["mascota"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "su mascota se llama " . $nombremascota . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "y su teléfono es: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $_POST["mensaje"] . " \r\n";
$mensaje .= "Enviado el " . date("d/m/Y", time());

$para = 'info@mumaeducacioncanina.com';
$asunto = 'Nuevo contacto web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:exito.html");

?>
