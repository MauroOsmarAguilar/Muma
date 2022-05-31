<?php
$destino = "info@mumaeducacioncanina.com";

$email = $_POST['email'];

$header = "Nuevo contacto para newsletter";
$mensajecompleto ="\n E-mail: " . $email;
$asunto = 'Nuevo contacto para newsletter';

mail($destino, $asunto, $mensajecompleto, $header);
header('Location: gracias.html');
?>