<?php


$nombre = $_POST['Nombre'];
$correo = $_POST['Correo'];
$mensaje = $_POST['Mensaje'];

$destinatario = "fernandops.3dp@gmail.com";
$asunto = "mensaje de la web";

$contenido = "Nombre" . $nombre;

mail($destinatario, $asunto, $mail);


?>