<?php
// fernanda.schnierle@gmail.com
// boda2019@gonzaloyfernanda.com

// mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] ) : bool
$from = 'From: Invitación <boda2019@gonzaloyfernanda.com>' . "\r\n";

$para = 'davidlunamontilla@outlook.com';
$titulo = 'Gonzalo & Fernanda';
$mensaje = "Mensaje de la cabecera";
$cabeceras = "";

// Cabeceras:
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$cabeceras .= 'To: David E Luna M <davidlunamontilla@outlook.com>' . "\r\n";
$cabeceras .= $from;

$box ='box-sizing: border-box;';
$styleBody = 'margin: 0; padding: 0; font-size: 1rem; color: #606060; background-color: #f0f0f0; font-family: "Open Sans", sans-serif, arial;' . $box;
$styleMail = 'margin: 20px auto; border: 1px solid white; background-color: #f9f9f9; box-shadow: 0 0 2px silver; max-width: 1200px; width: calc(100% - 20px); padding: 30px; line-height: 1.6;' . $box;


$html = <<<HTML

<!DOCTYPE html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Invitación</title>
</head>

<body style="$styleBody">
  <main style="$styleMail">
    <h1>Un título HTML</h1>
    <hr>
    <p>Contenido del párrafo</p>
  </main>
</body>
</html>

HTML;

$mensaje = $html;

echo "Resultado: " . mail($para, $titulo, $mensaje, $cabeceras);

?>