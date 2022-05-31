<?php

$destino = "info@mumaeducacioncanina.com";

$nombre = $_POST['nombre'];
$nombremascota = $_POST['mascota'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = "Envío de formulario";
$mensajecompleto ="\n Nombre: " . $nombre . "\n" . "Mascota: " . $nombremascota . "\n" . "Email: " . $email. "\n" . "Teléfono: " . $telefono . "\n" . "Mensaje: " . $mensaje;

mail($destino, $asunto, $mensajecompleto, $header);
header('Location: exito.html');
?>