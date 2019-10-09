<?php

$ruta = "vista/images/componentes/cronometro-plano.svg";

$cronometro = "No hay datos";

if ( file_exists($ruta) )
  $cronometro = file_get_contents($ruta);

$timer = <<<HTML

  <div class="timer">
    $cronometro
  </div>

HTML;

?>