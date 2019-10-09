<?php
define("DEV", "development");
define("PRO", "produccion");

function JavaScript( string $type ) {
  $content = "";

  if ( empty(trim($type)) )
    return $content;

  $ruta = __DIR__ . "/json/scripts.json";
  $json = ( file_exists($ruta) ) ? json_decode(file_get_contents($ruta), true) : [];

  if ( !is_array($json) || count($json) < 1 )
    return $content;

  switch ($type) {
    case DEV:
      $js = $json[$type];

      foreach ( $js as $key => $script ) {
        $content .= ( $key === 0 || $key === (int) count($js) - 1 ) ? 
        "\n\t\t<script src=\"$script\"></script>" : "\n\t\t<script src=\"$script\" crossorigin=\"anonymous\"></script>"; 
      }
      break;
    
    case PRO:
      $js = $json[$type]["ruta"];
      $hash = $json[$type]["hash"];

      foreach ( $js as $key => $script ) {
        if ( $key === 0 || $key === (int) count($js) - 1) {
          $content .= "\n\t\t<script src=\"$script\"></script>";

        }else {
          $content .= "\n\t\t<script src=\"$script\" integrity=\"$hash[$key]\" crossorigin=\"anonymous\"></script>";
        }
      }
      break;
  }
  $content .= "\n";
  return $content;
}

// Valores a modificar:
$javascript = "\t<script src=\"recursos/extensiones/js/moment.min.js\"></script>";
$javascript .= JavaScript( DEV );
?>
