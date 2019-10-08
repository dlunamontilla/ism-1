<?php
include __DIR__ . "/DLPeticiones.php";

// Área de peticiones:
$restaurantes = [
  "restaurantes" => NULL
];

$queVisitar = [
  "que-visitar" => NULL
];

$centrosComerciales = [
  "centros-comerciales" => NULL
];

$peticion = new DLPeticiones( DL_GET );

$ruta = [
  "centros-comerciales" => "json/centros-comerciales.json",
  "que-visitar" => "json/que-visitar.json",
  "restaurantes" => "json/restaurantes.json"
];

function content ( string $__ruta ) : array {
  $content = [];

  if ( empty(trim($__ruta)) )
    return $content;

  $json = "";

  if ( file_exists($__ruta) )
    $json = file_get_contents($__ruta);

  $content = json_decode($json, true);

  return $content;
}


$array = [];

if ( $peticion -> validar( $restaurantes ) )
  $array = content( $ruta["restaurantes"] );

if ( $peticion -> validar( $centrosComerciales ) )
  $array = content( $ruta["centros-comerciales"] );

if ( $peticion -> validar( $queVisitar ) )
  $array = content( $ruta["que-visitar"] );


$contenido = "";

if ( is_array($array) && count($array) > 0 ) {
  if ( array_key_exists("content", $array) ){
    foreach ($array['content'] as $key => $content) {
      $contenido .= "\t<li>\n";
      $contenido .= "\t\t<p class=\"t--big t--semi-bold\">$content[title]</p>\n";
      $contenido .= "\t\t<p>$content[content]</p>\n";
      $contenido .= "\t</li>\n";
    }
  }
}


function ul( $li = "" ) : string {
  if ( empty(trim($li)) )
    return "";

  return "<ul>\n$li</ul>\n";
}

$contenido = ul( $contenido );

?>

<?= $contenido; ?>