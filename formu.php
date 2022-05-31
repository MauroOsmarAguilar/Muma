<?php
$destino = "info@mumaeducacioncanina.com";

$nombre = $_POST['nombre'];
$nombremascota = $_POST['mascota'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = "Nuevo contacto web";
$mensajecompleto ="\n Nombre: " . $nombre . "\n" . "Mascota: " . $nombremascota . "\n" . "Email: " . $email. "\n" . "Telefono: " . $telefono . "\n" . "Mensaje: " . $mensaje;
$asunto = 'Nuevo contacto web';

mail($destino, $asunto, $mensajecompleto, $header);
header('Location: exito.html');
?>