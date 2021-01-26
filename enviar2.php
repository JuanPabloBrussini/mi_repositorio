<?php

$para = 'jbvirtualconsulting@gmail.com';

$asunto = 'Mensaje de mi sitio jbvirtualconsulting';

$nombree = $_POST['nombres'];
$mails = $_POST['email'];
$empresas = $_POST['mensajes'];

$header = 'From: ' . $mails . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$header = "enviado desde jbvirtualconsulting";

$mensajeCompleto = "MENSAJE: ". $empresas ." \n";
$mensajeCompleto .="NOMBRE:". $nombree ."\n";
$mensajeCompleto .= "E-MAIL: ". $mails ." \n";
$mensajeCompleto .= "Enviado el " . date('d/m/Y', time());

mail($para, $asunto, utf8_decode($mensajeCompleto), $header);

header("Location:gracias.html");


?>

