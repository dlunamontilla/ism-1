<?php
// fernanda.schnierle@gmail.com
// boda2019@gonzaloyfernanda.com

// mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] ) : bool
$from = 'From: Invitación <noreply@lunamontilla.net>' . "\r\n";

$para = 'davidlunamontilla@outlook.com';
$titulo = 'Gonzalo & Fernanda';
$mensaje = "Mensaje de la cabecera";
$cabeceras = "";

// Cabeceras:
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$cabeceras .= 'To: David E Luna M <davidlunamontilla@outlook.com>' . "\r\n";
$cabeceras .= $from;

echo "Resultado: " . mail($para, $titulo, $mensaje);

?>