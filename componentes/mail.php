<?php
// fernanda.schnierle@gmail.com

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
$styleBody = 'margin: 0; padding: 0; font-size: 1rem; color: #295053; background-color: white; font-family: \'Open Sans\', sans-serif, arial;' . $box;

$hr = '<hr style="border: 0; border-bottom: 1px solid #3400be;">';

// Procesamiento de imágenes:
$rutaImagen = '../vista/images/Iniciales_2.png';
$imagen = "";

if ( file_exists($rutaImagen) ) {
  $imdata = file_get_contents($rutaImagen);
  $imdata = base64_encode($imdata);
  $attr = 'alt="Logotipo" style="float: left; width: 160px; max-width: calc(100 - 20px);"';
  $imagen = "<img src='data:image/png;base64," . $imdata . "' " . $attr . " />";
}

$nombres = "";
$asistentes = "";
$asistir = "";


// Validación de Google:
$gcaptcha = '<div class="g-recaptcha" data-sitekey="6LeBh7MUAAAAAGooVKR0lComTLxSw11hrlzcbU4e"></div>';

if ( !isset($_POST['g-recaptcha-response']))
  return;


if ( empty(trim($_POST['g-recaptcha-response'])) )
  return;

// Almacenar los datos del CAPTCHA provenientes del formulario:
$captcha = (string) $_POST['g-recaptcha-response'];

// Obtener una respuesta de Google vía JSON:
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeU07wUAAAAAAAx12-FFdFN2J-s6Iv9gtnXrsCx&response=$captcha");

// Obtener la respuesta indicando si el usuario es o no un robot:
$resultado = json_decode($response, TRUE);

// Si no se logra comprobar que la persona es un robot
// no se enviará el correo:   
if ( !$resultado['success'] )
    return;

function enviarCorreo( &$__nombres, &$__asistentes, &$__asistir ) {
  $__asistir = "Lamentablemente no podré asistir";

  if ( !isset($_POST['nombre']) || !isset($_POST['nAsistentes']) || !isset($_POST['asistire-noasistire']) )
    return false;

  if ( empty(trim($_POST['nombre'])) || empty(trim($_POST['nAsistentes'])) || empty(trim($_POST['asistire-noasistire'])) )
    return false;

  // Nombres del invitado:
  $__nombres = $_POST['nombre'];
  $__nombres = (string) htmlentities($__nombres);
  
  // Asistentes, incluyendo al invitado:
  $__asistentes = (int) $_POST['nAsistentes'];
  
  // Obtener los datos de la confirmación de asistencia:
  $__asistir = $_POST['asistire-noasistire'];
  $__asistir = htmlentities($__asistir);

  if ( !is_numeric($__asistentes) )
    return false;

  if ( $__asistentes < 1 )
    return false;

  if ( $__asistentes === 1 ) {
    $__asistentes = $__asistentes . " persona";
    return true;
  }

  $__asistentes = $__asistentes . " personas";
  return true;
}

// Mostrar resultados:
$continuar = enviarCorreo( $nombres, $asistentes, $asistir );

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
  <main>
      <div style="margin: 0 auto; max-width: 800px; padding: 30px; background-color: #f9f9f9">
          
        <div style="display: flex; justify-content: flex-start; align-items: center;">
          <!-- <img src="../vista/images/Iniciales_2.svg" alt="Logotipo" style="float: left; width: 150px; max-width: calc(100 - 20px);"> -->
          $imagen
          <h1 style="padding-left: 30px; font-variant: small-caps; color: #489da4; font-size: 2rem; margin: 0;">Invitación</h1>
        </div>

        $hr

        <h3 style="font-size: 1.5rem; font-variant: small-caps; margin: 0 auto; margin-top: 30px;">Datos del Invitado</h3>
        <ul style="padding: 0 30px; margin: 0;">
          <li style="font-variant: small-caps"><span><strong>Nombres: </strong><br>$nombres</span></li>
          <li style="margin-top: 10px; font-variant: small-caps"><span><strong>Participantes: </strong><br>$asistentes</span></li>
        </ul>

        <h3 style="font-variant: small-caps">$asistir</h3>
    </div>

  </main>
</body>
</html>

HTML;

$mensaje = $html;

$confirmar = false;

if ( $continuar )
  $confirmar = mail($para, $titulo, $mensaje, $cabeceras);

if ( $confirmar )
  echo "Gracias por confirmarnos";
?>