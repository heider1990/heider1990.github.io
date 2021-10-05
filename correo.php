<?php


$destinatario = ('heiderarismendy@hotmail.com')
$nombre = $_POST['Nombre'];
$numero = $_POST['numero'];
$correo = $_POST['email'];
$pregunta = $_POST['Pregunta'];
$header = "Enviado desde mi pagina web"

$mensajeCompleto = $pregunta;

mail($destinatario, $nombre, $numero, $pregunta, $header);


?>